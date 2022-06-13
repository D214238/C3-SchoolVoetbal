<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function gamesToday()
    {
        return $this->hasMany(Game::class);
    }
}
