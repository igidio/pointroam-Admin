<div class="left_col scroll-view">
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
            <ul class="nav side-menu">
                <li><a href="{{ action('choferesController@listar') }}"><i class="fas fa-id-card-alt"></i> Chóferes</a></li>
            </ul>
            <ul class="nav side-menu">
                <li><a href="{{ action('camionesController@listar') }}"><i class="fas fa-truck"></i> Vehículos registrados</a></li>
            </ul>
            <ul class="nav side-menu">
                <li><a href="javascript:void(0)"><i class="fas fa-truck"></i> Ver registros de transporte</a></li>
            </ul>
        
    </div>
    <div class="menu_section">
        <h3>Puntos y rutas</h3>
        <ul class="nav side-menu">
            <li><a href="{{ action('destinosController@listar') }}"><i class="fas fa-truck"></i> Ver destinos registrados</a></li>
        </ul>
            <!--<li>
                <a><i class="fas fa-map-marker-alt"></i> Destinos <i class="fas fa-chevron-down" style="float: right;"></i></a>
                <ul class="nav child_menu" style="">
                    <li><a href="#level1_1">Level One</a></li>
                    <li>
                    <a>Level One<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                        <li class="sub_menu"><a href="level2.html">Level Two</a></li>
                        <li><a href="#level2_1">Level Two</a></li>
                        <li><a href="#level2_2">Level Two</a></li>
                    </ul>
                    </li>
                    <li><a href="#level1_2">Level One</a></li>
                </ul>
            </li>-->
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
</div>