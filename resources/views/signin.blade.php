@extends('layouts.master')

@section('title')
  VolunTutor | Sign In
@endsection

@section('content')

  <center>
  @include('includes.message')
</center>

  <center>
    <div class="container">
      <a href="{{ URL::route('home') }}" class="btn btn-edit">Back to Splash</a>
      <h3>Sign In</h3>
      <form action="{{ route('signin') }}" method="post">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
          <input style="width: 25%;" placeholder="Email" class="form-control" type="text" name="email" id="email">
        </div>
        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
          <input style="width: 25%;" placeholder="Password" class="form-control" type="password" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-raised btn-primary">Submit</button>
        <p>Don't have an account? <a href="{{ route('signup') }}">Sign up</a>.</p>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>
  </center>

@endsection
