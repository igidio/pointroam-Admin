<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pointroam Admin</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/iconly/bold.css')}}">
    
    <!-- Simple Datatables -->
    <link rel="stylesheet" href="{{asset('template/vendors/simple-datatables/style.css')}}">
    

    <link rel="stylesheet" href="{{asset('template/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('template/images/favicon.svg')}}" type="image/x-icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

</head>


<body>

    
    
    <div id="app">
        @php
            $isLogged = (is_null(auth()->user()) ? false : true);
            $user = (!$isLogged ? null : auth()->user());
        @endphp
        {{-- <app :boolislogged="{{json_encode($isLogged)}}" :user="{{json_encode($user)}}"></app> --}}
        
        <app></app>        
        {{-- <router-view></router-view> --}}

        {{-- <app :user="{{json_encode($user)}}"></app> --}}
        
        {{-- @if(!empty(auth()->user()->id_personal))
        <h1>Está logeado</h1>
        @else
        <h1>No está logeado</h1>
        <body class="nav-sm footer_fixed">
        @endif --}}
        
        {{-- <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="row">

                    {{-- <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="align-items-center">
                                    <h3>@yield('title')</h3>
                                    <nav aria-label="breadcrumb" class="breadcrumb-header float-lg-start">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Alert</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="{{asset('template/images/faces/1.jpg')}}" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">John Duck</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            {{--    <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="align-items-center">
                                    <h3>@yield('title')</h3>
                                    <nav aria-label="breadcrumb" class="breadcrumb-header float-lg-start">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Alert</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            
                            <div class="col-3">
                                <div class="d-flex align-items-center float-end"  id="dropdownMenuButtonIcon" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer">
                                    <div class="avatar avatar-xl">
                                        <img src="{{asset('template/images/faces/1.jpg')}}" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">John Duck</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                    <div class="ms-3">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonIcon" style="margin: 0px;">
                                    <a class="dropdown-item" href="{{ action('usuarioController@getInfo') }}"><i class="fas fa-user-circle"></i>
                                        Ver información de la cuenta</a>
                                    <a class="dropdown-item" href="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> Cerrar sesión</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}

            {{-- Contenido de la página --}}
            {{--<div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <div class="x_panel">
                            <div class="x_title"><b>@yield('ventana_t')</b></div>
                            @yield('content')                        
                            </div>
                        </div>    
                    </div>
                </section>
                <footer>                
                    <example-component/>
                    <script src="{{mix('js/app.js')}}"></script>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                    href="http://ahmadsaugi.com">A. Saugi</a></p>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
    </div> --}}
    </div>
<script src="{{mix('js/app.js')}}"></script>
<script src="{{asset('template/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('template/js/mazer.js')}}"></script>
</body>
</html>






    {{-- @if(!empty(auth()->user()->id_personal))
    <body class="nav-md footer_fixed">
    @else
    <body class="nav-sm footer_fixed">
    @endif


    <div id="app">
        <div class="container body">
            
            <div class="main_container">
            @if(!empty(auth()->user()->id_personal))
            <div class="col-md-3 left_col">
                @include("layouts.sidebar")
            </div>
            @endif
                
                <!-- top navigation -->
                @include("layouts.topbar")
                <!-- /top navigation -->
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h5>@yield('titulo')</h5>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    
                    @if(session('message'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="fas fa-info-circle"></i> {{session('message')}}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title"><b>@yield('ventana_t')</b></div>
                                @yield('content')                        
                                </div>
                            </div>    
                        </div>
                    </div>

                    <!--DATATABLES EN ESPAÑOL-->
                    <script type="text/javascript">
                    $(document).ready(function() {
                        $('#datatable').DataTable({
                        "language": {
                            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                            }
                        });
                        });
                    </script>
                    <!-- /page content -->
                    <!-- footer content -->
                    @include("layouts.footer")
                    <!-- /footer content -->
                </div>
            </div>

            <!-- jQuery -->      
            <script src="{{asset('gentella/jquery/dist/jquery.min.js')}}"></script>
            <!-- Bootstrap -->
            <script src="{{asset('gentella/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
            <!-- FastClick -->
            <script src="{{asset('gentella/fastclick/lib/fastclick.js')}}"></script>
            <!-- NProgress -->
            <script src="{{asset('gentella/nprogress/nprogress.js')}}"></script>
            <!-- bootstrap-progressbar -->
            <script src="{{asset('gentella/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
            <!-- iCheck -->
            <script src="{{asset('gentella/iCheck/icheck.min.js')}}"></script>
            <!-- PNotify -->
            <script src="{{asset('gentella/pnotify/dist/pnotify.js')}}"></script>
            <script src="{{asset('gentella/pnotify/dist/pnotify.buttons.js')}}"></script>
            <script src="{{asset('gentella/pnotify/dist/pnotify.nonblock.js')}}"></script>
            <script src="{{asset('js/custom.min.js')}}"></script>

            <script src="{{asset('gentella/skycons/skycons.js')}}"></script>

                <script src="{{asset('gentella/datatables.net/js/jquery.dataTables.min.js')}}"></script>
                <script src="{{asset('gentella/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
                <script src="{{asset('gentella/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
                <script src="{{asset('gentella/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
                <script src="{{asset('gentella/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
                <script src="{{asset('gentella/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
                <script src="{{asset('gentella/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>      
        </div> 
    </body>
</html>

<script>
function validarCaracteres(ids, numero){
    var input =  document.getElementById(ids);
    if(input.value.length > numero){
        input.value = input.value.slice(0, numero)
    }
}           
</script>

<script>
function soloLetras(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
        if(key == especiales[i]){
        tecla_especial = true;
        break;
        }
    }

    if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
    }
}
</script>


<script type="text/javascript">
function soloNumeros(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "1234567890";
    especiales = "8-37-39-46";
    //--------------------------
    tecla_especial = false
    for(var i in especiales){
        if(key == especiales[i]){
        tecla_especial = true;
        break;
        }
    }
    //--------------------------
    if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
    }
}
</script>

<script type="text/javascript">
    function contrasenasinespacio(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "1234567890-_abcdefghijklmnopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false;
    for(var i in especiales){
        if(key == especiales[i]){
        tecla_especial = true;
        break;
        }
    }

    if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
    }
    }
</script>

<script type="text/javascript">
    function validarUsuarioNombree(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "1234567890-_abcdefghijklmnopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
        if(key == especiales[i]){
        tecla_especial = true;
        break;
        }
    }

    if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
    }
    }
</script>

<script type="text/javascript">
    function placaAuto(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "1234567890-_abcdefghijklmnopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
        if(key == especiales[i]){
        tecla_especial = true;
        break;
        }
    }

    if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
    }
    }
</script> --}}