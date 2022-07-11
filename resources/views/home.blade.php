<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title', 'Film-Mirko')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
 <h1>Films</h1>
    @foreach($movies as $movie)
    <li>{{$movie['title']}}<br> {{$movie['original_title']}}<br> {{$movie['nationality']}}<br> {{$movie['date']}}<br> {{$movie['vote']}}<hr></li>
        
    @endforeach
</body>
</html>