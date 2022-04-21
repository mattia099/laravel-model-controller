<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Home</title>
</head>
<body>
  <div class="container">
    <ul>
      @foreach ($movies as $movie)
        <li>
          <h1>{{ $movie['title'] }}</h1>
          <p> {{ $movie['date']}} </p>
          <span>{{ $movie['vote'] }}</span>
        </li>    
      @endforeach
  </ul>
</div>
</body>
</html>