<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Game;
use App\Models\user;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class UserDashController extends Controller
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
        $topTeams = $this->calcBestTeams();
        $tournament = Tournament::with('games')->where('start_date', Carbon::today())->first();
        $members = User::where('id', Auth::id())->first()->team()->first();
        $members = ($members != null) ? $members->members()->get() : null;

        return view('user.dashboard', [
            'topTeams' => $topTeams,
            'tourToday' => $tournament,
            'myTeam' => $members
        ]);
    }
}
