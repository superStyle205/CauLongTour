<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\MatchDetail;
use App\Models\Althlete;
use App\Models\Tournament;
use Illuminate\Http\Request;

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

        $tournamentID = Match::find($match_id)->tournament_id;

        $athletesInTour = Tournament::where('id', $tournamentID)
                                    ->with('athletes')
                                    ->get()
                                    ->first()
                                    ->athletes;
        $athletes = [];
        foreach ($athletesInTour as $athlete) {
            $athletes[$athlete->id] = $athlete->name.' ['.$athlete->unit.']';
        }
        //echo '<pre>';
        //print_r($matchDetails->toArray());

        return view('matchDetails.edit', compact('matchDetails', 'athletes'));
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
        $resultSet = [];
        $athleteSet = [];
        for ($i = 1 ; $i <= 2; $i++) {
            // get new result set 1 2 3 of 2 team
            for ($j = 1 ; $j <= 3; $j++) {
                $resultSet['team'.$i.'set'.$j] = $request->input('team'.$i.'set'.$j);
            }

            // get id athletes of 2 team
            for ($k = 1; $k <= 4; $k++) {
                if (($request->input('team'.$i.'athlete'.$k)) !== null) {
                    $athleteSet['team'.$i.'athlete'.$k] = $request->input('team'.$i.'athlete'.$k);
                }
            }
        }

        $matchDetails = MatchDetail::where('match_id', $match_id)
                                        ->get();
        echo '<pre>';
        print_r($resultSet);
        print_r($athleteSet);

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
