<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Player;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team;
        $team->name = request('name');
        $team->games_won = (int)request('games_won');
        $team->games_lost = (int)request('games_lost');
        $team->titles_won = (int)request('titles_won');
        $team->sector = request('sector');
        $team->eliminated = request('eliminated');
        $team->save();

        if($request->matches){
            $team->matches()->sync($request->matches);
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $team->games_won = request('games_won');
        $team->games_lost = request('games_lost');
        $team->titles_won = request('titles_won');
        $team->eliminated = request('eliminated');
        $team->save();
        return redirect('/teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect('/');
    }

    public function destroyAll(){
        $teams = Team::all();
        foreach($teams as $team){
            $team->delete();
        }
        return redirect('/');
    }

    public function resetWl(){
        $teams = Team::all();
        foreach($teams as $team){
            $team->games_won = 0;
            $team->games_lost = 0;
            $team->eliminated = 0;
            $team->save();
        }
        return redirect('/');
    }
}
