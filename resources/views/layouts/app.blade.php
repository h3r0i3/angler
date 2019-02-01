<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item active">
                <a class="nav-link" href="/ranking">Ranking</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="/atlas">Atlas ryb</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="/lowiska">Szukaj łowisk</a>
                </li>
                @if (!Auth::guest())       
                <li class="nav-item">
                    <a class="nav-link disabled" href="/dodaj">Dodaj</a>
                </li>         
                <li class="nav-item">
                    <a class="nav-link disabled" href="/wedki">Wędki</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link disabled" href="/kolowrotki">Kołowrotki</a>
                </li>               
                <li class="nav-item">
                    <a class="nav-link disabled" href="/zylki">Żyłki</a>
                </li>               
                <li class="nav-item">
                    <a class="nav-link disabled" href="/haczyki">Haczyki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/przypony">Przypony</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/zestawy">Zestawy</a>
                </li>
                @endif
            </ul>

            <ul class="navbar-nav">
              <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="nav-item active"><a class= "nav-link" href="{{ url('/login') }}">Logowanie</a></li>
                    <li class="nav-item active"><a class= "nav-link" href="{{ url('/register') }}">Rejestracja</a></li>
                @else
                    <li class="nav-item"><span class="nav-link">Witaj: {{ Auth::user()->name }}</span></li>
                    <li class="nav-item">                    
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            Wyloguj
                        </a>    
                    </li>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif
            </ul>

        </div>
      </nav>

        <main class="py-4">

            <div class="container">
                @include('inc.messages')
                @yield('content') <!-- w tym miejscu pojawiają się dane zawarte w sekcjach o nazwie "@section('content') -->
              </div>   
        </main>
    </div>
</body>
</html>
