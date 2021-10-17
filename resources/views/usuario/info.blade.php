@extends('layouts.app')

@section('content')

@include('usuario.m_subirfoto')
@include('usuario.m_editarpersonal')
@include('usuario.m_username')
@include('usuario.m_password')

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>User Report <small>Activity report</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-3 col-sm-3  profile_left">
                    <!--Imagen-->
                    @include('usuario.foto')

                    <h3>{{$nombres}} {{$apellido_p}} {{$apellido_m}}</h3>
                    <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> La Paz, Bolivia</li>
                        <li><i class="fa fa-briefcase user-profile-icon"></i> {{$cargo}}</li>
                    </ul>
                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#editar">Editar Información personal</a>
                    <br>            
                </div>
                <div class="col-md-9 col-sm-9">
               
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" aria-selected="true">Información personal</a></li>
                            <li role="presentation"><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Información de usuario</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">                    
                            <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">
                       
                                <div class="card-body border-top">
                                    <h3 class="font-16 mb-3">Información de contacto</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="fas fa-home mr-2"></i><b>Dirección: </b>{{$direccion}}</li>
                                            <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><b>Correo: </b>{{Auth::user()->email}}</li>
                                            @if (!empty(auth()->user()->id_chofer))
                                            <li class="mb-2"><i class="fas fa-address-card mr-2"></i><b>Licencia: </b>{{$licencia}}</li>
                                            @endif
                                            <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i><b>Teléfono: </b>{{$telefono}}</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16 mb-3">Información adicional</h3>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-venus-mars"></i> <b>Género: </b>{{$genero}}</li>
                                                <li class="mb-0"><i class="fas fa-address-card mr-2"></i><b>CI: </b>{{$ci}} {{$cid}}</li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <ul class="list-unstyled mb-0">
                                                @php
                                                function calculaedad($fechanacimiento){
                                                list($ano,$mes,$dia) = explode("-",$fechanacimiento);
                                                $ano_diferencia  = date("Y") - $ano;
                                                $mes_diferencia = date("m") - $mes;
                                                $dia_diferencia   = date("d") - $dia;
                                                if ($dia_diferencia < 0 || $mes_diferencia < 0) {
                                                $ano_diferencia--;}
                                                return $ano_diferencia;
                                                }
                                                @endphp
                                                <li class="mb-2"><i class="fas fa-birthday-cake mr-2"></i><b>F. de Nacimiento: </b>{{$fnac}}</li>                 
                                                <li class="mb-0"><i class="fas fa-clock mr-2"></i><b>Edad: </b><?php if (!empty($fnac)) {echo calculaedad($fnac) . ' años';} else {echo '<i>N / A</i>';} ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                <div class="card-body border-top">
                                    <h3 class="font-16 mb-3">Información de usuario</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="fas fa-user mr-2"></i><b>Nombre de Usuario: </b>{{Auth::user()->username}}</li>
                                            <li class="mb-2"><i class="far fa-calendar mr-2"></i><b>Fecha de Registro: </b>{{substr(Auth::user()->created_at, 0, 10)}}</li>                                            
                                            @php
                                                function difdias($diaregistro){
                                                    $date1 = new DateTime($diaregistro);
                                                    $date2 = new DateTime(date("Y-m-d"));
                                                    $diff = $date1->diff($date2);
                                                    $diferencia = $diff->days;
                                                    return $diferencia;
                                                }
                                            @endphp 
                                            <li class="mb-0"><i class="fas fa-clock mr-2"></i><b>Total de días en el sistema: </b><?php if (!empty(Auth::user()->created_at)) { echo difdias(substr(Auth::user()->created_at, 0, 10)); if (difdias(substr(Auth::user()->created_at, 0, 10)) == 1) { echo ' día';} else {echo ' días';} } else {echo '<i>N / A</i>';} ?></li>
                                            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#editar_u">Cambiar nombre de usuario</a>
                                            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#editar_c">Cambiar contraseña</a>
                                        </ul>
                                    </div>
                                </div>                  
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
