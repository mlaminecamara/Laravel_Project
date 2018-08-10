@extends('layouts.app')

@section('content')
<body background=https://images6.alphacoders.com/323/323997.jpg>    
    <table class="bg-light table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <p class="text-light text-center">LIST OF TEAMS</p>
    <thead>
        <tr class="text-primary">
        <th scope="col">Name
        </th>
        <th scope="col">Logo
        </th>
        <th scope="col">Country
        </th>
        <th scope="col">Points Per Game
        </th>
        <th scope="col">Ball Possession
        </th>
        <th scope="col">Ranking
        </th>
        @if(Auth::user() &&  Auth::user()->is_admin == 1)
        <th scope="col">Edit team</th>
        <th scope="col">Delete team</th>
        @endif  
        </tr>
    </thead>
    @foreach($teams as $fetch)
    <tbody>
        <tr>
        <th scope="row">{{ $fetch-> name }}</th>
        <td><img src="{{ $fetch-> flag }}"></img></td>
        <td>{{ $fetch-> country }}</td>
        <td>{{ $fetch-> points_per_game }}</td>
        <td>{{ $fetch-> ball_possession }}</td>
        <td>{{ $fetch-> team_ranking }}</td>
        @if(Auth::user() &&  Auth::user()->is_admin == 1)
        <td>
        <a href="{{action('TeamsController@getId', $fetch->id)}}"> <button>Edit</button> </a>
        </td>
        <td>
        <a href="{{action('TeamsController@removeId', $fetch->id)}}"> <button>Delete</button></a>
        </td>
        @endif
        </tr>
    </tbody>
    @endforeach
</table>

</body>

@endsection