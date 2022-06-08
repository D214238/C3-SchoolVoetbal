<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    public function allGames()
    {
        return $this->hasMany(Game::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class)->whereDate('start_date', Carbon::today());
    }
}
