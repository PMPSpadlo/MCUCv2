<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script
        src="https://kit.fontawesome.com/c6c5d5f952.js"
        crossorigin="anonymous"
    ></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <a href="#" class="toggle-button">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </a>
    <nav>
        <ul class="menu">
            <li><a href="{{ route('karolIndex') }}"><i class="fa fa-home icon"></i>Dashboard</a></li>
            <li><a href="{{ route('karolMarket') }}"><i class="fa fa-poll icon"></i>Market</a></li>
            <li><a href="{{ route('karolTransactions') }}"><i class="fa fa-user icon"></i>Profile</a></li>
            <li></i><a href="{{ route('karolWallet') }}"><i class="fa fa-wallet icon"></i>Wallet</a></li>
            <li>
                <a href="{{ route('karolTransactions') }}"><i class="fa fa-exchange-alt icon"></i>Transaction</a>
            </li>
            <li><a href="#"><i class="fa fa-sign-out-alt icon"></i>Logout</a></li>
        </ul>
    </nav>
    <div class="column">
        <div class="user first-row">
            <div class="user-info">
                <p>Hello, Jeff!</p>
                <p>Mon, 25/10/2021 3:50am</p>
            </div>
            <img class="avatar" src="{{asset('storage/images/avatar.png')}}">
        </div>
    @yield('content')
    </div>
</div>
</body>
</html>
