<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{asset('Abigail/logo/Abigail_Logo.png')}}" rel="icon">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style media="screen">
    @import url(https://fonts.googleapis.com/css?family=Nunito);

    * {
      padding: 0px;
      margin: 0px;
      font-family: arial;
    }

    #login {
      width: 100%;
      height: 100vh;
      background-image: url("../img/background.jpg");
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      position: absolute;
    }

    .center {
      width: 550px;
      height: auto;
      margin: 0 auto;
      margin-top: 20px;
      background-color: #f0f0f0;
      box-shadow: 2px 2px 16px 0px #757575;
      padding: 40px;
    }

    .center h2 {
      font-size: 40px;
      text-align: center;
      color: #757575;
      padding-bottom: 40px;
    }

    .fl {
      width: 100%;
    }

    .itpw {
      width: 99.7%;
      padding: 13px 10px;
      margin: 5px 0px;
      background-color: #dbdbdb;
      border: 3px solid #dbdbdb;
      color: #757575;
      transition: all 0.7s;
    }

    .its {
      width: 99.7%;
      font-size: 19px;
      color: #f5f5f5;
      padding: 12px;
      margin: 5px 0;
      background-color: #004d40;
      border: none;
      transition: all 0.4s;
    }

    .its-google {
      width: 99.7%;
      font-size: 19px;
      color: #f5f5f5;
      padding: 12px;
      margin: 5px 0;
      background-color: #8b0000;
      border: none;
      transition: all 0.4s;
    }

    .its-facebook {
      width: 99.7%;
      font-size: 19px;
      color: #f5f5f5;
      padding: 12px;
      margin: 5px 0;
      background-color: #0000cd;
      border: none;
      transition: all 0.4s;
    }

    .itpw:focus {
      border-bottom: 3px solid #004d40;
      color: #004d40
    }

    .its:hover , .its:focus {
      opacity: 0.7;
      cursor: pointer;
    }
    .its-google:hover , .its-google:focus {
      opacity: 0.7;
      cursor: pointer;
    }
    .its-facebook:hover , .its-facebook:focus {
      opacity: 0.7;
      cursor: pointer;
    }

    .center p {
      margin: 20px 0;
      text-align: center;
      font-size: 14px;
    }

    .center p a {
      color: #757575;
    }

    @media screen and (min-width:1500px) {

      .center {
        width: 350px;
      }

    }

    @media screen and (max-width:900px) {
      #login {
        background-size: 100% 100% 100%;
      }

      .its {
        width: 100%;
      }

      .itpw {
        font-size: 14px;
        width: 100%;
        padding: 13px 3%;
      }

      .center {
        width: 70%;
      }

      .center p {
        font-size: 12px;
      }

    }

    @media screen and (max-width:350px) {
      .center {
        padding: 20px;
        width: 75%;
      }
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Abigail
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
            @yield('content')
        </main>
    </div>
</body>
</html>
