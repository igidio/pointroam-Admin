<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Bootstrap -->
        <link href="{{asset('gentella/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{asset('gentella/nprogress/nprogress.css')}}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{asset('gentella/iCheck/skins/flat/green.css')}}" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="{{asset('gentella/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
        <!-- PNotify -->
        <link href="{{asset('gentella/pnotify/dist/pnotify.css')}}" rel="stylesheet">
        <link href="{{asset('gentella/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">
        <link href="{{asset('gentella/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{asset('css/custom.css')}}" rel="stylesheet">

        <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
        <link href="{{asset('gentella/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('gentella/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('gentella/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">

        <!-- Datepicker -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link href="{{asset('bootstrap_datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
        <link href="{{asset('bootstrap_datepicker/css/bootstrap-datepicker.standalone.css')}}" rel="stylesheet" />
        <link href="{{asset('bootstrap_datepicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet" />
        <link href="{{asset('bootstrap_datepicker/css/bootstrap-datepicker3.standalone.css')}}" rel="stylesheet" />
        <script src="{{asset('bootstrap_datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('bootstrap_datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('bootstrap_datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
    </head>
    @if(!empty(auth()->user()->id_personal))
    <body class="nav-md footer_fixed">
    @else
    <body class="nav-sm footer_fixed">
    @endif
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
</script>