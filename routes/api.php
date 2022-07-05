<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Use App\Models\Game;
Use App\Models\Team;
use Symfony\Component\Console\Input\Input;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('matches', function() {
    $games = Game::all();
    $results = [];
    foreach ($games as $game) {
        $result = [];
        $result["id"] = $game['id'];
        $result["finished"] = $game['finished'];
        $result["team1_id"] = $game['team1_id'];
        $result["team1_name"] = Team::where('id',$result["team1_id"])->get("name")[0]['name'];
        $result["team2_id"] = $game['team2_id'];
        $result["team2_name"] = Team::where('id',$result["team2_id"])->get("name")[0]['name'];
        $results[] = $result;
    }
    return $results;
});

Route::get('results', function() {
    $games = Game::all();
    $results = [];
    foreach ($games as $game) {
        $result = [];
        $result["id"] = $game['id'];
        $result["team1_id"] = $game['team1_id'];
        $result["team1_name"] = Team::where('id',$result["team1_id"])->get("name")[0]['name'];
        $result["team1_score"] = $game['team1_score'];
        $result["team2_id"] = $game['team2_id'];
        $result["team2_name"] = Team::where('id',$result["team2_id"])->get("name")[0]['name'];
        $result["team2_score"] = $game['team2_score'];
        if ($result["team1_score"] > $result["team2_score"]) $result["winner_id"] = $game['team1_id'];
        else $result["winner_id"] = $result["team2_id"];
        $results[] = $result;
    }
    return $results;
});

Route::get('match', function (Request $request) {
    $game = Game::where('id', $request->get("match_id"))->get();
    $result = [];
    $result["id"] = $game[0]['id'];

    $result["finished"] = $game[0]['finished'];
    $result["is_playing"] = $game[0]['is_playing'];
    $result["team1_id"] = $game[0]['team1_id'];
    $result["team1_name"] = Team::where('id',$result["team1_id"])->get("name")[0]['name'];
    $result["team2_id"] = $game[0]['team2_id'];
    $result["team2_name"] = Team::where('id',$result["team2_id"])->get("name")[0]['name'];
    $result["team1_score"] = $game[0]['team1_score'];
    $result["team2_score"] = $game[0]['team2_score'];
    if ($result["team1_score"] > $result["team2_score"]) $result["winner_id"] = $game[0]['team1_id'];
    else $result["winner_id"] = $result["team2_id"];
    $result["start_time"] = $game[0]['start_time'];
    $result["created_at"] = $game[0]['created_at'];
    $result["updated_at"] = $game[0]['updated_at'];
    $result["tournament_id"] = $game[0]['tournament_id'];
    $result["field_id"] = $game[0]['field_id'];
    return $result;
});
