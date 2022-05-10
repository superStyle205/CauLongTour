<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use Illuminate\Http\Request;

class AthleteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $athletes = Athlete::latest()->paginate(10);

        return view('athletes.index', compact('athletes'))
                ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('athletes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'old' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'unit' => 'required',
        ]);

        Athlete::create($request->all());
        return redirect()->route('athletes.index')
                ->with('success','Athlete created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Athlete  $athlete
     * @return \Illuminate\Http\Response
     */
    //public function show(Athlete $athlete)
    public function show($id)
    {
        $athlete = Athlete::find($id);
        return view('athletes.show',compact('athlete'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Athlete  $athlete
     * @return \Illuminate\Http\Response
     */
    //public function edit(Athlete $athlete)
    public function edit($id)
    {
        $athlete = Athlete::find($id);
        return view('athletes.edit',compact('athlete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Athlete  $athlete
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, Athlete $athlete)
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'old' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'unit' => 'required',
        ]);

        Athlete::find($id)->update($request->all());
        return redirect()->route('athletes.index')
                ->with('success','Athlete updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Athlete  $athlete
     * @return \Illuminate\Http\Response
     */
    //public function destroy(Athlete $athlete)
    public function destroy($id)
    {
        Athlete::find($id)->delete();
        return redirect()->route('athletes.index')
                ->with('success','Athlete deleted successfully');
    }
}
