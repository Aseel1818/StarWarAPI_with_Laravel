<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People - SWAPI</title>
</head>

<body>
<h1>People</h1>
@if(!empty($people))  <!-- Fix the check -->
<ul>
    @foreach ($people as $person)
        <li>{{$person['name']}} - {{$person['gender']}} - {{$person['birth_year']}}</li>
    @endforeach
</ul>
@else
    <p>No people data available.</p>
@endif

    <!-- Pagenation links -->
    <div>
    @if($prevPage)
        <a href="{{ url('people?page=' . (int) last(explode('=', $prevPage))) }}">Previous</a>
    @endif

    @if($nextPage)
        <a href="{{ url('people?page=' . (int) last(explode('=', $nextPage))) }}">Next</a>
    @endif
</div>
</body>

</html>