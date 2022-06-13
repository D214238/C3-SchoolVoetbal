<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Awobaz\Compoships\Compoships;

class Game extends Model
{
    use HasFactory;

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function team1()
    {
        return $this->belongsTo(Team::class);
    }

    public function team2()
    {
        return $this->belongsTo(Team::class);
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

}
