<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
//use App\Models\;
use Illuminate\Http\Request;

use App\Models\Form;
use App\Models\Athlete;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $tournaments = Tournament::latest()->paginate(10);
        // $haha = null;
        // echo $tournaments;
        return view('tournaments.index', compact('tournaments'))
                    ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tournaments.create');
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
        $this->validate($request, [
            'name' => 'required',
        ]);
        Tournament::create($request->all());
        return redirect()->route('tournaments.index')
                ->with('success','Tournament created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo $id;
        //
        // return view('tournaments.show',['tournament' => Tournament::find($id)]);
    }

    public function getTournamentDetails($id)
    {
        //get all form id -> list
        $listOfForm = Form::all();
        // get all athlete id - >  list
        $listOfAthlete = Athlete::all();
        // echo $id;
        $tournament = Tournament::find($id);

        return view('tournaments.tournamentdetails',compact('listOfForm','listOfAthlete','tournament'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('tournaments.edit',['tournament' => Tournament::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required',
        ]);

        Tournament::find($id)->update($request->all());
        return redirect()->route('tournaments.index')
                ->with('success','tournament updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // xoa tour
        Tournament::find($id)->delete();

        // xoa danh sach van dong vien trong tour


        // xoa danh sach the loai trong tour


        // xoa danh sach tran dau lien quan tour




        return redirect()->route('tournaments.index')
                ->with('success','tournament deleted successfully');
    }
}
