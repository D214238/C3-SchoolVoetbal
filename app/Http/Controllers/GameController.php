<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('user.games.games', [
        'games' => $games
        ]);
    }

    public function create()
    {
        abort(403);
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

    public function show(Game $game)
    {
        return view('user.games.game', [
            'game' => $game
        ]);
    }

    public function edit(Game $game)
    {
        if(Auth::user()->are(['admin', 'referee'])) {
            return view('user.games.edit', [
                'game' => $game
            ]);
        } else {abort(401);}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
