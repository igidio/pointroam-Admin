{{-- <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="{{ action('HomeController@index') }}" class="site_title"><span>TRANSPORTES</span></a>
    </div>
    <div class="clearfix"></div>
    <!-- menu profile quick info -->

    <!-- /menu profile quick info -->
    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
        <h3>Transporte</h3>
        
    </div>
    <div class="menu_section">
        <h3>Puntos y rutas</h3>
        <ul class="nav side-menu">
            <li><a href="javascript:void(0)"><i class="fas fa-road"></i> Ver rutas</a></li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Personal</h3>
        <ul class="nav side-menu">
            <li><a href="{{ action('personalController@listar') }}"><i class="fas fa-truck"></i>  Ver miembros del personal</a></li>
            
        </ul>
        <ul class="nav side-menu">
            <li><a href="{{ action('personalController@step1_c') }}"><i class="fas fa-road"></i> Agregar usuario</a></li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Estadísticas</h3>
        <ul class="nav side-menu">
            <li><a href="{{ action('estadisticasController@getInfo') }}"><i class="fas fa-road"></i> Ver datos estadísticos</a></li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Pedidos</h3>
        <ul class="nav side-menu">
            <li><a href="{{ action('pedidosController@listar') }}"><i class="fas fa-road"></i> Ver pedidos</a></li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Clientes</h3>
        <ul class="nav side-menu">
            <li><a href="{{ action('clientesController@listar') }}"><i class="fas fa-road"></i> Ver pedidos</a></li>
        </ul>
    </div>

</div>
    <!-- /sidebar menu -->
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" href="login.html" data-original-title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div> --}}


<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ action('HomeController@index') }}"><img src="{{asset('template/images/logo/logo.png')}}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Transporte</li>

                <li class="sidebar-item active ">
                    <a href="{{ action('choferesController@listar') }}" class='sidebar-link'>
                        <i class="fas fa-id-card-alt"></i>
                        <span>Chóferes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ action('VehiclesController@listar') }}" class='sidebar-link'>
                        <i class="fas fa-truck"></i>
                        <span>Vehículos registrados</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="javascript:void(0)" class='sidebar-link'>
                        <i class="fas fa-truck"></i>
                        <span>Ver registros de transporte</span>
                    </a>
                </li>
                
                <li class="sidebar-title">Puntos y rutas</li>
                <li class="sidebar-item">
                    <a href="{{ action('destinosController@listar') }}" class='sidebar-link'>
                        <i class="fas fa-truck"></i>
                        <span>Ver destinos registrados</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="javascript:void(0)" class='sidebar-link'>
                        <i class="fas fa-road"></i>
                        <span>Ver rutas</span>
                    </a>
                </li>

                <li class="sidebar-title">Personal</li>
                <li class="sidebar-item">
                    <a href="{{ action('personalController@listar') }}" class='sidebar-link'>
                        <i class="fas fa-truck"></i>
                        <span>Ver miembros del personal</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ action('personalController@step1_c') }}" class='sidebar-link'>
                        <i class="fas fa-road"></i>
                        <span>Agregar usuario</span>
                    </a>
                </li>
                
                <li class="sidebar-title">Información adicional</li>
                <li class="sidebar-item">
                    <a href="{{ action('pedidosController@listar') }}" class='sidebar-link'>
                        <i class="fas fa-road"></i>
                        <span>Ver Pedidos</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ action('pedidosController@listar') }}" class='sidebar-link'>
                        <i class="fas fa-road"></i>
                        <span>Ver Datos estadísticos</span>
                    </a>
                </li>

                <li class="sidebar-title">Clientes</li>
                <li class="sidebar-item">
                    <a href="{{ action('pedidosController@listar') }}" class='sidebar-link'>
                        <i class="fas fa-road"></i>
                        <span>Ver Pedidos</span>
                    </a>
                </li>

                
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>