<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{$title}}</title>
</head>
<body> 

    <nav class="navbar navbar-expand-lg navbar-light bg-success text-light">
        <a class="navbar-brand" href="#">{{ config('app.name',"Laravel")}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
          <a class="nav-link" href="{{ url("")}}">Home </a>
          <a class="nav-link" href="{{url('dashboard/')}}">Dashboard</a>
          <a class="nav-link" href="{{url('post/')}}">Post</a>
            <a class="nav-link" href="{{route('post.create')}}">Add Post</a>
          <a class="nav-link" href="{{url('about/')}}">About</a>

          </div>
        </div>
      </nav>

      <br>
      <div class="container">
        @yield('body')
      </div>

</body>
</html>