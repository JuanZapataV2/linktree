<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

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
                                <a id="navbarDropdown" class="mr-2 mb-2 mt-0 nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; padding-left:50px;">
                                    <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width: 35px; height:35px; position:absolute; left:9px; border-radious:50%;"/>
                                    {{ Auth::user()->name }}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgaGVpZ2h0PSI1MTIiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGRhdGEtbmFtZT0iTGF5ZXIgMSI+PHBhdGggZD0ibTEzLjA3NiA5Ny4wODNhMS43NSAxLjc1IDAgMCAwIDEuNzUtMS43NXYtMjguNjY2YTEuNzUgMS43NSAwIDAgMCAtMy41IDB2MjguNjY2YTEuNzUgMS43NSAwIDAgMCAxLjc1IDEuNzV6Ii8+PHBhdGggZD0ibTEyMi4zOCA2NC45N2MuMDI3LS4wNDEuMDQ2LS4wODUuMDY5LS4xMjhhMS4wMzcgMS4wMzcgMCAwIDAgLjE0Ni0uMzQ4Yy4wMTUtLjA1MS4wMzUtLjEuMDQ1LS4xNTJhMS43NTUgMS43NTUgMCAwIDAgMC0uNjg1Yy0uMDEtLjA1My0uMDMtLjEtLjA0NS0uMTUyYTEuNzMzIDEuNzMzIDAgMCAwIC0uMDU0LS4xNzQgMS42OTIgMS42OTIgMCAwIDAgLS4wOTItLjE3NGMtLjAyMy0uMDQyLS4wNDItLjA4Ni0uMDY5LS4xMjdhMS43NSAxLjc1IDAgMCAwIC0uMjItLjI2OWwtMTIuNTA5LTEyLjUwOWExLjc1IDEuNzUgMCAwIDAgLTIuNDc1IDIuNDc1bDkuNTI0IDkuNTIzaC01My4yNzZhMS43NSAxLjc1IDAgMCAwIDAgMy41aDUzLjI3NmwtOS41MjMgOS41MjNhMS43NSAxLjc1IDAgMSAwIDIuNDc1IDIuNDc1bDEyLjUwOC0xMi41MDlhMS43NSAxLjc1IDAgMCAwIC4yMi0uMjY5eiIvPjxwYXRoIGQ9Im05NS40MjQgNzIuMjVhMS43NSAxLjc1IDAgMCAwIC0xLjc1IDEuNzV2MzYuOWgtNDUuMDQxdi05My44aDQ1LjA0MXYzNi45YTEuNzUgMS43NSAwIDEgMCAzLjUgMHYtMzguNjVhMS43NSAxLjc1IDAgMCAwIC0xLjc1LTEuNzVoLTQ2Ljc5MXYtNy4xYTEuNzUgMS43NSAwIDAgMCAtMi40NjEtMS42bC0zOS44MDcgMTcuNjkzYTEuNzUxIDEuNzUxIDAgMCAwIC0xLjAzOSAxLjZ2NzkuNjE1YTEuNzUxIDEuNzUxIDAgMCAwIDEuMDM5IDEuNmwzOS44MDcgMTcuNjkyYTEuNzUgMS43NSAwIDAgMCAyLjQ2MS0xLjZ2LTcuMWg0Ni43OTFhMS43NSAxLjc1IDAgMCAwIDEuNzUtMS43NXYtMzguNjVhMS43NSAxLjc1IDAgMCAwIC0xLjc1LTEuNzV6bS01MC4yOTEgNDYuNTU4LTM2LjMwNy0xNi4xMzh2LTc3LjM0bDM2LjMwNy0xNi4xMzh6Ii8+PC9zdmc+" height="20"/>{{ __('Logout') }}
                                    </a>
                                      

                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{route('profile.index')}}"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik01MTAuNzAyLDQzOC43MjJjLTIuMjUxLTEwLjgxMy0xMi44NC0xNy43NTQtMjMuNjU3LTE1LjUwM2MtMTAuODE0LDIuMjUxLTE3Ljc1NSwxMi44NDMtMTUuNTAzLDIzLjY1Ng0KCQkJYzEuMjk3LDYuMjI5LTAuMjQ4LDEyLjYxMy00LjIzNiwxNy41MTljLTIuMzEsMi44NDEtNy40NjEsNy42MDYtMTUuOTk5LDcuNjA2SDYwLjY5M2MtOC41MzgsMC0xMy42ODktNC43NjYtMTUuOTk5LTcuNjA2DQoJCQljLTMuOTg5LTQuOTA1LTUuNTMzLTExLjI5LTQuMjM2LTE3LjUxOWMyMC43NTYtOTkuNjk1LDEwOC42OTEtMTcyLjUyMSwyMTAuMjQtMTc0Ljk3N2MxLjc1OSwwLjA2OCwzLjUyNiwwLjEwMiw1LjMwMiwwLjEwMg0KCQkJYzEuNzgyLDAsMy41NTYtMC4wMzUsNS4zMjItMC4xMDNjNzEuNTMyLDEuNzE2LDEzNy42NDgsMzcuOTQ3LDE3Ny42ODcsOTcuNjZjNi4xNTEsOS4xNzUsMTguNTc0LDExLjYyNSwyNy43NSw1LjQ3NA0KCQkJYzkuMTc0LTYuMTUxLDExLjYyNS0xOC41NzUsNS40NzMtMjcuNzQ5Yy0zMi44MTctNDguOTQ0LTgwLjQ3LTg0LjUzNC0xMzQuODA0LTEwMi40MTdDMzcwLjUzOCwyMjAuMDM2LDM5MiwxODAuNDc3LDM5MiwxMzYNCgkJCUMzOTIsNjEuMDEsMzMwLjk5MSwwLDI1NiwwUzEyMCw2MS4wMSwxMjAsMTM2YzAsNDQuNTA0LDIxLjQ4OCw4NC4wODQsNTQuNjMzLDEwOC45MTFjLTMwLjM2OCw5Ljk5OC01OC44NjMsMjUuNTU1LTgzLjgwMyw0Ni4wNjkNCgkJCWMtNDUuNzMyLDM3LjYxNy03Ny41MjksOTAuMDg2LTg5LjUzMiwxNDcuNzQyYy0zLjc2MiwxOC4wNjcsMC43NDUsMzYuNjIzLDEyLjM2Myw1MC45MDlDMjUuMjIyLDUwMy44NDcsNDIuMzY1LDUxMiw2MC42OTMsNTEyDQoJCQloMzkwLjYxM2MxOC4zMjksMCwzNS40NzItOC4xNTMsNDcuMDMyLTIyLjM2OUM1MDkuOTU4LDQ3NS4zNDUsNTE0LjQ2NCw0NTYuNzg5LDUxMC43MDIsNDM4LjcyMnogTTE2MCwxMzYNCgkJCWMwLTUyLjkzNSw0My4wNjUtOTYsOTYtOTZzOTYsNDMuMDY1LDk2LDk2YzAsNTEuMzA1LTQwLjQ1NSw5My4zMzktOTEuMTQxLDk1Ljg3OGMtMS42MTctMC4wMy0zLjIzNy0wLjA0NS00Ljg1OS0wLjA0NQ0KCQkJYy0xLjYxNCwwLTMuMjI4LDAuMDE2LTQuODQsMC4wNDZDMjAwLjQ2NSwyMjkuMzUsMTYwLDE4Ny4zMTIsMTYwLDEzNnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" height="20"/> Perfil</a>
                                    <a class="dropdown-item" href="{{route('home')}}"><img src="https://www.flaticon.com/svg/vstatic/svg/1946/1946488.svg?token=exp=1612640978~hmac=c4f7ccc974963b28eca4651f8f89ab62" height="20"/> Página principal</a>
                                    
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Enlaces
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('links.index') }}"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00OTIsMjM2SDE0NC4yNjJjLTExLjA0NiwwLTIwLDguOTU0LTIwLDIwczguOTU0LDIwLDIwLDIwSDQ5MmMxMS4wNDYsMCwyMC04Ljk1NCwyMC0yMEM1MTIsMjQ0Ljk1NCw1MDMuMDQ2LDIzNiw0OTIsMjM2eg0KCQkJIi8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00OTIsODZIMTQ0LjI2MmMtMTEuMDQ2LDAtMjAsOC45NTQtMjAsMjBzOC45NTQsMjAsMjAsMjBINDkyYzExLjA0NiwwLDIwLTguOTU0LDIwLTIwUzUwMy4wNDYsODYsNDkyLDg2eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNDkyLDM4NkgxNDQuMjYyYy0xMS4wNDYsMC0yMCw4Ljk1NC0yMCwyMGMwLDExLjA0Niw4Ljk1NCwyMCwyMCwyMEg0OTJjMTEuMDQ2LDAsMjAtOC45NTQsMjAtMjANCgkJCUM1MTIsMzk0Ljk1NCw1MDMuMDQ2LDM4Niw0OTIsMzg2eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8Y2lyY2xlIGN4PSIyNyIgY3k9IjEwNiIgcj0iMjciLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPGNpcmNsZSBjeD0iMjciIGN5PSIyNTYiIHI9IjI3Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxjaXJjbGUgY3g9IjI3IiBjeT0iNDA2IiByPSIyNyIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" height="20"/> Listar</a>
                                            <a class="dropdown-item" href="{{ route('links.create') }}"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxnPg0KCQkJPHBhdGggZD0iTTE1NiwyNTZjMCwxMS4wNDYsOC45NTQsMjAsMjAsMjBoNjB2NjBjMCwxMS4wNDYsOC45NTQsMjAsMjAsMjBzMjAtOC45NTQsMjAtMjB2LTYwaDYwYzExLjA0NiwwLDIwLTguOTU0LDIwLTIwDQoJCQkJYzAtMTEuMDQ2LTguOTU0LTIwLTIwLTIwaC02MHYtNjBjMC0xMS4wNDYtOC45NTQtMjAtMjAtMjBzLTIwLDguOTU0LTIwLDIwdjYwaC02MEMxNjQuOTU0LDIzNiwxNTYsMjQ0Ljk1NCwxNTYsMjU2eiIvPg0KCQkJPHBhdGggZD0iTTE2MC40MDYsNjEuOGwyNS44NjktMTAuNzE2YzEwLjIwNC00LjIyOCwxNS4wNTEtMTUuOTI3LDEwLjgyMy0yNi4xMzJjLTQuMjI4LTEwLjIwNS0xNS45MjYtMTUuMDU0LTI2LjEzMi0xMC44MjMNCgkJCQlsLTI1Ljg2OSwxMC43MTZjLTEwLjIwNCw0LjIyOC0xNS4wNTEsMTUuOTI3LTEwLjgyMywyNi4xMzJDMTM4LjQ4OCw2MS4xNDgsMTUwLjE2OCw2Ni4wMzgsMTYwLjQwNiw2MS44eiIvPg0KCQkJPHBhdGggZD0iTTI1NiwwYy0xMS4wNDYsMC0yMCw4Ljk1NC0yMCwyMHM4Ljk1NCwyMCwyMCwyMGMxMTkuMzc4LDAsMjE2LDk2LjYwOCwyMTYsMjE2YzAsMTE5LjM3OC05Ni42MDgsMjE2LTIxNiwyMTYNCgkJCQljLTExOS4zNzgsMC0yMTYtOTYuNjA4LTIxNi0yMTZjMC0xMS4wNDYtOC45NTQtMjAtMjAtMjBzLTIwLDguOTU0LTIwLDIwYzAsMTQxLjQ4MywxMTQuNDk3LDI1NiwyNTYsMjU2DQoJCQkJYzE0MS40ODMsMCwyNTYtMTE0LjQ5NywyNTYtMjU2QzUxMiwxMTQuNTE3LDM5Ny41MDMsMCwyNTYsMHoiLz4NCgkJCTxwYXRoIGQ9Ik05My4zNjYsMTEzLjE2NWwxOS43OTktMTkuNzk5YzcuODExLTcuODExLDcuODExLTIwLjQ3NSwwLTI4LjI4NWMtNy44MTEtNy44MS0yMC40NzUtNy44MTEtMjguMjg1LDBMNjUuMDgxLDg0Ljg4DQoJCQkJYy03LjgxMSw3LjgxMS03LjgxMSwyMC40NzUsMCwyOC4yODVDNzIuODksMTIwLjk3NCw4NS41NTUsMTIwLjk3Niw5My4zNjYsMTEzLjE2NXoiLz4NCgkJCTxwYXRoIGQ9Ik0yNC45NTIsMTk3LjA5OWMxMC4yMjcsNC4yMzYsMjEuOTE0LTAuNjQyLDI2LjEzMi0xMC44MjNsMTAuNzE2LTI1Ljg3YzQuMjI4LTEwLjIwNS0wLjYxOS0yMS45MDQtMTAuODIzLTI2LjEzMg0KCQkJCWMtMTAuMjA3LTQuMjI3LTIxLjkwNCwwLjYxOS0yNi4xMzIsMTAuODIzbC0xMC43MTYsMjUuODY5QzkuOTAxLDE4MS4xNzIsMTQuNzQ4LDE5Mi44NzEsMjQuOTUyLDE5Ny4wOTl6Ii8+DQoJCTwvZz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" height="20" /> Agregar</a>
                                        </div>
                                    </li>
                                    
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
