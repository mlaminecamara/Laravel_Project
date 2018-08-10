@extends('layouts.app')

@section('content')
<body background=https://images6.alphacoders.com/323/323997.jpg>    
    <table class="bg-light table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <p class="text-light text-center">LIST OF GAMES</p>
    <thead>
        <tr class="text-primary">
        <th scope="col">Team 1</th>
        <th scope="col">Team 2</th>
        <th scope="col">Score</th>
        <th scope="col">Winner</th>
        <th scope="col">Game location</th>
        <th scope="col">Game time</th>
        <th scope="col"># of fouls</th>
        </tr>
    </thead>
    @foreach($games as $fetch)
    <tbody>
        <tr>
        <th>{{ $fetch-> team1 }}</th>
        <td>{{ $fetch-> team2 }}</td>
        <td>{{ $fetch-> score }}</td>
        <td>{{ $fetch-> winner }}</td>
        <td>{{ $fetch-> game_location }}</td>
        <td>{{ $fetch-> game_time }}</td>
        <td>{{ $fetch-> number_of_fouls }}</td>
        </tr>
    </tbody>
    @endforeach
    </table>

</body>
@endsection