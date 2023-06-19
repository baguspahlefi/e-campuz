  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('home')}}" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @guest
        <li class="nav-item">
            <a href="{{route('login')}}" class="nav-link">Login</a>
        </li>
        <li class="nav-item">
            <a href="{{route('register')}}" class="nav-link">Register</a>
        </li>
        @endguest
        @auth
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <li class="nav-item">
                <button class="btn btn-outline-warning" type="submit">Logout</button>
            </li>
        </form>
        @endauth
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->