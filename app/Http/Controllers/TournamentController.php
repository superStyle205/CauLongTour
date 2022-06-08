<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
//use App\Models\;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tournaments = Tournament::all();
        // echo $tournaments;
        return view('tournaments.index', compact('tournaments'));
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
        //
        // return view('tournaments.show',['tournament' => Tournament::find($id)]);
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
