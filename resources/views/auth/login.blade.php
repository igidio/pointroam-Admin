<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio de sesión</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
    <link href="{{asset('gentella/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('regform/css/opensans-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('regform/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('regform/css/style.css')}}"/>
    <!-- Datepicker -->
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link href="{{asset('bootstrap_datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
    <link href="{{asset('bootstrap_datepicker/css/bootstrap-datepicker.standalone.css')}}" rel="stylesheet" />
    <link href="{{asset('bootstrap_datepicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet" />
    <link href="{{asset('bootstrap_datepicker/css/bootstrap-datepicker3.standalone.css')}}" rel="stylesheet" />    
    
</head>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <div class="form-register">
                <div id="form-total">
                    @if(session('message'))
                        <div class="alert alert-warning alert-dismissible" role="alert">{{session('message')}}</div>
                    @endif
                    <!-- SECTION 1 -->
                    <h2><span class="step-text">Iniciar sesión</span></h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Iniciar sesión</h3>
                                <p>Introduzca los datos relacionados con el inicio de seisón.</p>
                            </div>
                            <form action="{{ route('login') }}" method="POST" autocomplete="off">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12">
                                        <span>Nombre de usuario</span>
                                        <input onkeyup="validarIngreso()" oninput="validarCaracteres('username', 20)" onkeypress="return validarUsuarioNombree(event)" type="text" name="username" id="username" class="form-control" required value="{{ old('username') }}">
                                    </div>
                                </div>
                                                                                                
                                <div class="row">
                                    <div class="col-12">
                                        <span>Contraseña</span>
                                        <input onkeyup="validarIngreso()" oninput="validarCaracteres('password', 20)" onkeypress="return contrasenasinespacio(event)" type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success btn-block" id="ingresar">Ingresar</button>
                                    </div>
                                </div>
                            </form>
                            <script type="text/javascript">
                            validarIngreso();
                            function validarIngreso() {
                                if (
                                    (document.getElementById('username').value.length > 0) &&
                                    (document.getElementById('password').value.length > 6)
                                ) {
                                        document.getElementById("ingresar").disabled = false;
                                    } else {
                                        document.getElementById('ingresar').disabled = true;
                                    }
                                }
                            </script>                								
                        </div>                            
                    </section>
                    

                    <!-- SECTION 2 -->
                    
                    
                    <h2><span class="step-text">Registrarse como cliente</span></h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Registrarse como cliente</h3>
                                <p>Desde este formulario podrás introducir los datos necesarios para luego ingresar como cliente.</p>
                            </div>
                            <form action="{{ action('loginController@registrar_cliente') }}" method="POST"  autocomplete="off">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <span>Apellido paterno</span>
                                            <input onkeypress="return soloLetras(event)" oninput="validarCaracteres('apellido_p', 20)" style="text-transform:capitalize" onkeyup="validarCliente()" type="text" class="form-control" id="apellido_p" name="apellido_p" placeholder="Apellido paterno" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <span>Apellido Materno</span>
                                            <input onkeypress="return soloLetras(event)" oninput="validarCaracteres('apellido_m', 20)" style="text-transform:capitalize" onkeyup="validarCliente()" type="text" class="form-control" id="apellido_m" name="apellido_m" placeholder="Apellido materno" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Nombres</span>
                                            <input onkeypress="return soloLetras(event)" oninput="validarCaracteres('nombres', 30)" style="text-transform:capitalize" onkeyup="validarCliente()" type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombres" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <div class="form-group">
                                            <span>CI:</span>
                                            <input onkeypress="return soloNumeros(event)" oninput="validarCaracteres('ci', 10)" onkeyup="validarCliente()" type="text" name="ci" id="ci" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <span>Depto.</span>
                                            
                                            <select name="cid" id="cid" class="form-control">
                                                <option value="LP">LP</option>
                                                <option value="CB">CB</option>
                                                <option value="SC">SC</option>
                                                <option value="CH">CH</option>
                                                <option value="OR">OR</option>
                                                <option value="PT">PT</option>
                                                <option value="TJ">TJ</option>
                                                <option value="BE">BE</option>
                                                <option value="PD">PD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <span>Género</span>
                                            <select name="genero" id="genero" class="form-control">
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <span>Fecha de nacimiento</span>
                                            <input onchange="validarCliente()" type="text" class="form-control" id="fnac" name="fnac" placeholder="YYYY-MM-DD" readonly style="background-color: #fff;">
                                        </div>
                                        <?php $yy = date('yy') - 18;?>

                                        <script>
                                        $('#fnac').datepicker({
                                            format: "yyyy-mm-dd",
                                            language: "es",
                                            startDate: new Date('1900-01-01'),
                                            endDate: new Date('<?php echo date($yy.'-m-d'); ?>'),
                                            autoclose: true
                                            });
                                        </script>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Correo electrónico</span>
                                            <input oninput="validarCaracteres('correo', 30)" onkeyup="validarCliente()" type="text" name="correo" id="correo" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="correo@mail.com" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Número telefónico</span>
                                            <input onkeypress="return soloNumeros(event)" oninput="validarCaracteres('telefono', 8)" onkeyup="validarCliente()" type="text" class="form-control" id="telefono" name="telefono" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Dirección</span>
                                            <input oninput="validarCaracteres('direccion', 50)" onkeyup="validarCliente()" style="text-transform:capitalize" type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección" required>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p>Datos de usuario</p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Nombre de Usuario</span>
                                            <input oninput="validarCaracteres('username1', 20)" onkeypress="return validarUsuarioNombree(event)" onkeyup="validarCliente()" type="text" name="username" id="username1" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Contraseña</span>
                                            <input oninput="validarCaracteres('password1', 20)" onkeypress="return contrasenasinespacio(event)" onkeyup="validarCliente()" type="password" name="password" id="password1" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Repetir contraseña</span>
                                            <input oninput="validarCaracteres('password1R', 20)" onkeyup="validarCliente()" onkeypress="return contrasenasinespacio(event)" type="password" name="passwordR" id="password1R" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block" id="registrar1">Registrar</button>
                                
                                <script type="text/javascript">
                                validarCliente();
                                function validarCliente() {
                                    if ((document.getElementById('apellido_p').value.length > 0) &&
                                    (document.getElementById('apellido_m').value.length > 0) &&
                                    (document.getElementById('nombres').value.length > 0) &&
                                    (document.getElementById('ci').value.length > 0) &&
                                    (document.getElementById('fnac').value.length > 0) &&
                                    (document.getElementById('telefono').value.length > 0) &&
                                    (document.getElementById('direccion').value.length > 0) &&
                                    (document.getElementById('correo').value.length > 0) &&
                                    (document.getElementById('username1').value.length > 0) &&
                                    (document.getElementById('password1').value.length > 6) &&
                                    (document.getElementById('password1R').value.length > 6)
                                ) {
                                    if (document.getElementById("password1").value === document.getElementById("password1R").value) {
                                        document.getElementById("registrar1").disabled = false;
                                    }   else  {
                                        document.getElementById("registrar1").disabled = true;
                                    }
                                    } else {
                                    document.getElementById('registrar1').disabled = true;
                                    }
                                }
                                </script>                                    
                            </form>


                        </div>
                    </section>
                    <!-- SECTION 3 -->
                    <h2><span class="step-text">Registrarse como chófer</span></h2>
                    <section>
                        <div class="inner">

                            <div class="wizard-header">
                                <h3 class="heading">Registrarse como chófer</h3>
                                <p>Desde este formulario podrás introducir los datos necesarios para luego ingresar como chófer.</p>
                            </div>
                            <form action="{{ action('loginController@registrar_chofer') }}" method="POST" autocomplete="off">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <span>Apellido paterno</span>
                                            <input onkeypress="return soloLetras(event)" oninput="validarCaracteres('apellido_p2', 20)" style="text-transform:capitalize" onkeyup="validarChofer()" type="text" class="form-control" id="apellido_p2" name="apellido_p" placeholder="Apellido paterno" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <span>Apellido Materno</span>
                                            <input onkeypress="return soloLetras(event)" oninput="validarCaracteres('apellido_m2', 20)" style="text-transform:capitalize" onkeyup="validarChofer()" type="text" class="form-control" id="apellido_m2" name="apellido_m" placeholder="Apellido materno" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Nombres</span>
                                            <input onkeypress="return soloLetras(event)" oninput="validarCaracteres('nombres2', 30)" style="text-transform:capitalize" onkeyup="validarChofer()" type="text" name="nombres" id="nombres2" class="form-control" placeholder="Nombres" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <div class="form-group">
                                            <span>CI:</span>
                                            <input onkeypress="return soloNumeros(event)" oninput="validarCaracteres('ci', 10)" onkeyup="validarChofer()" type="text" name="ci" id="ci2" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <span>Depto.</span>
                                            
                                            <select name="cid" id="cid2" class="form-control">
                                                <option value="LP">LP</option>
                                                <option value="CB">CB</option>
                                                <option value="SC">SC</option>
                                                <option value="CH">CH</option>
                                                <option value="OR">OR</option>
                                                <option value="PT">PT</option>
                                                <option value="TJ">TJ</option>
                                                <option value="BE">BE</option>
                                                <option value="PD">PD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <span>Género</span>
                                            <select name="genero" id="genero2" class="form-control">
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <span>Fecha de nacimiento</span>
                                            <input onchange="validarChofer()" type="text" class="form-control" id="fnac2" name="fnac" placeholder="DD/MM/YYY" readonly style="background-color: #fff;">
                                        </div>
                                        <?php $yy = date('yy') - 18;?>

                                        <script>
                                        $('#fnac2').datepicker({
                                            format: "yyyy-mm-dd",
                                            language: "es",
                                            startDate: new Date('1900-01-01'),
                                            endDate: new Date('<?php echo date($yy.'-m-d'); ?>'),
                                            autoclose: true
                                            });
                                        </script>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Correo electrónico</span>
                                            <input oninput="validarCaracteres('correo2', 30)" onkeyup="validarChofer()" type="text" name="correo" id="correo2" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="correo@mail.com" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <span>Número telefónico</span>
                                            <input onkeypress="return soloNumeros(event)" oninput="validarCaracteres('telefono2', 8)" onkeyup="validarChofer()" type="text" class="form-control" id="telefono2" name="telefono" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <span>Dirección</span>
                                            <input oninput="validarCaracteres('direccion2', 50)" onkeyup="validarChofer()" style="text-transform:capitalize" type="text" class="form-control" id="direccion2" name="direccion" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Licencia</span>
                                            <input onkeypress="return soloNumeros(event)" oninput="validarCaracteres('licencia2', 10)" onkeyup="validarChofer()" type="text" class="form-control" id="licencia2" name="licencia" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr>
                                <p>Datos de usuario</p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Nombre de Usuario</span>
                                            <input oninput="validarCaracteres('username2', 20)" onkeyup="validarChofer()" onkeypress="return validarUsuarioNombree(event)" type="text" name="username" id="username2" class="form-control" placeholder="Nombre de usuario" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Contraseña</span>
                                            <input oninput="validarCaracteres('password2', 20)" onkeyup="validarChofer()" onkeypress="return contrasenasinespacio(event)" type="password" name="password" id="password2" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span>Repetir contraseña</span>
                                            <input oninput="validarCaracteres('password2R', 20)" onkeyup="validarChofer()" onkeypress="return contrasenasinespacio(event)" type="password" name="passwordR" id="password2R" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block" id="registrar2">Registrar</button>
                            </form>
                            
                            <script type="text/javascript">
                                validarChofer();
                                function validarChofer() {
                                    if ((document.getElementById('apellido_p2').value.length > 0) &&
                                    (document.getElementById('apellido_m2').value.length > 0) &&
                                    (document.getElementById('nombres2').value.length > 0) &&
                                    (document.getElementById('ci2').value.length > 0) &&
                                    (document.getElementById('fnac2').value.length > 0) &&
                                    (document.getElementById('telefono2').value.length > 0) &&
                                    (document.getElementById('direccion2').value.length > 0) &&
                                    (document.getElementById('licencia2').value.length > 0) &&
                                    (document.getElementById('correo2').value.length > 0) &&
                                    (document.getElementById('username2').value.length > 0) &&
                                    (document.getElementById('password2').value.length > 6) &&
                                    (document.getElementById('password2R').value.length > 6)
                                ) {
                                    if (document.getElementById("password2").value === document.getElementById("password2R").value) {
                                        document.getElementById("registrar2").disabled = false;
                                    }   else  {
                                        document.getElementById("registrar2").disabled = true;
                                    }
                                    } else {
                                    document.getElementById('registrar2').disabled = true;
                                    }
                                }
                            </script> 

                        </div>
                    </section>
                </div>

			</div>
		</div>
	</div>
    <script src="{{asset('regform/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('regform/js/jquery.steps.js')}}"></script>
	<script src="{{asset('regform/js/main.js')}}"></script>
    <script src="{{asset('bootstrap_datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('bootstrap_datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('bootstrap_datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
    
    

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<script>
ocultar();
function ocultar() {
    var x = document.getElementByClassName("actions");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}</script>

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
		letras = "1234567890-_ABCDEFGHIJKLMNOPQRSTUVWXYZÑ";
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