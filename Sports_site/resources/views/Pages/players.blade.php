<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($players as $fetch)
    <ul>
    <li>{{ $fetch-> name }}</li>
    <li>{{ $fetch-> team_id }}</li>
    <li>{{ $fetch-> points_per_game }}</li>
    <li>{{ $fetch-> blocks_per_game }}</li>
    <li>{{ $fetch-> assists_per_game }}</li>
    </ul>
    @endforeach
</body>
</html>