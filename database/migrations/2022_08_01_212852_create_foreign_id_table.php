<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('team_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('role_id')->default(1)->constrained();
        });

        Schema::table('teams', function (Blueprint $table) {
            $table->foreignId('creator_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
        });

        Schema::table('games', function (Blueprint $table) {
            $table->foreignId('team1_id')->constrained('teams')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('team2_id')->constrained('teams')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('tournament_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('field_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            //$table->foreignId('referee_id')->references('id')->on('users');
        });
    }

};
