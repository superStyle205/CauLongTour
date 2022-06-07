<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\MatchDetail;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Not implement
    }

    /**
     * Handle get final result of match
     *
     * @return \Illuminate\Http\Response
     */
    public function getStatusMatch($match_details)
    {
        if (count($match_details) == 2) {
            $team1 = $match_details[0];
            $team2 = $match_details[1];
        } else if (count($match_details) == 4) {
            $team1 = $match_details[0];
            $team12 = $match_details[1];
            $team2 = $match_details[2];
            $team22 = $match_details[3];
        } else {
            // no handle
        }

        $point1 = 0;
        $point2 = 0;

        for ($i = 1; $i < 4; $i++) {
            if ($team1['result_set_'.$i] > $team2['result_set_'.$i]) {
                $point1 += 1;
            }
            else if (($team1['result_set_'.$i] < $team2['result_set_'.$i])) {
                $point2 += 1;
            } else {
                // no handle
            }
        }

        $matchDetailsWithFinalResult = [];
        if (count($match_details) == 2) {
            $team1['finalResult'] = $point1;
            $team2['finalResult'] = $point2;
            $matchDetailsWithFinalResult = array($team1, $team2);
        } else if (count($match_details) == 4) {
            $team1['finalResult'] = $point1;
            $team12['finalResult'] = $point1;
            $team2['finalResult'] = $point2;
            $team22['finalResult'] = $point2;
            $matchDetailsWithFinalResult = array($team1, $team12, $team2, $team22);
        } else {
            // no handle
        }

        return $matchDetailsWithFinalResult;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Not implement
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Not implement
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $tournament_id, $form_id)
    {
        // get total round of tour id and form id
        $totalRound = Match::where([
                                    ['tournament_id', '=', $tournament_id],
                                    ['form_id', '=', $form_id]
                                ])
                                ->select('round_id')
                                ->distinct()
                                ->get()
                                ->count();

        // build tree match of tour id and form id
        $matchTree = [];
        for ($i = $totalRound; $i > 0; $i--) {
            $matchs = Match::where([
                                    ['tournament_id', '=', $tournament_id],
                                    ['form_id', '=', $form_id],
                                    ['round_id', '=', $i]
                                ])
                                ->with('form', 'round')
                                ->orderBy('id')
                                ->get()
                                ->toArray();

            for ($j = 0; $j < count($matchs); $j++) {
                $match_details = [];
                $matchDetailsTmp = MatchDetail::where('match_id', $matchs[$j]['id'])
                                                ->with('athlete')
                                                ->orderBy('team')
                                                ->orderBy('id')
                                                ->get()
                                                ->toArray();

                $match_details = $matchDetailsTmp;
                
                // get final result of match
                if (count($match_details) > 0) {
                    $match_details = $this->getStatusMatch($match_details);
                }
                $matchs[$j]['match_details'] = $match_details;
            }

            array_push($matchTree, $matchs);
        }

        return view('matchs.show', compact('totalRound', 'matchTree'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        // Not implement
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match $match)
    {
        // Not implement
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        // Not implement
    }
}
