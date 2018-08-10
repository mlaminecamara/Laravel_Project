<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Games;
use App\Teams;

class GamesController extends Controller
{
    public function index()
    {   
        $teams = DB::table('teams')->get();
        $select = [];
        foreach($teams as $team)
        {
            $select[$team->name] = $team->name;
        }
        return view('Pages/add_games', compact('select'));
    }

    function add(Request $request)
    {
        $validationData = $request->validate([
        'team1'=> 'required',
        'team2'=> 'required',
        'score'=> 'required',
        'winner'=> 'required',
        'game_location'=> 'required',
        'game_time'=> 'required',
        'number_of_fouls'=> 'required',
        ]);
        $games = new Games;
        $games->team1 = request('team1');
        $games->team2= request( 'team2');
        $games->score = request('score');
        $games->winner = request('winner');
        $games->game_location = request('game_location');
        $games->game_time = request('game_time');
        $games->number_of_fouls = request('number_of_fouls');
        $games->save();
        return "Game successfully added"; 
    }

    function display()
    {
        $games = Games::all();
        //dd($games);
        return view('Pages/games')->with('games', $games);
    }
    
    function getId($id)
    {
        $games = Games::find($id);
        return view('Pages/edit_games',compact('games','id')); 
    }

    function update(Request $request, $id)
     {  
        $games = Games::find($id);
        $games->team1 = $request->get('team1');
        $games->team2= $request->get('team2');
        $games->score = $request->get('score');
        $games->winner = $request->get('winner');
        $games->game_location = $request->get('game_location');
        $games->game_time = $request->get('game_time');
        $games->number_of_fouls = $request->get('number_of_fouls');
        $games->save();
        return "Game edited successfully";
    }

    function removeId($id)
    {
        $games = Games::find($id);
        return view('Pages/delete_games',compact('games','id')); 
    }

    function destroy(Request $request)
    {   
        $games = Games::find($request->input('id'))->delete();
              
        return "Game deleted successfully";
    }
}
