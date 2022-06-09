<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Team;

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

        for($i = 1; $i < $latestTeamId -1; $i++){
            for($ii = $i+1; $ii < $latestTeamId; $ii++) {
                Game::factory()->create([
                    'team1_id' => $i,
                    'team2_id' => $ii
                ]);
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
