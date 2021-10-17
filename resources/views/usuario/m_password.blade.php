<div class="modal fade" id="editar_c" tabindex="-1" role="dialog" aria-labelledby="editar_c" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">                
                <h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña de acceso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="" action="{{action('usuarioController@modificar_password')}}" method="post" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="numero" class="col-form-label">Introduce la contraseña dos veces en los campos de abajo</label>
                    </div>

                    <div class="form-group">
                        <label for="password-1" class="col-form-label"><i class="fas fa-key"></i> Contraseña</label>
                        <input id="password-1" type="password" onkeypress="return contrasenasinespacio(event)" class="form-control" name="password1" onkeyup="validarInput()" autocomplete="off" required="">
                    </div>

                    <div class="form-group">
                        <label for="password-2" class="col-form-label"><i class="fas fa-key"></i> Repetir contraseña</label>
                        <input id="password-2" type="password" onkeypress="return contrasenasinespacio(event)" class="form-control" name="password2" onkeyup="validarInput()" required="">
                    </div>

                    · La contraseña debe tener más de seis carácteres.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="guardar-cambios-c" name="guardar-cambios-c" value="guardar-cambios-c" disabled="">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
  function validarInput(){
    if ((document.getElementById("password-1").value.length >= 6) && (document.getElementById("password-2").value.length >= 6)) {
      if (document.getElementById("password-1").value === document.getElementById("password-2").value) {
        document.getElementById("guardar-cambios-c").disabled = false;
      }   else  {
          document.getElementById("guardar-cambios-c").disabled = true;
      }
    } else {
        document.getElementById("guardar-cambios-c").disabled = true;
    }
  }
</script>