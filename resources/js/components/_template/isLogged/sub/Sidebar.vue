<template>
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <router-link :to="{ name: 'Dashboard' }"><img src="/template/images/logo/logo.png" alt="Logo" srcset=""></router-link>
                        <a href=""></a>
                        <!-- <a href="{{ action('HomeController@index') }}"><img src="{{asset('template/images/logo/logo.png')}}" alt="Logo" srcset=""></a> -->
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <router-link tag="li" :to="{ name: 'Chat' }" class="sidebar-item" active-class="sidebar-item active">
                        <a class='sidebar-link'>
                            <i class="fas fa-id-card-alt"></i>
                            <span>Chat</span>
                        </a>
                    </router-link>

                    <li class="sidebar-title">Transporte</li>
                    
                    <router-link tag="li" :to="{ name: 'DriversIndex' }" class="sidebar-item" active-class="sidebar-item active">
                        <a class='sidebar-link'>
                            <i class="fas fa-id-card-alt"></i>
                            <span>Chóferes</span>
                        </a>
                    </router-link>


                    <li class="sidebar-item">
                        <router-link tag="li" :to="{ name: 'Vehicles' }" class="sidebar-item" active-class="sidebar-item active">
                            <a class='sidebar-link'>
                                <i class="fas fa-truck"></i>
                                <span>Vehículos registrados</span>
                            </a>
                        </router-link>
                    </li>
                    <!-- <li class="sidebar-item">
                        <a href="javascript:void(0)" class='sidebar-link'>
                            <i class="fas fa-truck"></i>
                            <span>Ver registros de transporte</span>
                        </a>
                    </li> -->
                    
                    <!-- <li class="sidebar-title">Puntos y rutas</li>
                    <li class="sidebar-item">
                        <a href="" class='sidebar-link'>
                            <i class="fas fa-truck"></i>
                            <span>Ver destinos registrados</span>
                        </a> -->
                        <!-- <a href="{{ action('destinosController@listar') }}" class='sidebar-link'>
                            <i class="fas fa-truck"></i>
                            <span>Ver destinos registrados</span>
                        </a> -->
                    <!-- </li>
                    <li class="sidebar-item">
                        <a href="javascript:void(0)" class='sidebar-link'>
                            <i class="fas fa-road"></i>
                            <span>Ver rutas</span>
                        </a>
                    </li> -->

                    <!-- <li class="sidebar-title">Personal</li>
                    <li class="sidebar-item"> -->
                        <!-- <a href="{{ action('personalController@listar') }}" class='sidebar-link'>
                            <i class="fas fa-truck"></i>
                            <span>Ver miembros del personal</span>
                        </a> -->
                        <!-- <a href="" class='sidebar-link'>
                            <i class="fas fa-truck"></i>
                            <span>Ver miembros del personal</span>
                        </a>
                    </li> -->
                    <!-- <li class="sidebar-item"> -->
                        <!-- <a href="{{ action('personalController@step1_c') }}" class='sidebar-link'>
                            <i class="fas fa-road"></i>
                            <span>Agregar usuario</span>
                        </a> -->
                        <!-- <a href="" class='sidebar-link'>
                            <i class="fas fa-road"></i>
                            <span>Agregar usuario</span>
                        </a>
                    </li> -->
                    
                    <!-- <li class="sidebar-title">Información adicional</li>
                    <li class="sidebar-item"> -->
                        <!-- <a href="{{ action('pedidosController@listar') }}" class='sidebar-link'>
                            <i class="fas fa-road"></i>
                            <span>Ver Pedidos</span>
                        </a> -->
                        <!-- <a href="" class='sidebar-link'>
                            <i class="fas fa-road"></i>
                            <span>Ver Pedidos</span>
                        </a>
                    </li> -->
                    <!-- <li class="sidebar-item"> -->
                        <!-- <a href="{{ action('pedidosController@listar') }}" class='sidebar-link'>
                            <i class="fas fa-road"></i>
                            <span>Ver Datos estadísticos</span>
                        </a> -->
                        <!-- <a href="" class='sidebar-link'>
                            <i class="fas fa-road"></i>
                            <span>Ver Datos estadísticos</span>
                        </a>
                    </li> -->

                    <!-- <li class="sidebar-title">Clientes</li>
                    <li class="sidebar-item"> -->
                        <!-- <a href="{{ action('pedidosController@listar') }}" class='sidebar-link'>
                            <i class="fas fa-road"></i>
                            <span>Ver Pedidos</span>
                        </a> -->
                        <!-- <a href="" class='sidebar-link'>
                            <i class="fas fa-road"></i>
                            <span>Ver Pedidos</span>
                        </a>
                    </li> -->

                    
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
</template>

