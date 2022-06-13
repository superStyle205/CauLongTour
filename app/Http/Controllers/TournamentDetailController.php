<?php

namespace App\Http\Controllers;


use App\Models\Athlete;
use App\Models\Form;
use App\Models\FormTournament;
use App\Models\AthleteFormTournament;
use App\Models\Match;
use App\Models\MatchDetail;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class TournamentDetailController extends Controller
{

    public function index($tournament_id) {
        $athletes = Athlete::select()->get();
        $forms = Form::select()->orderBy('name')->get();

        $formTournament = FormTournament::where('tournament_id', $tournament_id)
                            ->with('tournament', 'form')
                            ->get();

        // data for add form to tour
        $formsArr = [];
        foreach($forms as $form) {
            $isExist = false;
            foreach ($formTournament as $formTour) {
                if ($form->id == $formTour->form_id) {
                    $isExist = true;
                    break;
                }
            }
            if (!$isExist) {
                $formsArr[$form->id] = $form->name.' ['.$form->range_old.']';
            }
        }

        // ------------------------------------------------------------------------------------------------------

        // data for add athlete to tour
        $currentFormWithTour = [];
        foreach ($formTournament as $formTour) {
            $currentFormWithTour[$formTour->form->id] = $formTour->form->name.' ['.$formTour->form->range_old.']';
        }

        $athletesArr = [];
        foreach($athletes as $athlete) {
            $athletesArr[$athlete->id] = $athlete->name.' ['.$athlete->unit.']';
        }

        return view('tournaments.tourDetail', compact('athletesArr','formsArr',
                                                'tournament_id','currentFormWithTour'));
    }

    public function addForm(Request $request, $tournament_id) {
        $this->validate($request, [
            'formId' => 'required',
            'totalAthlete' => 'required'
        ]);

        $formId = $request->input('formId');
        $totalAthlete = $request->input('totalAthlete');

        $formTournament = FormTournament::where([['tournament_id', '=', $tournament_id],
                                            ['form_id', '=', $formId]])
                            ->get();
        if ($formTournament->count() > 0) {
            throw ValidationException::withMessages(['my_bad' => 'form has exist in tournament']);
        } else {
            $formTournamentTmp = new FormTournament;
            $formTournamentTmp->tournament_id = $tournament_id;
            $formTournamentTmp->form_id = $formId;
            $formTournamentTmp->total_athlete = $totalAthlete;
            $formTournamentTmp->save();
        }

        return redirect()->route('tourDetails', ['tournament_id' => $tournament_id])
                    ->with('success','The form is add successfully');
    }


    public function addAthlete(Request $request, $tournament_id) {
        $this->validate($request, [
            'formId' => 'required',
            'athleteId' => 'required'
        ]);

        $formId = $request->input('formId');
        $athleteId = $request->input('athleteId');

        $athleteFormTournament = AthleteFormTournament::where([
                                                                ['tournament_id', '=', $tournament_id],
                                                                ['form_id', '=', $formId],
                                                                ['athlete_id', '=', $athleteId]
                                                            ])
                                    ->get();
        if ($athleteFormTournament->count() > 0) {
            throw ValidationException::withMessages(['my_bad' => 'athlete has exist with tournament and form. Please add athlete other']);
        } else {
            $formTournament = FormTournament::where([
                                    ['tournament_id', '=',$tournament_id],
                                    ['form_id', '=',$formId]
                                ])
                            ->with('tournament', 'form')
                            ->get()
                            ->first();
            $athleteFormTournamentTMP = AthleteFormTournament::where([
                                                ['tournament_id', '=', $tournament_id],
                                                ['form_id', '=', $formId]
                                            ])
                                        ->get();
            if ($athleteFormTournamentTMP->count() < $formTournament->total_athlete) {
                $athleteFormTourTmp = new AthleteFormTournament;
                $athleteFormTourTmp->tournament_id = $tournament_id;
                $athleteFormTourTmp->form_id = $formId;
                $athleteFormTourTmp->athlete_id = $athleteId;
                $athleteFormTourTmp->save();
            } else {
                throw ValidationException::withMessages(['my_bad' => 'exceed the maximum athlete for this form and tournament']);
            }

        }

        return redirect()->route('tourDetails', ['tournament_id' => $tournament_id])
                    ->with('success','The athlete is add successfully');
    }

    public function buildMatch(Request $request, $tournament_id) {
        $this->validate($request, [
            'formId' => 'required'
        ]);

        $formId = $request->input('formId');

        $formTournament = FormTournament::where([
                                    ['tournament_id', '=',$tournament_id],
                                    ['form_id', '=',$formId]
                                ])
                            ->with('tournament', 'form')
                            ->get()
                            ->first();
        $athleteFormTournamentCurrent = AthleteFormTournament::where([
                                            ['tournament_id', '=', $tournament_id],
                                            ['form_id', '=', $formId]
                                        ])
                                    ->get();
        if ($athleteFormTournamentCurrent->count() < $formTournament->total_athlete) {
            $count = $formTournament->total_athlete - $athleteFormTournamentCurrent->count();
            throw ValidationException::withMessages(['my_bad'
                        => 'total athletes not not enough for this form. Please add '.$count.' athlete']);
        } else {
            $athleteArr = $athleteFormTournamentCurrent->toArray();
            // random van dong vien
            shuffle($athleteArr);

            $round = 0;
            for ($i=1; $i <=5; $i++) {
                if (pow(2, $i) == $formTournament->total_athlete) {
                    $round = $i;
                    break;
                }
            }


            $matchForcheck =  Match::where([
                    ['tournament_id' , '=', $tournament_id],
                    ['form_id', '=', $formId],
                    ['round_id', '=', $round]
                ])->with('round')->get();

            if ($matchForcheck->count()) {
                throw ValidationException::withMessages(['my_bad'
                        => 'matchs is exist. Don\'t create match with this form']);
            }

            $parentMatchs = [];
            for ($i = 1; $i <= $round; $i++) {
                $parentMatchsTmp = $parentMatchs;
                $parentMatchs = [];
                if ($i == 1) {
                    $matchTmp = new Match;
                    $matchTmp->tournament_id = $tournament_id;
                    $matchTmp->form_id = $formId;
                    $matchTmp->round_id = $i;
                    $matchTmp->match_parent_id = null;
                    $matchTmp->save();
                    array_push($parentMatchs, $matchTmp->id);
                } else {
                    foreach ($parentMatchsTmp as $parentMatchID) {
                        for ($j = 0; $j < 2; $j++) {
                            $matchTmp = new Match;
                            $matchTmp->tournament_id = $tournament_id;
                            $matchTmp->form_id = $formId;
                            $matchTmp->round_id = $i;
                            $matchTmp->match_parent_id = $parentMatchID;
                            $matchTmp->save();
                            array_push($parentMatchs, $matchTmp->id);
                        }
                    }
                }
            }

            $matchCurrent =  Match::where([
                    ['tournament_id' , '=', $tournament_id],
                    ['form_id', '=', $formId],
                    ['round_id', '=', $round]
                ])->with('round')->get()->toArray();

            $j=0;
            for ($i=0; $i< count($matchCurrent); $i++) {
                $matchDetailTmp1 = new MatchDetail;
                $matchDetailTmp1->match_id = $matchCurrent[$i]['id'];
                $matchDetailTmp1->athlete_id = $athleteArr[$j]['athlete_id'];
                $matchDetailTmp1->team = 1;
                $matchDetailTmp1->save();

                $matchDetailTmp2 = new MatchDetail;
                $matchDetailTmp2->match_id = $matchCurrent[$i]['id'];
                $matchDetailTmp2->athlete_id = $athleteArr[$j+1]['athlete_id'];
                $matchDetailTmp2->team = 2;
                $matchDetailTmp2->save();
                $j+=2;
            }
        }

        return redirect()->route('tourDetails', ['tournament_id' => $tournament_id])
                    ->with('success','The match tree is created successfully');
    }
}
