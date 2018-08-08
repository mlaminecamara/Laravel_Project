<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    @foreach($teams as $fetch)
    <ul>
    <li>{{ $fetch-> name }}</li>
    <li>{{ $fetch-> country }}</li>
    <li>{{ $fetch-> flag }}</li>
    <li>{{ $fetch-> points_per_game }}</li>
    <li>{{ $fetch-> ball_possession }}</li>
    <li>{{ $fetch-> team_ranking }}</li>
    </ul>
    @endforeach
</body>
</html>