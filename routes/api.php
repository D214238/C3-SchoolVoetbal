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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('matches', function() {
    $games = Game::all();
    $results = [];
    foreach ($games as $game) {
        $result = [];
        $result["id"] = $game['id'];
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
