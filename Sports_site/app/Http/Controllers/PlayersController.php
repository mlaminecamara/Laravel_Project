<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Players;

class PlayersController extends Controller
{
    public function index()
    {
        return view('Pages/add_players');
    }

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

    function display()
    {
        $players = Players::all();
        return view('Pages/players')->with('players', $players);
    }
    
    function getId($id)
    {
        $players = Players::find($id);
        return view('Pages/edit_players',compact('players','id')); 
    }

    function update(Request $request, $id)
     {  
        $players = Players::find($id);
        $players->name = $request->get('name');
        $players->team_id = $request->get('team_id');
        $players->points_per_game = $request->get('points_per_game');
        $players->blocks_per_game = $request->get('blocks_per_game');
        $players->assists_per_game = $request->get('assists_per_game');
        $players->save();
        return "Player edited successfully";
    }

    function removeId($id)
    {
        $players = Players::find($id);
        return view('Pages/delete_players',compact('players','id')); 
    }

    function destroy(Request $request)
    {   
        $players = Players::find($request->input('id'))->delete();
              
        return "Player deleted successfully";
    }

}
