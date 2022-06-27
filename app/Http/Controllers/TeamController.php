<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{

    public function index()
    {
        $teams = Team::with(['creator', 'members'])->get();
        return view('user.teams.teams', [
            'teams' => $teams
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->is('admin')){
            return view('user.teams.create');
        }else {abort(401);}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $requist->validate([
            'name'=> 'required'
        ]);
        $team->create($request->all());
        return redirect()->route('teams.index')->with('team succesful created');
    }
    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
    }

    public function edit(Team $team)
    {
        if(Auth::user()->is('admin') || $team->creator->first()->id == Auth::user()->id) {
            return view('user.teams.edit', [
                'team' => $team
            ]);
        } else {abort(401);}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name'=> 'required'
        ]);
        $team->update($request->all());
        return redirect()->route('teams.index')->with('team succesful updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index')->with('team succesful deleted');
    }
}
