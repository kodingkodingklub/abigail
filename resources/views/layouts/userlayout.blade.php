<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Abigail
    </title>
    <link href="{{url('ABIGAIL/logo/Abigail_Logo.png')}}" rel="icon">
    <link rel="stylesheet" href="{{asset('user/dist/fontawesome-free-5.7.2-web/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('user/dist/css/foundation.css')}}" />
    <link rel="stylesheet" href="{{asset('user/dist/css/app.css')}}" />
    {{-- <link href="{{asset('user/dist/css/foundation-icons.css')}}" rel="stylesheet"> --}}


</head>

<body>
    <div class="top-bar">
        <div style="color:white" class="top-bar-left">
            <h4 class="brand-title">
                <a href="{{route('welcome')}}">
                    <img src="{{url('ABIGAIL/logo/ABIGAIL_CLOTHING_LOGO_WHITE.png')}}" width="155" height="75" alt="">
                </a>
            </h4>
        </div>
        <div class="top-bar-right" style="padding:12px 12px;">
            <ol class="menu">
                @yield('linkcontent')
                @if (Route::has('login'))
                @auth
                @if(Auth::user()->id_level == 1 || Auth::user()->id_level == 2)
                <li>
                    <a href="{{route('home')}}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{route('logout')}}">
                        LOGOUT
                    </a>
                </li>
                @else
                <li>
                    <a href="{{route('logout')}}">
                        LOGOUT
                    </a>
                </li>
                @endif
                @else
                <li>
                    <a href="{{ route('login') }}">LOGIN</a>
                </li>
                @endauth
                @endif
            </ol>
        </div>
    </div>
    <main>
        @yield('content')
    </main>
    <!-- Footer -->
    <br>
    <footer class="footer">
        <div class="row full-width">
            <div class="small-12 medium-4 large-4 columns">
                <i class="fas fa-laptop large fa-5x"></i>
                <p>Coded with love by Webdevmatics for educational purpose only</p>
            </div>
            <div class="small-12 medium-4 large-4 columns">
                <i class="fab fa-html5 fa-5x"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed
                    itaque nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates
                    deserunt!</p>
            </div>

            <div class="small-6 medium-4 large-4 columns">
                <h4>Follow Us</h4>
                <ul class="footer-links">
                    <li><i class="fab fa-github"></i> <a href="https://github.com/webdevmatics">GitHub</a></li>
                    <li><i class="fab fa-facebook"></i> <a href="#">Facebook</a></li>
                    <li><i class="fab fa-twitter"></i> <a href="https://twitter.com/webdevmatics">Twitter</a></li>
                    <ul>
            </div>
        </div>
    </footer>

    <script src="{{asset('user/dist/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('user/dist/js/app.js')}}"></script>
    <script src="{{asset('user/dist/fontawesome-free-5.7.2-web/js/all.min.js')}}"></script>
</body>

</html>