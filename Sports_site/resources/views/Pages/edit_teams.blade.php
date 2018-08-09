<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
Ajouter une équipe

{!! Form::open(['action' => 'TeamsController@edit']) !!}

{!! Form::label('name','name') !!}
{!! Form::text('name') !!}

{!! Form::label('country','country') !!}
{!! Form::text('country') !!}

{!! Form::label('points_per_game','points_per_game') !!}
{!! Form::number('points_per_game') !!}

{!! Form::label('ball_possession','ball_possession') !!}
{!! Form::number('ball_possession') !!}

{!! Form::label('team_ranking','team_ranking') !!}
{!! Form::number('team_ranking') !!}

{!! Form::label('flag','flag') !!}
{!! Form::file('flag') !!}

{!! Form::submit('submit') !!}  

{!! Form::close() !!}




</body>
</html>