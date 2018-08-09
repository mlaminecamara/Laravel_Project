<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Players extends Controller
{
    function add(Request $request)
    {
        $validationData = $request->validate([
        'name'=> 'required',
        'team_id'=> 'required',
        'points_per_game'=> 'required',
        'blocks_per_game'=> 'required',
        'assists_per_game'=> 'required',
        ]);
        
        $players = new Players;
        $players->name = request('name');
        $players->team_id= request('team_id');
        $players->points_per_game = request('points_per_game');
        $players->blocks_per_game = request('blocks_per_game');
        $players->assists_per_game = request('assists_per_game');
        $players->save();
        return "Player added successfully"; 
    }

    // function display()
    // {
    //     $players = Players::all();
    //     return view('Pages/teams')->with('players', $players);
    // }
    
    // function getId($id)
    // {
    //     $teams = Teams::find($id);
    //     return view('Pages/edit_teams',compact('teams','id')); 
    // }

    // function update(Request $request, $id)
    //  {  
    //     $teams = Teams::find($id);
    //     $teams->name = $request->get('name');
    //     $teams->country = $request->get('country');
    //     $teams->flag = $request->get('flag');
    //     $teams->points_per_game = $request->get('points_per_game');
    //     $teams->ball_possession = $request->get('ball_possession');
    //     $teams->team_ranking = $request->get('team_ranking');
    //     $teams->save();
    //     return "Team edited successfully";
    // }

    // function removeId($id)
    // {
    //     $teams = Teams::find($id);
    //     return view('Pages/delete_teams',compact('teams','id')); 
    // }

    // function delete(Request $request, $id)
    // {    
    //     $teams = Teams::find($id);
    //     if(isset($id))
    //         $teams->delete();
    //     else
    //         return view('page_not_found');
            
    //     return "Team deleted successfully";
    // }
}
