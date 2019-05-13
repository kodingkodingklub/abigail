@extends('layouts.app')

@section('title')
  Abigail - Sign In
@endsection

@section('content')
<div id="login" style="margin-top:-25px"><!-- membuat sebuah div id dengan tujuan sebagai background utama  -->
  <div class="center"><!-- div dengan class center bertujuan untuk membuat posisi tag form yang akan dibuat akan menjadi rata tengah -->

      <h2>Sign In <a style="color: black" href="{{route('welcome')}}">Abigail</a></h2> <!-- membuat judul pembuka -->

      <form class="fl" action="{{route('login')}}" method="post">
        @csrf

        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} itpw" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"><br>
        @if($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} itpw" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="Password"><br>
        @if($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <button class="its" type="submit">Sign In</button>
      </form>

      <h3 style="text-align: center">Or</h3>
      <a href="{{url('login/google')}}"><button class="its-google" type="button">Sign In with Google</button></a>
      <a href="{{url('login/facebook')}}"><button class="its-facebook" type="button">Sign In with Facebook</button></a>
      <p><a href="#">Forget your password ?</a> | <a href="{{url('register')}}">Created an account</a>  </p>

  </div>
</div>

@endsection
