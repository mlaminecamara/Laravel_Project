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
        </tr>
    </thead>
    @foreach($players as $fetch)
    <tbody>
        <tr>
        <th scope="row">{{ $fetch-> nom }}</th>
        <td>{{ $fetch-> name }}</td>
        <td>{{ $fetch-> points }}</td>
        <td>{{ $fetch-> blocks_per_game }}</td>
        <td>{{ $fetch-> assists_per_game }}</td>
        </tr>
    </tbody>
    @endforeach
    </table>

</body>
@endsection