@extends('layouts.app')

@section('content')
<body background=https://images6.alphacoders.com/323/323997.jpg>    
    <table class="bg-light table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <p class="text-light text-center">LIST OF PLAYERS</p>
    <thead>
        <tr class="text-primary">
        <th scope="col">Name</th>
        <th scope="col">Team</th>
        <th scope="col">Points Per Game</th>
        <th scope="col">Blocks Per Game</th>
        <th scope="col">Assists Per Game</th>
        @if(Auth::user() &&  Auth::user()->is_admin == 1)
        <th scope="col">Edit player</th>
        <th scope="col">Delete player</th>
        @endif  
        </tr>
    </thead>
    @foreach($players as $player)
    <tbody>
        <tr>
        <th scope="row">{{$player-> nom }}</th>
        <td>{{ $player-> name }}</td>
        <td>{{ $player-> points }}</td>
        <td>{{ $player-> blocks_per_game }}</td>
        <td>{{ $player-> assists_per_game }}</td>
        @if(Auth::user() &&  Auth::user()->is_admin == 1)
        <td>
        <a href="{{action('PlayersController@getId', $player->id)}}"> <button>Edit</button> </a>
        </td>
        <td>
        <a href="{{action('PlayersController@removeId', $player->id)}}"> <button>Delete</button></a>
        </td>
        @endif
        </tr>
    </tbody>
    @endforeach
    </table>

</body>
@endsection