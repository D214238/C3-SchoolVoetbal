<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Team;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminDashController extends Controller
{
    private function calcBestTeams(){
        $games = Game::all();
        $teams = Team::all();

        $unsortScores = collect([]);

        foreach ($teams as $curTeam) {
            $unsortScores->push(collect([
                'id' => $curTeam->id,
                'name' => $curTeam->name,
                'goals' => 0
            ]));

            foreach ($games as $curGame) {
                if ($curGame->team1_id == $curTeam->id) {
                    foreach ($unsortScores as $teamWS) {
                        if ($teamWS['id'] == $curTeam->id) {
                            $teamWS['goals'] = $teamWS['goals'] + $curGame->team1_score;
                        }
                    }
                } elseif ($curGame->team2_id == $curTeam->id) {
                    foreach ($unsortScores as $teamWS) {
                        if ($teamWS['id'] == $curTeam->id) {
                            $teamWS['goals'] = $teamWS['goals'] + $curGame->team2_score;
                        }
                    }
                }
            }
        }

        $sortScores = $unsortScores->sortByDesc(function($thing, $key){
            return $thing['goals'];
        })->values();

        return $sortScores;
    }

    public function index(){
        $user = User::where('id', Auth::user()->id)->first();
        $topTeams = $this->calcBestTeams();
        $tournament = Tournament::with('games')->where('start_date', Carbon::today())->first();
        $users = User::with('team')->latest()->take(10)->orderByDesc('id')->get();

        return view('admin.dashboard', [
            'user' => $user,
            'topTeams' => $topTeams,
            'tournament' => $tournament,
            'latestUsers' => $users
        ]);
    }
}
