<!DOCTYPE html>
<html>
    <head>
      <title>@yield('title')</title>
      <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
      <meta charset="utf-8">

      <!-- Loading Bootstrap -->
      <!-- Latest compiled and minified CSS -->
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->

      <link rel="stylesheet" href="{{ URL::asset('bootstrap-flat/dist/css/vendor/bootstrap/css/bootstrap.min.css') }}">

      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

      <link href="{{ URL::asset('bootstrap-flat/docs/assets/css/demo.css') }}" rel="stylesheet">
       <link href="{{ URL::asset('bootstrap-flat/less/flat-ui.css') }}" rel="stylesheet">
      <link href="{{ URL::asset('bootstrap-flat/docs/assets/css/demo.css') }}"
      rel="stylesheet">
      <link rel="shortcut icon" href="bootstrap-flat/img/favicon.ico">

  </head>

    <body>
      @include('includes.header')

      <div class="container">
        @yield('content')
      </div>

      <script src="{{ URL::asset('bootstrap-flat/js/app.js') }}"></script>

    </body>
</html>
