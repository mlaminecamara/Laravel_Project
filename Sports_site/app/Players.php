<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class players extends Model
{
    protected $fillable = [
        'name', 'team_id', 'points_per_game', 'blocks_per_game', 'assists_per_game'
    ];
}
