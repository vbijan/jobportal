<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a class="navbar-brand" href="#">Subkura Job Portal</a> -->
       <!-- <a href=""><img src="{{URL::asset('image/sklogo.png')}}"></a> -->

    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('/') }}">Home</a></li>
      @guest
      <li><a href="{{ route('login') }}">Login</a></li>
      <li><a href="/job_seeker_register">Job Seeker Signup</a></li>
      <li><a href="/employer_register">Employer Signup</a></li>
      @else
      <!-- <li><a href="{{ route('login') }}">Login</a></li> 
      <li> <a href="{{ route('register') }}">Register</a></li>  -->
     
                   
    </ul>
   
    <ul class="nav navbar-nav">
     <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </li>
    </ul>
    @endguest
     <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
  </div>
</nav>