<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/fontawesome/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{route('home')}}">BLOG</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('articles.create')}}">Add an Article</i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  User Name
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @yield('content')
      <script src="{{URL::asset('js/jquery-3.5.1.min.js')}}"></script>
      <script src="{{URL::asset('js/popper.min.js')}}"></script>
      <script src="{{URL::asset('js/fontawesome/all.min.js')}}"></script>
      <script src="{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>
      <script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>
