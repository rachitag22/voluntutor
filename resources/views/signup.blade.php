@extends('layouts.master')

@section('title')
  VolunTutor | Sign Up
@endsection

@section('content')
  <center>
  @include('includes.message')
  </center>

  <center>
      <div class="container">
        <a href="{{ URL::route('home') }}" class="btn btn-edit">Back to Splash</a>
      <h3>Sign Up</h3>
      <form action="{{ route('signup') }}" method="post">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
          <input style="width: 25%;" class="form-control" type="text" placeholder="First Name" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
          <input style="width: 25%;" class="form-control" type="text" placeholder="Last Name" name="last_name" id="last_name" value="{{ Request::old('last_name') }}">
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
          <input style="width: 25%;" class="form-control" type="text" placeholder="Email" name="email" id="email" value="{{ Request::old('email') }}">
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
          <input style="width: 25%;" class="form-control" type="password" placeholder="Password" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <p>Already have an account? <a href="{{ route('signin') }}">Sign in</a>.</p>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
</div>
</center>

@endsection
