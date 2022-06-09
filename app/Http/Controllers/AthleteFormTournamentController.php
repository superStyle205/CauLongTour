<?php

namespace App\Http\Controllers;

use App\Models\AthleteFormTournament;
use Illuminate\Http\Request;

class AthleteFormTournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo "index";
        // $athleteFormTournaments = AthleteFormTournament::all();
        // // $typeofItem = json_encode((array)$athleteFormTournaments);
        // $id=1;
        // $filteredItems = $athleteFormTournaments->filter(function($item) use ($id){
        //     return $item -> tournament_id == $id;
        // });

        // $athleteFormTournaments = $filteredItems;

        // return view('tournaments.tournamentdetails', compact('athleteFormTournaments'));
    }

    public function getTournamentDetails($id)
    {
        //get all form id -> list
        // $listOfForm = Form::all();
        // // get all athlete id - >  list
        // $listOfAthlete = Athlete::all();
        // // echo $id;
        // $tournament = Tournament::find($id);
        $athleteFormTournaments = AthleteFormTournament::all();
        // $typeofItem = json_encode((array)$athleteFormTournaments);
        // $id=1;
        $athleteFormTournaments = $athleteFormTournaments->filter(function($item) use ($id){
            return $item -> tournament_id == $id;
        });

        // $athleteFormTournaments = $filteredItems;

        return view('tournaments.tournamentdetails',compact('athleteFormTournaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AthleteFormTournament  $athleteFormTournament
     * @return \Illuminate\Http\Response
     */
    public function show(AthleteFormTournament $athleteFormTournament)
    {
        //
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AthleteFormTournament  $athleteFormTournament
     * @return \Illuminate\Http\Response
     */
    public function edit(AthleteFormTournament $athleteFormTournament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AthleteFormTournament  $athleteFormTournament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AthleteFormTournament $athleteFormTournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AthleteFormTournament  $athleteFormTournament
     * @return \Illuminate\Http\Response
     */
    public function destroy(AthleteFormTournament $athleteFormTournament)
    {
        //
    }
}
