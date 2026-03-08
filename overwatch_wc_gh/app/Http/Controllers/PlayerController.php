<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $teams = Team::all();
        return view('players.create' , compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $player = new Player;
        $player->name = request('name');
        $player->role = request('role');
        $player->status = request('status');
        $player->age = (int)request('age');
        $player->team_id = request('team_id');
        Team::findOrFail($player->team_id);
        $player->save();
        return redirect('/players');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $teams = Team::all();
        return view('players.edit', ['player' => $player, 'teams' => $teams]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $player->name = request('name');
        $player->role = request('role');
        $player->status = request('status');
        $player->age = (int)request('age');
        $player->team_id = request('team_id');
        $player->save();
        return redirect('/players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect('/players');
    }

    public function showAgeLessThan(){
        $players = Player::where('age','<', 18)->limit(20)->get();
        return view('players.getByAge', compact('players'));
    }
}
