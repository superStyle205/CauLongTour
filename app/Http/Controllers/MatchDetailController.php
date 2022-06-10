<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\MatchDetail;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class MatchDetailController extends Controller
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
     * @param  \App\Models\MatchDetail  $matchDetail
     * @return \Illuminate\Http\Response
     */
    public function show(MatchDetail $matchDetail)
    {
        // Not implement
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MatchDetail  $matchDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $match_id)
    {
        // get all match detail of match id
        $matchDetails = MatchDetail::where('match_id', $match_id)
                                        ->with('match', 'athlete')
                                        ->orderBy('team')
                                        ->orderBy('id')
                                        ->get();

        $match = Match::find($match_id);

        return view('matchDetails.edit', compact('matchDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MatchDetail  $matchDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $match_id)
    {
        // get new result set 1 2 3 of 2 team
        $resultSet = [];
        for ($i = 1 ; $i <= 2; $i++) {
            for ($j = 1 ; $j <= 3; $j++) {
                $resultSet['team'.$i]['set'.$j] = $request->input('team'.$i.'set'.$j);
            }
        }

        // valid date point
        $resultCheckPoint = [];
        for ($j = 1 ; $j <= 3; $j++) {
            $resultCheckPoint[$j-1] = $this->validatePoint($resultSet['team1']['set'.$j], $resultSet['team2']['set'.$j]);
        }

        if (in_array("inValid", $resultCheckPoint) || in_array("inProgress", $resultCheckPoint)) {
            $setError = in_array("inValid", $resultCheckPoint) ? (array_search("inValid", $resultCheckPoint) + 1)
                                : (array_search("inProgress", $resultCheckPoint) + 1);
            throw ValidationException::withMessages(['my_bad' => 'Input value of result set '
                                                                        .$setError
                                                                        .' is incorrect']);
        }

        // update result point for match detail current
        $matchDetailsTeam = MatchDetail::where('match_id', $match_id)->get();
        foreach ($matchDetailsTeam as $matchDetail) {
            $matchDetail->result_set_1 = $resultSet['team'.$matchDetail->team]['set1'];
            $matchDetail->result_set_2 = $resultSet['team'.$matchDetail->team]['set2'];
            $matchDetail->result_set_3 = $resultSet['team'.$matchDetail->team]['set3'];
            $matchDetail->save();
        }

        // get thong tin tran tiep theo
        $nextMatch = Match::where('id', $match_id)
                                ->with('parent_match')
                                ->get();

        // neu chua phai tran chung ket thi update/add thong tin tran tiep theo
        if ($nextMatch[0]->parent_match != null) {
            $nextMatchId = $nextMatch[0]->parent_match->id;

            $preMatchs = Match::where('id', $nextMatchId)->with('children_matchs')->get();
            // check xem next match se dien vao team 1 hay 2
            if ($match_id == $preMatchs[0]->children_matchs[0]->id) {
                $nextTeam = "1";
            } else {
                $nextTeam = "2";
            }

            // check xem ai win tran hien tai
            $teamWin = $this->teamWin($resultSet);

            // lay tinh trang match details cua nextmatch
            $nextMatchDetails = MatchDetail::where([
                                                        ['match_id', '=', $nextMatchId],
                                                        ['team', '=', $nextTeam]
                                                    ])->get();
            if ($nextMatchDetails->count() > 0) {
                $matchDetailsTeamWin = MatchDetail::where([
                                                        ['match_id', '=', $match_id],
                                                        ['team', '=', $teamWin]
                                                    ])->get();
                //echo '<pre>';
                //print_r($matchDetailsTeamWin->toArray());
                //return;
                for ($i=0; $i < $matchDetailsTeamWin->count(); $i++) {
                    $upateMatchDetail = $nextMatchDetails[$i];
                    $upateMatchDetail->athlete_id = $matchDetailsTeamWin[$i]->athlete_id;
                    $upateMatchDetail->result_set_1 = 0;
                    $upateMatchDetail->result_set_2 = 0;
                    $upateMatchDetail->result_set_3 = 0;
                    $upateMatchDetail->save();
                }
            } else {
                foreach ($matchDetailsTeam as $matchDetail) {
                    if ($matchDetail->team == $teamWin) {
                        $newNextMatchDetail = new MatchDetail;
                        $newNextMatchDetail->match_id = $nextMatchId;
                        $newNextMatchDetail->athlete_id = $matchDetail->athlete_id;
                        $newNextMatchDetail->team = $nextTeam;
                        $newNextMatchDetail->save();
                    }
                }
            }
        }

        return redirect()->route('showMatchs',
                                    [
                                        'tournament_id' => $nextMatch[0]->tournament_id,
                                        'form_id' => $nextMatch[0]->form_id
                                    ]
                                );
    }

    /**
     * This function use for valid input point
     *
     * @param  $firstPoint
     * @param  $secondPoint
     * @return array status of each set ['inValid', 'finish', 'inProgress']
     */
    public function validatePoint($firstPoint, $secondPoint) {
        if ($firstPoint <= $secondPoint) {
            if (($secondPoint-$firstPoint > 2 && $secondPoint > 21)
                || ($firstPoint < 0 || $firstPoint == 30 || $secondPoint > 30)) {
                return "inValid";
            } else {
                if ($secondPoint > 20 && $secondPoint-$firstPoint > 1 || $secondPoint == 30) {
                    return "finish";
                } else {
                    return "inProgress";
                }
            }
        } else {
            return $this->validatePoint($secondPoint, $firstPoint);
        }
    }

    public function teamWin($resultSet) {
        $point1 = 0;
        $point2 = 0;
        for ($j = 1 ; $j <= 3; $j++) {
            if ($resultSet['team1']['set'.$j] > $resultSet['team2']['set'.$j]) {
                $point1 += 1;
            } elseif ($resultSet['team1']['set'.$j] < $resultSet['team2']['set'.$j]) {
                $point2 += 1;
            } else {
            }
        }

        return $point1 > $point2 ? 1 : 2;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MatchDetail  $matchDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(MatchDetail $matchDetail)
    {
        // Not implement
    }
}
