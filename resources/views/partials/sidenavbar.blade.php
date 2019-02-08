<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
                <h2 class="h5">Jhoan Borges</h2><span>Web Developer</span>
            </div>
            <div class="sidenav-header-logo"><a href="{{route('clientes.index')}}" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <div class="main-menu">
            <h5 class="sidenav-heading">Menú</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li><a href="{{route('clientes.index')}}"> <i class="icon-home"></i>Inicio                             </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Clientes</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{route('clientes.index')}}">Listado</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>
