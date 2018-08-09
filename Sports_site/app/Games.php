<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $fillable = [
        'team1', 'team2', 'score', 'winner', 'game_location', 'game_time', 'number_of_fouls'
    ];
}
