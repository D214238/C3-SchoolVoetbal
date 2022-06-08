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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team1_id')->references('id')->on('teams');
            $table->foreignId('team2_id')->references('id')->on('teams');
            $table->int('team1_score')->nullable();
            $table->int('team2_score')->nullable();
            $table->foreignId('field_id')->references('id')->on('fields');
            $table->integer('tournament_id');
            $table->boolean('finished')->default(false);
            $table->boolean('is_playing')->default(false);
            $table->date('start_date')->nullable();
            $table->time('start_time')->nullable();
            //$table->foreignId('referee_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
