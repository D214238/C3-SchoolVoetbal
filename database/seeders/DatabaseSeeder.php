<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Field;
use App\Models\Team;
use App\Models\Game;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // how big do you want your dataset. the number you type will multiply the data with that number
        $datasetSize = 3;
        $tournamentsSize = 4;

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //deletes all records in the database for the coresponding tables
        Field::truncate();
        Game::truncate();
        Team::truncate();
        User::truncate();
        Tournament::truncate();
        Role::truncate();

        $this->call([
            FieldSeeder::class,
            RoleSeeder::class
        ]);

        //create admin account
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'team_id' => null,
            'role_id' => 3
        ]);

        //create regular user
        User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'team_id' => null
        ]);

        //tournament is automatically created when games are created
        for($i=0; $i<$datasetSize; $i++) {
            $this->call([
                TeamSeeder::class,
                UserSeeder::class,
            ]);
        }

        for($i=0; $i<$datasetSize*$tournamentsSize; $i++) {
            $this->call([
                GameSeeder::class
            ]);
        }



        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
