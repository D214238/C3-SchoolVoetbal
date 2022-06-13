<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    public function games(){
        return $this->hasmany(Game::class);
    }

    //kan gebruikt worden als volgt: Tournamant::all()->games->today()
    //mischien niet nodig aangezien Tournament::with('games')where('start_date', 'Carbon::today()')->games()->get() hetzelfde doet.
    public function scopeToday($query)
    {
        return $query->whereRelation('tournament', 'start_date', Carbon::today());
    }
}
