@extends('layouts.app')

@section('content')
<body background=https://images6.alphacoders.com/323/323997.jpg>    
    <table class="table bg-light">List of teams
    <thead>
        <tr class="text-primary">
        <th scope="col">Name</th>
        <th scope="col">Country</th>
        <th scope="col">Points Per Game</th>
        <th scope="col">Ball Possession</th>
        <th scope="col">Ranking</th>
        </tr>
    </thead>
    @foreach($teams as $fetch)
    <tbody>
        <tr>
        <th scope="row">{{ $fetch-> name }}</th>
        <td>{{ $fetch-> country }}</td>
        <td>{{ $fetch-> points_per_game }}</td>
        <td>{{ $fetch-> ball_possession }}</td>
        <td>{{ $fetch-> team_ranking }}</td>
        </tr>
    </tbody>
    @endforeach
    </table>

</body>
@endsection