<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function index()
    {
        $teams = team::all();
        return view ('user.teams.team')->with('teams', $teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $input = $request->all();
        Team::create($input);
        return redirect('team')->with('message', 'team Added!');
    }
    public function show($id)
    {
        $team = Team::find($id);
        return view('teams.show')->with('teams', $team);
    }

    public function edit($id)
    {
        $team = Team::find($id);
        return view('teams.edit')->with('teams', $team);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        $input = $request->all();
        $team->update($input);
        return redirect('team')->with('message', 'team Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        Team::destroy($id);
        return redirect('team')->with('message', 'Team deleted!');
    }
}
