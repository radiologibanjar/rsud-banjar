<nav class="main-header navbar navbar-expand">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-primary" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto align-items-center">
      <li class="nav-item mr-2">
        <button class="theme-toggle" id="themeToggle">
          <i id="themeIcon" class="fas fa-moon"></i>
        </button>
      </li>

      <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-sm btn-outline-danger">
            <i class="fas fa-sign-out-alt mr-1"></i> Logout
          </button>
        </form>
      </li>
    </ul>
</nav>