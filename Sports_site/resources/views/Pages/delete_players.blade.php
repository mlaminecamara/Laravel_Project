<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sports site</title>
</head>
<body>
    
Supprimer un joueur

{!! Form::open(['action' => ['PlayersController@destroy']]) !!}

{!! Form::hidden('id', $players->id) !!}

{!! Form::label('name','name') !!}
{!! Form::text('name', $players->name) !!}

{!! Form::submit('submit') !!}  

{!! Form::close() !!}



</body>

</html>