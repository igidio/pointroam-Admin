<div class="modal fade" id="editar_u" tabindex="-1" role="dialog" aria-labelledby="editar_u" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar nombre de usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="form-group">
              <form class="" action="{{ action('usuarioController@modificar_username') }}" method="post" id="form-crear">
                {{ csrf_field() }}
                
                <label for="nombre_us" class="col-form-label"><i class="fas fa-user"></i> Nombre de Usuario</label>
                <input id="nombre_us" onkeypress="return validarUsuarioNombree(event)" type="text" class="form-control" onkeyup="validarUsuarios()" name="nombre_us" required="" autocomplete="off" value="{{ Auth::user()->nombreUsuario }}">
              
                <script type="text/javascript">
                var input =  document.getElementById('nombre_us');
                input.addEventListener('input',function(){
                if (this.value.length > 20)
                  this.value = this.value.slice(0,20);
                })
                </script>
              </div>
            </div>
          </div>

          <script type="text/javascript">
            function validarUsuarios() {
              if (document.getElementById("nombre_us").value.length > 5) {
                document.getElementById("guardar-cambios-u").disabled = false;
              } else {
                document.getElementById("guardar-cambios-u").disabled = true;
              }

              if (document.getElementById("nombre_us").value === "{{ Auth::user()->nombreUsuario }}") {
                document.getElementById("guardar-cambios-u").disabled = true;
              }
            }
          </script>

          <label class="float-right">Caracteres mínimos: 6 | Caracteres máximos: 20</label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" id="guardar-cambios-u" name="guardar-cambios-u" value="guardar-cambios-u" disabled="">Guardar cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>