<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
Ajouter un match

{!! Form::open(['action' => 'GamesController@add']) !!}

{!! Form::label('team1','team1') !!}
{!! Form::text('team1') !!}

{!! Form::label('team2','team2') !!}
{!! Form::text('team2') !!}

{!! Form::label('score','score') !!}
{!! Form::text('score') !!}

{!! Form::label('winner','winner') !!}
{!! Form::text('winner') !!}

{!! Form::label('game_location','game_location') !!}
{!! Form::text('game_location') !!}

{!! Form::label('game_time','game_time') !!}
{!! Form::time('game_time') !!}

{!! Form::label('number_of_fouls','number_of_fouls') !!}
{!! Form::number('number_of_fouls') !!}

{!! Form::submit('submit') !!}  

{!! Form::close() !!}

</body>
</html>