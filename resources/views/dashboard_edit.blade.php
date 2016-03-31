@extends('layouts.master')

@section('content')

@section('title')
    VolunTutor | Dashboard
@endsection

<center><header><h3>Tutoring Requests</h3></header></center>
          @include('includes.message')


      <div class="col-md-6 col-md-offset-3">
        <div class="card card-normal">
          <div class="card-block">
            <h4 class="card-title new-request">Submit New Request</h4>
          </div>
          <div class="card-block">
            <form action="{{ route('newRequest') }}" method="post">
              <div class="form-group request-form-group {{ $errors->has('class') ? 'has-error' : '' }}">
                <input class="form-control request-form" type="text" name="class" id="class" value="{{ Request::old('class') }}" placeholder="Class*">
              </div>
              <div class="form-group request-form-group {{ $errors->has('teacher') ? 'has-error' : '' }}">
                <input class="form-control request-form" type="text" name="teacher" id="teacher" value="{{ Request::old('teacher') }}" placeholder="Teacher*">
              </div>
              <div class="form-group request-form-group {{ $errors->has('details') ? 'has-error' : '' }}">
                <input class="form-control request-form" type="text" name="details" id="details" value="{{ Request::old('details') }}" placeholder="Additional Details">
              </div>
              <button type="submit" class="btn btn-request">Submit</button>
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              <span class="hint-alt">* Required</span>
            </form>
          </div>
        </div>
      </div>

      @foreach($newRequests as $newRequest)
        <div class="col-md-6 col-md-offset-3">
          <div class="card card-existing card-normal">

            <div class="card-block">
              <h4 class="card-title existing-request">{{ $newRequest->class }}</h4>
            </div>

            <div class="card-block card-text existing-card-text">
              <span class="soft-card-text">Teacher | </span>
              <span class="teacher-text hard-card-text">{{ $newRequest->teacher }}</span>
              <br />
              <span class="soft-card-text">Student | </span>
              <span class="hard-card-text">{{ $newRequest->user->first_name }}</span>
              <br />
              <span class="soft-card-text">Posted &nbsp;&nbsp;| </span>
              <span class="hard-card-text">{{ $newRequest->created_at }}</span>
              <p>{{ $newRequest->details }}</p>
            </div>

            <div class="card-block interaction-card">
              @if(Auth::user() == $newRequest->user)
                <a class="btn btn-edit edit-request">Edit</a>
                <a href="{{ route('deleteRequest', ['newRequest_id' => $newRequest->id]) }}" class="btn btn-delete">Delete</a>
              @endif
              @if(Auth::user() != $newRequest->user)
                <a href="mailto:{{ $newRequest->user->email }}" class="btn btn-contact">Contact</a>
              @endif
            </div>
          </div>
        </div>
      @endforeach

<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title dark-text">Edit Tutoring Request</h4>
      </div>
      <div class="modal-body dark-text">
        <form action="{{ route('newRequest') }}" method="post">
          <div class="form-group request-form-group {{ $errors->has('class') ? 'has-error' : '' }}">
            <input id="edit-modal-class" class="form-control request-form" type="text" name="class" id="class" value="{{ Request::old('class') }}" placeholder="Class*">
          </div>
          <div class="form-group request-form-group {{ $errors->has('teacher') ? 'has-error' : '' }}">
            <input id="edit-modal-teacher" class="form-control request-form" type="text" name="teacher" id="teacher" value="{{ Request::old('teacher') }}" placeholder="Teacher*">
          </div>
          <div class="form-group request-form-group {{ $errors->has('details') ? 'has-error' : '' }}">
            <input id="edit-modal-details" class="form-control request-form" type="text" name="details" id="details" value="{{ Request::old('details') }}" placeholder="Additional Details">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
