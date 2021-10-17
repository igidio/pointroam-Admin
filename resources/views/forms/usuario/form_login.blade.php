<script type="text/javascript">
    window.onload=miFuncion;
</script>

<script type="text/javascript">
  show1();
  function show1(){
    document.getElementById('nombreusuarioid').style.display ='none';
    document.getElementById('nombreusuarioid2').style.display = 'none';
  }
  function show2(){
    document.getElementById('nombreusuarioid').style.display = '';
    document.getElementById('nombreusuarioid2').style.display = '';
  }
</script>

<label class="custom-control custom-radio custom-control-inline">
<input type="radio" id="defecto" name="nombre-eleccion" value="defecto" onclick="show1();" onchange="validarPass();" class="custom-control-input"><span class="custom-control-label">Permanecer con el nombre de usuario sugerido: <b> nomape </b></span>
</label>

<label class="custom-control custom-radio custom-control-inline">
<input type="radio" id="eleccion" name="nombre-eleccion" onclick="show2();" onchange="validarPass();" value="eleccion" class="custom-control-input"><span class="custom-control-label">Escribir un nuevo nombre</span>
</label>

<div class="form-group row" id="nombreusuarioid" style="">
<label for="nombreusuarioid" class="col-12 col-sm-3 col-form-label text-sm-right">Nombre de Usuario</label>

<div class="col-12 col-sm-8 col-lg-6" id="nombreusuarioid2" style="">
  <input oninput="validarCaracteres('usuarioN', 20)" id="usuarioN" name="usuarioN" type="text" onkeypress="return validarUsuarioNombree(event)" placeholder="Introduzca su nombre de usuario" autocomplete="off" class="form-control" onkeyup="validarUsuarios()">
</div>
</div>

<div class="form-group row">
<label for="inputPassword" class="col-12 col-sm-3 col-form-label text-sm-right">Contraseña</label>
  <div class="col-12 col-sm-8 col-lg-6">
    <input oninput="validarCaracteres('inputPassword', 15)" name="pass" id="inputPassword" onkeypress="return contrasenasinespacio(event)" type="password" placeholder="Introduzca su contraseña" required="" class="form-control" onkeyup="validarPass()">
  </div>
</div>

<div class="form-group row">
<label for="inputPasswordR" class="col-12 col-sm-3 col-form-label text-sm-right">Repetir Contraseña</label>
  <div class="col-12 col-sm-8 col-lg-6">
    <input oninput="validarCaracteres('inputPasswordR', 15)" name="passr" id="inputPasswordR" onkeypress="return contrasenasinespacio(event)" type="password" placeholder="Vuelva a introduzir su contraseña" required="" class="form-control" onkeyup="validarPass()">
  </div>
</div>

<script type="text/javascript">
validarPass();
function validarPass(){
if (document.getElementById("defecto").checked == true) {
    password();
  }
 else if (document.getElementById("eleccion").checked == true) {
    password();
    validarUsuarios();
    }
}

function password() {
  if ((document.getElementById("inputPassword").value.length >= 6) && (document.getElementById("inputPasswordR").value.length >= 6)) {
    if (document.getElementById("inputPassword").value === document.getElementById("inputPasswordR").value) {
      document.getElementById("confirmar_us").disabled = false;
    }   else  {
        document.getElementById("confirmar_us").disabled = true;
      }
    }
}

function validarUsuarios() {
  if (document.getElementById("usuarioN").value.length > 5) {
    password();
  } else {
    document.getElementById("confirmar_us").disabled = true;
  }
}
</script>

<script type="text/javascript">
show1();
    function show1(){
    document.getElementById('nombreusuarioid').style.display ='none';
    document.getElementById('nombreusuarioid2').style.display = 'none';
    }
    function show2(){
    document.getElementById('nombreusuarioid').style.display = '';
    document.getElementById('nombreusuarioid2').style.display = '';
    }
</script>