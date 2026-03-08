<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;
use App\Models\Team;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coaches = Coach::all();
        return view('coaches.index', compact('coaches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('coaches.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coach = new Coach;
        $coach->name = request('name');
        $coach->from = request('from');
        $coach->team_id = request('team_id');
        Team::findOrFail($coach->team_id);
        
        $coach->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        return view('coaches.show', compact('coach'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Coach $coach)
    {   
        $teams = Team::get();
        return view('coaches.edit', ['coach' => $coach, 'teams' => $teams]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coach $coach)
    {
        $coach->name = request('name');
        $coach->from = request('from');
        $coach->team_id = request('team_id');
        Team::findOrFail($coach->team_id);
        $coach->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coach $coach)
    {
        $coach->delete();
        return redirect('/coaches');
    }

    public function destroyAll(){
        $coaches = Coach::all();
        foreach($coaches as $coach){
            $coach->delete();
        }
        return redirect('/coaches');
    }
}
