<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user -> name = "admin";
        $user -> email = "admin@gmail.com";
        $user -> password = "admin";
        $user -> admin = "1";
        $user -> save();

    }
}
