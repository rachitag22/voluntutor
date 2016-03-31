@extends('layouts.master')

@section('title')
  VolunTutor
@endsection

@section('content')

<div class="container">
  <center>
    <h4>Welcome to</h4>
    <h2>VolunTutor</h2>
    <p>VolunTutor lets members of RMHS honor societies (such as NHS, Science/Math/Spanish/French/Music Honor Societies) find students to tutor, and lets any RMHS student request tutoring for a class he/she needs help in.</p>

    <a href="{{ URL::route('signup') }}" class="btn btn-edit">Sign Up</a>
    <a href="{{ URL::route('signin') }}" class="btn btn-edit">Sign In</a>

  </center>
</div>
@endsection
