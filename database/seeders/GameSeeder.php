<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Team;
use App\Models\Tournament;
use Illuminate\Support\Carbon;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        $latestTeamId = (Team::max('id') + 1);
        $latestTournamentId = (Tournament::max('id') == null) ? 1 : (Tournament::max('id') +1);
        $time = Carbon::createFromTime(6,0,0);
        $firstTournamentDate = Tournament::where('id', 1)->value('start_date');
        $date = ($firstTournamentDate == null) ? Carbon::today() : Carbon::today()->subDays(rand(0, 365));
        $genCounter = 0;
        $gamesGenerated = 0;

        Tournament::factory()->create([
            'start_date' => $date
        ]);

        for($i = 1; $i < $latestTeamId -1; $i++){
            for($ii = $i+1; $ii < $latestTeamId; $ii++) {
                $gamesGenerated = $gamesGenerated +1;
            }
        }


        for($i = 1; $i < $latestTeamId -1; $i++){
            for($ii = $i+1; $ii < $latestTeamId; $ii++) {
                $finished = ($genCounter < $gamesGenerated / 2 && $latestTournamentId == 1 || $latestTournamentId != 1) ? true : false;
                $isPlaying = ($genCounter == $gamesGenerated / 2 && $latestTournamentId == 1) ? true : false;
                Game::factory()->create([
                    'team1_id' => $i,
                    'team2_id' => $ii,
                    'tournament_id' => $latestTournamentId,
                    'start_time' => $time,
                    'finished' => $finished,
                    'is_playing' => $isPlaying
                ]);
                $time = $time->addMinutes(15);
                $genCounter = $genCounter+1;
            }
        }
    }

    // public function run()
    // {
    //     Game::factory()->create([
    //         'team1_id' => $team1->id,
    //         'team2_id' => $team2->id
    //     ]);
    // }


    // for($x = 1; $x < $latestTeamId; $x++){
    //     Game::factory()->create([
    //         'team1_id' => ($latestTeamId),
    //         'team2_id' => $x
    //     ]);
    // }
}
