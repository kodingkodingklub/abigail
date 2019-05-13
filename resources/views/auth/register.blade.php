@extends('layouts.app')

@section('title')
  Abigail - Sign Up
@endsection

@section('content')
<div id="login" style="margin-top:-25px"><!-- membuat sebuah div id dengan tujuan sebagai background utama  -->
  <div class="center"><!-- div dengan class center bertujuan untuk membuat posisi tag form yang akan dibuat akan menjadi rata tengah -->

      <h2>Sign Up <a style="color: black" href="{{route('welcome')}}">Abigail</a></h2> <!-- membuat judul pembuka -->

      <form class="fl" action="{{route('register')}}" method="post">
        @csrf
        @if(!empty($name))
          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} itpw" name="name" value="{{ $name }}" required autocomplete="name" placeholder="Name"><br>
        @else
          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} itpw" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name"><br>
        @endif
        @if($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

        @if(!empty($email))
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} itpw" name="email" value="{{ $email }}" required autocomplete="email" placeholder="Email"><br>
        @else
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} itpw" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"><br>
        @endif
        @if($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        @if(!empty($ava))
          <input id="avatar" type="text" class="itpw" name="avatar" value="{{ $ava }}"><br>
        @else

        @endif

        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} itpw" name="password" required autocomplete="new-password" placeholder="Password"><br>
        @if($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <input id="password-confirm" type="password" class="form-control itpw" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"><br>
        <button class="its" type="submit">Sign Up</button>
      </form>

      <h3 style="text-align: center">Or</h3>
      <a href="{{url('login/google')}}"><button class="its-google" type="button">Sign Up with Google</button></a>
      <a href="{{url('login/facebook')}}"><button class="its-facebook" type="button">Sign Up with Facebook</button></a>
      <p><a href="{{url('login')}}">I have an account</a>  </p>

  </div>
</div>

@endsection
