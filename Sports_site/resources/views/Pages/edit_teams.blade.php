<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
Editer une équipe

{!! Form::open(['action' => ['TeamsController@update',$teams->id]]) !!}
{{ csrf_field() }}
{!! Form::label('name','name') !!}
{!! Form::text('name', $teams->name) !!}

{!! Form::label('country','country') !!}
{!! Form::text('country', $teams->country) !!}

{!! Form::label('points_per_game','points_per_game') !!}
{!! Form::number('points_per_game', $teams->points_per_game) !!}

{!! Form::label('ball_possession','ball_possession') !!}
{!! Form::number('ball_possession', $teams->ball_possession) !!}

{!! Form::label('team_ranking','team_ranking') !!}
{!! Form::number('team_ranking', $teams->team_ranking) !!}

{!! Form::label('flag','flag') !!}
{!! Form::file('flag') !!}

{!! Form::submit('submit') !!}  

{!! Form::close() !!}



</body>

</html>