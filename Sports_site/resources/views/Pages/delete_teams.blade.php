<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sports site</title>
</head>
<body>
    
Supprimer une équipe

{!! Form::open(['action' => ['TeamsController@destroy']]) !!}

{!! Form::hidden('id', $teams->id) !!}

{!! Form::label('name','name') !!}
{!! Form::text('name', $teams->name) !!}

{!! Form::label('country','country') !!}
{!! Form::text('country', $teams->country) !!}

{!! Form::submit('submit') !!}  

{!! Form::close() !!}



</body>

</html>