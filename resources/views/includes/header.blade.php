<header>
  <div class="row demo-row">
          <div class="col-xs-12">
            <nav class="navbar navbar-inverse navbar-lg" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                  <span class="sr-only">Toggle navigation</span>
                </button>
                <a class="navbar-brand" href="{{ URL::route('home') }}">VolunTutor</a>
              </div>
              <div class="collapse navbar-collapse" id="navbar-collapse-01">
                @if(Auth::check())
                  <p class="navbar-text navbar-right">
                    {{ $newRequest->user->first_name }} {{ $newRequest->user->last_name }} | <a href="{{ URL::route('signout') }}" class="navbar-link">Sign Out</a>
                  </p>
                @else
                  <p class="navbar-text navbar-right">
                     <a href="{{ URL::route('signup') }}" type="navbar-link">Sign Up</a> &nbsp;|&nbsp;
                     <a href="{{ URL::route('signin') }}" type="navbar-link">Sign In</a>
                     </a>
                  </p>
                @endif
              </span>
            </div>
            </nav><!-- /navbar -->
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
