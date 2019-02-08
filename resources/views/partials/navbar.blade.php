      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span></span><strong class="text-primary"></strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Log out-->

<li class="nav-item"><a href="login.html" class="nav-link logout">
    {{--<span class="d-none d-sm-inline-block">Logout</span>--}}

<a class="d-none d-sm-inline-block" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
</form>

    <i class="fa fa-sign-out" style="color:#fff;"></i></a></li>

              </ul>
            </div>
          </div>
        </nav>
      </header>
