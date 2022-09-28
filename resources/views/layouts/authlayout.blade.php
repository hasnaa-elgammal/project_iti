<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/fontawesome/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/auth.css')}}">
    <title>@yield('title')</title>
</head>

<body class="auth-body">
    <div class="outer-container">
        <div class="container bg-white auth-container">
            <div class="head text-center">
                <h1>@yield('head')</h1>
            </div>
            <div class="form-container">@yield('form')</div>

        </div>
    </div>
    <script src="{{URL::asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/fontawesome/all.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
</body>

</html>
