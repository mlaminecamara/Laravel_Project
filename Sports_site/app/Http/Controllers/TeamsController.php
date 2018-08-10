<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teams;
use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{
    
    public function index()
    {
        return view('Pages/add_teams');
    }

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
        $teams->flag = $request->file('flag')->storeAs('logos', $request->teams()->country);
        $teams->points_per_game = request('points_per_game');
        $teams->ball_possession = request('ball_possession');
        $teams->team_ranking = request('team_ranking');
        $teams->save();
        return "Team added successfully"; 
    }

    function display()
    {
        $teams = Teams::all();
        return view('Pages/teams')->with('teams', $teams);
    }
    
    function getId($id)
    {
        $teams = Teams::find($id);
        return view('Pages/edit_teams',compact('teams','id')); 
    }

    function update(Request $request, $id)
     {  
        $teams = Teams::find($id);
        $teams->name = $request->get('name');
        $teams->country = $request->get('country');
        $teams->flag = $request->get('flag');
        $teams->points_per_game = $request->get('points_per_game');
        $teams->ball_possession = $request->get('ball_possession');
        $teams->team_ranking = $request->get('team_ranking');
        $teams->save();
        return "Team edited successfully";
    }

    function removeId($id)
    {
        $teams = Teams::find($id);
        return view('Pages/delete_teams',compact('teams','id')); 
    }

    function destroy(Request $request)
    {   
        $teams = Teams::find($request->input('id'))->delete();
              
        return "Team deleted successfully";
    }






   

}