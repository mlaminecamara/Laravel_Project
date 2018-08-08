<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    protected $fillable = [
        'name', 'country', 'flag', 'points_per_game','ball possession', 'team_ranking'
    ];
}
