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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @if(Session::has('_success'))
                <div class="alert alert-success"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgMzY3LjgwNSAzNjcuODA1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzNjcuODA1IDM2Ny44MDU7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiMzQkI1NEE7IiBkPSJNMTgzLjkwMywwLjAwMWMxMDEuNTY2LDAsMTgzLjkwMiw4Mi4zMzYsMTgzLjkwMiwxODMuOTAycy04Mi4zMzYsMTgzLjkwMi0xODMuOTAyLDE4My45MDINCgkJUzAuMDAxLDI4NS40NjksMC4wMDEsMTgzLjkwM2wwLDBDLTAuMjg4LDgyLjYyNSw4MS41NzksMC4yOSwxODIuODU2LDAuMDAxQzE4My4yMDUsMCwxODMuNTU0LDAsMTgzLjkwMywwLjAwMXoiLz4NCgk8cG9seWdvbiBzdHlsZT0iZmlsbDojRDRFMUY0OyIgcG9pbnRzPSIyODUuNzgsMTMzLjIyNSAxNTUuMTY4LDI2My44MzcgODIuMDI1LDE5MS4yMTcgMTExLjgwNSwxNjEuOTYgMTU1LjE2OCwyMDQuODAxIA0KCQkyNTYuMDAxLDEwMy45NjggCSIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" height="24" />
                    {{ Session::get('_success') }}
                </div>
                @endif
                @if(Session::has('_failure'))
                <div class="alert alert-danger"><img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yNTYgMGMtMTQxLjE2NDA2MiAwLTI1NiAxMTQuODM1OTM4LTI1NiAyNTZzMTE0LjgzNTkzOCAyNTYgMjU2IDI1NiAyNTYtMTE0LjgzNTkzOCAyNTYtMjU2LTExNC44MzU5MzgtMjU2LTI1Ni0yNTZ6bTAgMCIgZmlsbD0iI2Y0NDMzNiIvPjxwYXRoIGQ9Im0zNTAuMjczNDM4IDMyMC4xMDU0NjljOC4zMzk4NDMgOC4zNDM3NSA4LjMzOTg0MyAyMS44MjQyMTkgMCAzMC4xNjc5NjktNC4xNjAxNTcgNC4xNjAxNTYtOS42MjEwOTQgNi4yNS0xNS4wODU5MzggNi4yNS01LjQ2MDkzOCAwLTEwLjkyMTg3NS0yLjA4OTg0NC0xNS4wODIwMzEtNi4yNWwtNjQuMTA1NDY5LTY0LjEwOTM3Ni02NC4xMDU0NjkgNjQuMTA5Mzc2Yy00LjE2MDE1NiA0LjE2MDE1Ni05LjYyMTA5MyA2LjI1LTE1LjA4MjAzMSA2LjI1LTUuNDY0ODQ0IDAtMTAuOTI1NzgxLTIuMDg5ODQ0LTE1LjA4NTkzOC02LjI1LTguMzM5ODQzLTguMzQzNzUtOC4zMzk4NDMtMjEuODI0MjE5IDAtMzAuMTY3OTY5bDY0LjEwOTM3Ni02NC4xMDU0NjktNjQuMTA5Mzc2LTY0LjEwNTQ2OWMtOC4zMzk4NDMtOC4zNDM3NS04LjMzOTg0My0yMS44MjQyMTkgMC0zMC4xNjc5NjkgOC4zNDM3NS04LjMzOTg0MyAyMS44MjQyMTktOC4zMzk4NDMgMzAuMTY3OTY5IDBsNjQuMTA1NDY5IDY0LjEwOTM3NiA2NC4xMDU0NjktNjQuMTA5Mzc2YzguMzQzNzUtOC4zMzk4NDMgMjEuODI0MjE5LTguMzM5ODQzIDMwLjE2Nzk2OSAwIDguMzM5ODQzIDguMzQzNzUgOC4zMzk4NDMgMjEuODI0MjE5IDAgMzAuMTY3OTY5bC02NC4xMDkzNzYgNjQuMTA1NDY5em0wIDAiIGZpbGw9IiNmYWZhZmEiLz48L3N2Zz4=" height="24"/>
                    {{ Session::get('_failure') }}
                </div>
                @endif
            </div>
            @yield('content')
        </main>
    </div>
</body>
</html>
