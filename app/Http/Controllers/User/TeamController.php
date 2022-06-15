<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('creator', 'members')->get();
        return view('user/teams', [
            'teams' => $teams
        ]);
    }

    public function create()
    {
        return view("teams.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'creator_id'=> 'required',
        ]);
        Team::create($request->all());

        return redirect()->route('teams.index')->with('succes','Team succesvol aangemaakt!');
                        
    }

    public function show(Team $team)
    {
        return view('teams.show',compact('teams'));
    }

    public function edit(Team $team)
    {
        return view('teams.edit',compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        return redirect()->route('teams.index')->with('Succes','Team succesvol aangepast!');
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('teams.index')->with('Succes','Team succesvol gewist!');
    }
}
