<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Awobaz\Compoships\Compoships;

class Team extends Model
{
    use HasFactory;

    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class, ['team1_id', 'team2_id']);
    }

    public function members()
    {
        return $this->hasMany(User::class);
    }

}
