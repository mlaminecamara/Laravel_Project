<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($games as $fetch)
    <ul>
    <li>{{ $fetch-> team1 }}</li>
    <li>{{ $fetch-> team2 }}</li>
    <li>{{ $fetch-> score }}</li>
    <li>{{ $fetch-> winner }}</li>
    <li>{{ $fetch-> game_location }}</li>
    <li>{{ $fetch-> game_time }}</li>
    <li>{{ $fetch-> number_of_fouls }}</li>
    </ul>
    @endforeach
</body>
</html>