<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\User;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Team::factory(3)->create();

        $teamAdmin1 = User::factory()->create();
        $teamAdmin2 = User::factory()->create();
        $teamAdmin3 = User::factory()->create();

        $team1 = Team::factory()->create([
            'creator_id' => $teamAdmin1->id
        ]);
        $teamAdmin1->team_id = $team1->id;
        $teamAdmin1->save();

        $team2 = Team::factory()->create([
            'creator_id' => $teamAdmin2->id
        ]);
        $teamAdmin2->team_id = $team2->id;
        $teamAdmin2->save();

        $team3 = Team::factory()->create([
            'creator_id' => $teamAdmin3->id
        ]);
        $teamAdmin3->team_id = $team3->id;
        $teamAdmin3->save();
    }
}
