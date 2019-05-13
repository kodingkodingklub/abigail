<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            Abigail
        </title>
        <link href="{{asset('ABIGAIL/logo/Abigail_Logo.png')}}" rel="icon">
        <link rel="stylesheet" href="{{asset('user/dist/css/font-awesome.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('user/dist/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('user/dist/css/app.css')}}"/>
        <link href="{{asset('user/dist/css/foundation-icons.css')}}" rel="stylesheet">


    </head>
    <body>
        <div  class="top-bar">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="{{route('welcome')}}">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                       Abigail Shirts
                    </a>
                </h4>
            </div>
            <div class="top-bar-right">
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
        @yield('content')
        <!-- Footer -->
        <br>
<footer class="footer">
  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-laptop"></i>
      <p>Coded with love by Webdevmatics for educational purpose only</p>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-html5"></i>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
    </div>
    
    <div class="small-6 medium-4 large-4 columns">
      <h4>Follow Us</h4>
      <ul class="footer-links">
        <li><a href="https://github.com/webdevmatics">GitHub</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="https://twitter.com/webdevmatics">Twitter</a></li>
      <ul>
    </div>
  </div>
</footer>

    <script src="{{asset('user/dist/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('user/dist/js/app.js')}}"></script>
    </body>
</html>
