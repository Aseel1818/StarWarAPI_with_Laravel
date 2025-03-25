<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets - SWAPI</title>
</head>

<body>
<h1>Planets</h1>
@if(!empty($planets))  <!-- Fix the check -->
<ul>
    @foreach ($planets as $planet)
        <li>{{$planet['name']}} - {{$planet['climate']}} - {{$planet['population']}}</li>
    @endforeach
</ul>
@else
    <p>No planets data available</p>
@endif
</body>

</html>