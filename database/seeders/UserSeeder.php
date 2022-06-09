<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Team;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maxId = Team::max('id');
        for($i=1; $i<=10; $i++){
            for($ii=$maxId-2; $ii<=$maxId; $ii++){
                User::factory()->create([
                    'team_id' => $ii
                ]);
            }
        }
    }

    // public function run()
    // {
    //     User::factory(30)->create([
    //         'team_id' => function (array $attributes){
    //             return Team::find($attributes['id'])->id;
    //         }
    //     ]);
    // }
}
