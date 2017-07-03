<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <script src="https://use.fontawesome.com/a7eb2e0ead.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href=""><span class="fa fa-users" aria-hidden="true"></span> Organizations</a></li>
                        <li><a href="{{ route('news.index') }}"><span class="fa fa-newspaper-o" aria-hidden="true"></span> Nieuws</a></li>
                
                        @if (Auth::check())
                            <li><a href="{{ route('gifts.index') }}"><i class="fa fa-th-list" aria-hidden="true"></i> Mijn giften</a></li>
                        @endif

                        <li><a href=""><span class="fa fa-legal" aria-hidden="true"></span> Disclaimer</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><span class="fa fa-sign-in" aria-hidden="true"></span> Login</a></li>
                            <li><a href="{{ route('register') }}"><span class="fa fa-plus" aria-hidden="true"></span> Register</a></li>
                        @else
                            <li><a href="{{ route('notifications.index') }}"><span class="fa fa-bell-o" aria-hidden="true"></span></a>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="fa fa-plus" aria-hidden="true"></span>
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('gifts.create') }}">Vrije gift</a></li>
                                    <li><a href="">Initiatief</a></li>
                                    <li><a href="">Organisatie</a></li>                               
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href=""><span class="fa fa-cogs" aria-hidden="true"></span> Account settings</a></li>
                                    <li><a href=""><span class="fa fa-bug" aria-hidden="true"></span> Meld een probleem</a></li>   
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class="fa fa-sign-out"></span> Uitloggen
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
