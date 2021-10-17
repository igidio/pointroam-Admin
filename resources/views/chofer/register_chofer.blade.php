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
		        <form class="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2><span class="step-text">Iniciar sesión</span></h2>
			            <section>
			                <div class="inner">
                                <div class="wizard-header">
									<h3 class="heading">Iniciar sesión</h3>
									<p>Introduzca los datos relacionados con el inicio de seisón.</p>
								</div>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <fieldset>
                                                <span>Nombre de usuario</span>
                                                <input type="text" name="username" id="username" class="form-control" required value="{{ old('username') }}">
                                            </fieldset>
                                        </div>
                                    </div>
                                                                                                    
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <fieldset>
                                                <span>Contraseña</span>
                                                <input type="password" name="password" id="password" class="form-control" required>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-block">Ingresar</button>
                                </form>			                								
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
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <span>Apellido paterno</span>
                                                <input type="text" class="form-control" id="apellido_p" name="apellido_p" placeholder="Apellido paterno" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <span>Apellido Materno</span>
                                                <input type="text" class="form-control" id="apellido_m" name="apellido_m" placeholder="Apellido materno" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <span>Nombres</span>
                                                <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombres" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-9">
                                            <div class="form-group">
                                                <span>CI:</span>
                                                <input type="text" name="ci" id="ci" class="form-control" required>
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
                                                <select name="cid" id="cid" class="form-control">
                                                    <option value="LP">Masculino</option>
                                                    <option value="CB">Femenino</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <span>Fecha de nacimiento</span>
                                                <input type="text" class="form-control" id="fnac" name="fnac" placeholder="DD/MM/YYY" readonly style="background-color: #fff;">
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
                                                <input type="text" name="correo" id="correo" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="correo@mail.com" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <span>Número telefónico</span>
                                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <span>Licencia</span>
                                                <input type="text" class="form-control" id="licencia" name="licencia" placeholder="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <span>Dirección</span>
                                                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección" required>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Datos de usuario</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <span>Nombre de Usuario</span>
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Nombre de usuario" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <span>Contraseña</span>
                                                <input type="password" name="password" id="password" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <span>Repetir contraseña</span>
                                                <input type="password" name="passwordR" id="passwordR" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success btn-block">Registrar</button>
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
								<form action="" method="POST">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <span>Apellido paterno</span>
                                                <input type="text" class="form-control" id="apellido_p" name="apellido_p" placeholder="Apellido paterno" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <span>Apellido Materno</span>
                                                <input type="text" class="form-control" id="apellido_m" name="apellido_m" placeholder="Apellido materno" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <span>Nombres</span>
                                                <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombres" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-9">
                                            <div class="form-group">
                                                <span>CI:</span>
                                                <input type="text" name="ci" id="ci" class="form-control" required>
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
                                                <select name="cid" id="cid" class="form-control">
                                                    <option value="LP">Masculino</option>
                                                    <option value="CB">Femenino</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <span>Fecha de nacimiento</span>
                                                <input type="text" class="form-control" id="fnac2direccion" name="fnac" placeholder="DD/MM/YYY" readonly style="background-color: #fff;">
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
                                                <input type="text" name="correo" id="correo" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="correo@mail.com" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <span>Número telefónico</span>
                                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <span>Dirección</span>
                                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Datos de usuario</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <span>Nombre de Usuario</span>
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Nombre de usuario" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <span>Contraseña</span>
                                                <input type="password" name="password" id="password" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <span>Repetir contraseña</span>
                                                <input type="password" name="passwordR" id="passwordR" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Registrar</button>
                                </form>
								


							</div>
			            </section>
		        	</div>
		        </form>
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