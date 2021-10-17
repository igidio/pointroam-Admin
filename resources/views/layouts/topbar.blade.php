<div class="top_nav">
    <div class="nav_menu">
        @if(!empty(auth()->user()->id_personal))
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
        @endif
        
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                @if (!empty(Auth::user()->imagen))
                    <img src="{{ url('/avatar/'.Auth::user()->imagen)}}" alt=""><b>{{'@' . Auth::user()->username}}</b>
                @else
                    <img src="{{asset('images/default_user.png')}}" alt=""><b>{{'@' . Auth::user()->username}}</b>
                @endif
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="{{ action('usuarioController@getInfo') }}"><i class="fas fa-user-circle"></i> Información de perfil</a>
                    <a class="dropdown-item"  href="javascript:;"><i class="fas fa-cog"></i> Configuraciones</a>
                    <a class="dropdown-item" href="login.html" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> Cerrar sesión</a>
                </div>
            </li>
            <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bell"></i>
                <span class="badge bg-green">6</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                        <a class="dropdown-item">
                        <span class="image"><img src="{{ url('/avatar/'.Auth::user()->imagen)}}" alt="Foto de perfil" /></span>
                        <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                        </a>
                    </li>                                                                                      
                    <li class="nav-item">
                        <div class="text-center">
                        <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                        </a>
                        </div>
                    </li>
                </ul>
            </li>
            </ul>
        </nav>
    </div>
</div>