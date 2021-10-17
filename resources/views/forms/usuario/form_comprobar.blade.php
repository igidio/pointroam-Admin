<div class="form-group row">
    <label for="usuario" class="col-12 col-sm-3 col-form-label text-sm-right">Nombre de Usuario</label>
    <div class="col-12 col-sm-8 col-lg-6">
        <input onkeypress="return validarUsuarioNombree(event)" name="usuario" id="usuario" type="text" data-parsley-trigger="change" required="" placeholder="Introduzca su nombre de usuario" class="form-control" onkeyup="validarUsuarios()" onchange="validarUsuarios()">
    </div>
</div>

<div class="form-group row">
    <label for="passw" class="col-12 col-sm-3 col-form-label text-sm-right">Contraseña</label>
    <div class="col-12 col-sm-8 col-lg-6">
        <input onkeypress="return contrasenasinespacio(event)" name="passw" id="passw" onkeypress="return contrasenasinespacio(event)" type="password" placeholder="Introduzca su contraseña" required="" class="form-control" onkeyup="validarUsuarios()" onchange="validarUsuarios()">
    </div>
</div>