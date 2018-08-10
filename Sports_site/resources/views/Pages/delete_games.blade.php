<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sports site</title>
</head>
<body>
    
Supprimer un match

{!! Form::open(['action' => ['GamesController@destroy']]) !!}
{{ csrf_field() }}
{!! Form::hidden('id', $games->id) !!}

{!! Form::label('team1','team1') !!}
{!! Form::text('team1', $games->team1) !!}

{!! Form::label('team2','team2') !!}
{!! Form::text('team2',$games->team2) !!}

{!! Form::label('score','score') !!}
{!! Form::text('score', $games->score) !!}

{!! Form::label('winner','winner') !!}
{!! Form::text('winner', $games->winner) !!}

{!! Form::submit('submit') !!}  

{!! Form::close() !!}



</body>

</html>