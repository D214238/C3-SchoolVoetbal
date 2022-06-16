<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TournamentController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::with('games')->get()->sortByDesc('start_date');
        $today = Carbon::today()->toDateString();

        function collectCurrentTournament($tournaments, $today){
            $currTour = collect([
                'id' => '...',
                'team1' => '...',
                'team2' => '...',
                'scoreTeam1' => '...',
                'scoreTeam2' => '...',
                'prevTeam1' => '...',
                'prevTeam2' => '...',
                'prevScoreTeam1' => '...',
                'prevScoreTeam2' => '...',
                'date' => '...'
            ]);


            if($tournaments->where('start_date', $today)->first() !== null) {
                $currTour['id'] = $tournaments->where('start_date', $today)->first()->id;
                $currTour['date'] = $tournaments->where('start_date', $today)->first()->start_date;
                if ($tournaments->where('start_date', $today)->first()->games()->where('is_playing', 1)->first() !== null){
                    $games = $tournaments->where('start_date', $today)->first()->games()->get();
                    $game = $tournaments->where('start_date', $today)->first()->games()->where('is_playing', 1)->first();
                    $currTour['team1'] = $game->team1()->first()->name;
                    $currTour['team2'] = $game->team2()->first()->name;
                    $currTour['scoreTeam1'] = $game->team1_score;
                    $currTour['scoreTeam2'] = $game->team2_score;
                    if ($games->where('id', $game->id -1)->first() !== null){
                        $prevGame = $games->where('id', $game->id -1)->first();
                        $currTour['prevTeam1'] = $prevGame->team1()->first()->name;
                        $currTour['prevTeam2'] = $prevGame->team2()->first()->name;
                        $currTour['prevScoreTeam1'] = $prevGame->team1_score;
                        $currTour['prevScoreTeam2'] = $prevGame->team2_score;

                    }
                }
            }

            return $currTour;
        }

        $routeName = Auth::user()->is('admin') ? 'admin.tournaments.show' : 'tournaments.show' ;
        $currTour = collectCurrentTournament($tournaments, $today);
        return view('user.tournaments.tournaments', [
            'tournaments' => $tournaments->skip(1),
            'currTour' => $currTour,
            'routeName' => $routeName,
            'today' => $today
        ]);
    }

    public function create()
    {
        if(Auth::user()->is('admin')){
            return view('user.tournaments.create');
        } else {abort(401);}
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
    }

    public function show(Tournament $tournament)
    {
        return view('user.tournaments.tournament', [
            'tournament' => $tournament->load('games')
        ]);
    }

    public function edit(Tournament $tournament)
    {
        if(Auth::user()->is('admin')){
            return view('user.tournaments.edit', [
                'tournament' => $tournament
            ]);
        } else {abort(401);}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tournament $tournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tournament $tournament)
    {
        //
    }
}
