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
        $request->validate([
            'name'=> 'required'
        ]);
        $team = new Team();
        $team->create($request->all());
        return redirect()->route('teams.index')->with('team succesful created');
    }
    public function show(Team $team)
    {

            return view('user.teams.team', [
                'team' => $team
            ]);

    }

    public function edit(Request $request, Team $team)
    {
//        if(Auth::user()->is('admin') || $team->creator->first()->id == Auth::user()->id) {
            return view('user.teams.edit', [
                'team' => $team
            ]);
//        } else {abort(401);}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Team $team)
    {
        //Validate
        $request->validate([
            'name' => 'required|min:3',
        ]);

        $team->name = $request->name;
        $team->save();
        $request->session()->flash('message', 'Successfully modified the team!');
        return redirect()->route('admin.teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, Team $team)
    {
        $team->delete();
        $request->session()->flash('message', 'Successfully deleted the team!');
        return redirect('teams.index');
    }
}
