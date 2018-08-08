<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teams;
class teamsController extends Controller
{
    /*public function add()
    {
        return view ('tbd');
    }*/

    function add(Request $request)
    {
        $validationData = $request->validate([
        'name'=> 'required|max:25',
        'country'=> 'required',
        'flag'=> 'required',
        'points_per_game'=> 'required',
        'ball_possession'=> 'required',
        'team_ranking'=> 'required'     
        ]);
        
        $teams = new Teams;
        $teams->name = request('name');
        $teams->country = request('country');
        $teams->flag = request('flag');
        $teams->points_per_game = request('points_per_game');
        $teams->ball_possession = request('ball_possession');
        $teams->team_ranking = request('team_ranking');
        $teams->save();
        return view('addAnimals'); 
    }
    
}