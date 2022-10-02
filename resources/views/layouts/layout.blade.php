<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{config('app.name')}}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/prio-logo-white.png') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/font/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Sidebar-Menu.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    
</head>

<body style="height: auto;">




    @yield('content')




    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Sidebar-Menu.js') }}"></script>
</body>
</html>