@if(count($errors) > 0)

  <div class="col-md-6 col-md-offset-3">
  <div class="card card-normal">
  <div class="card-block">
    <h4 class="card-title error">Errors</h4>
  </div>
  <div class="card-block card-text existing-card-text">
    <div>
        <center>
          @foreach($errors->all() as $error)
              {{ $error }} <br />
          @endforeach
        </center>
    </div>
  </div>
  </div>
  </div>
</div>
@endif

@if(Session::has('message'))

  <div class="col-md-6 col-md-offset-3">
  <div class="card card-normal">
  <div class="card-block">
      <h4 class="card-title success">Success!</h4>
  </div>
  <div class="card-block card-text existing-card-text">
    <div>
        <center>
            Your tutoring request has been successfully created and posted to the dashboard. We hope to help you as soon as possible!
        </center>
    </div>
  </div>
  </div>
  </div>
@endif

@if(Session::has('deleteMessage'))

  <div class="col-md-6 col-md-offset-3">
  <div class="card card-normal">
  <div class="card-block">
      <h4 class="card-title success">Successfully Deleted!</h4>
  </div>
  <div class="card-block card-text existing-card-text">
    <div>
        <center>
            Your tutoring request has been successfully deleted.
        </center>
    </div>
  </div>
  </div>
  </div>
@endif
