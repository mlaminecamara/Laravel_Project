<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
Editer un joueur

{!! Form::open(['action' => ['PlayersController@update',$players->id]]) !!}
{{ csrf_field() }}
{!! Form::label('name','name') !!}
{!! Form::text('name', $players->name) !!}

{!! Form::label('team_id','team_id') !!}
{!! Form::text('team_id', $players->team_id) !!}

{!! Form::label('points_per_game','points_per_game') !!}
{!! Form::number('points_per_game', $players->points_per_game) !!}

{!! Form::label('blocks_per_game','blocks_per_game') !!}
{!! Form::number('blocks_per_game', $players->blocks_per_game) !!}

{!! Form::label('assists_per_game','assists_per_game') !!}
{!! Form::number('assists_per_game', $players->assists_per_game) !!}

{!! Form::submit('submit') !!}  

{!! Form::close() !!}

</body>

</html>