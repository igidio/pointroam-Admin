<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true" style="focus:false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar información de usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <form class="" action=" {{action('usuarioController@modificar_infopersonal')}} " method="post">
        <div class="modal-body">
          {{ csrf_field() }}

          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label for="nombres" class="col-form-label"><i class="fas fa-user"></i> Nombres</label>
                <input id="nombres" type="text" onkeypress="return soloLetras(event)" style="text-transform:capitalize" class="form-control" value="{{$nombres}}" name="nombre" required onkeyup="validarUsuarioPerfil()" autocomplete="off">
              </div>
            </div>
          </div>
          <script type="text/javascript">
            var input =  document.getElementById('nombres');
            input.addEventListener('input',function(){
            if (this.value.length > 50)
            this.value = this.value.slice(0,50);
            })
          </script>

          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="apellido_p" class="col-form-label"><i class="fas fa-user"></i> Apellido Paterno</label>
                <input id="apellido_p" type="text" onkeypress="return soloLetras(event)" style="text-transform:capitalize" class="form-control" value="{{$apellido_p /*or ''*/}}" name="apellido_p" required onkeyup="validarUsuarioPerfil()" autocomplete="off">
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="apellido_m" class="col-form-label"><i class="fas fa-user"></i> Apellido Materno</label>
                <input id="apellido_m" type="text" onkeypress="return soloLetras(event)" style="text-transform:capitalize" class="form-control" value="{{$apellido_m /*or ''*/}}" name="apellido_m" required onkeyup="validarUsuarioPerfil()" autocomplete="off">
              </div>
            </div>
          </div>
          <script type="text/javascript">
            var input =  document.getElementById('apellido_p');
            input.addEventListener('input',function(){
            if (this.value.length > 30)
            this.value = this.value.slice(0,30);
            })

            var input =  document.getElementById('apellido_m');
            input.addEventListener('input',function(){
              if (this.value.length > 30)
              this.value = this.value.slice(0,30);
              })
          </script>
          @if(empty(auth()->user()->id_chofer))
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label for="direccion" class="col-form-label"><i class="fas fa-home"></i> Dirección</label>
                <input onkeyup="validarUsuarioPerfil()" id="direccion" type="text" class="form-control" style="text-transform:capitalize" value="{{$direccion /*or ''*/}}" name="direccion" onkeyup="validarUsuarioPerfil()">
              </div>
            </div>
          </div>
          <script type="text/javascript">
            var input =  document.getElementById('direccion');
            input.addEventListener('input',function(){
              if (this.value.length > 120)
              this.value = this.value.slice(0,120);
            })
          </script>
          @else
          <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
              <div class="form-group">
                <label for="direccion" class="col-form-label"><i class="fas fa-home"></i> Dirección</label>
                <input onkeyup="validarUsuarioPerfil()" id="direccion" type="text" class="form-control" style="text-transform:capitalize" value="{{$direccion /*or ''*/}}" name="direccion">
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
              <div class="form-group">
                <label for="licencia" class="col-form-label"><i class="fas fa-home"></i> Licencia</label>
                <input onkeypress="return soloNumeros(event)" onkeyup="validarUsuarioPerfil()" id="licencia" type="text" class="form-control" value="{{$licencia /*or ''*/}}" name="licencia">
              </div>
            </div>
          </div>
          <script type="text/javascript">
            var input =  document.getElementById('direccion');
            input.addEventListener('input',function(){
              if (this.value.length > 120)
              this.value = this.value.slice(0,120);
            })
          </script>
          <script type="text/javascript">
            var input =  document.getElementById('licencia');
            input.addEventListener('input',function(){
              if (this.value.length > 10)
              this.value = this.value.slice(0,10);
            })
          </script>
          @endif

          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label for="correo" class="col-form-label"><i class="fas fa-fw fa-envelope"></i> Correo Electrónico</label>
                <input id="correo" type="email" class="form-control" onkeyup="validarUsuarioPerfil()" value="{{ Auth::user()->email  /*or ''*/}}"  name="correo">
              </div>
            </div>
          </div>
          <script type="text/javascript">
            var input =  document.getElementById('correo');
            input.addEventListener('input',function(){
              if (this.value.length > 60)
              this.value = this.value.slice(0,60);
            })
          </script>

          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="genero" class="col-form-label"><i class="fas fa-venus-mars"></i> Género</label>
                <select id="genero" class="form-control" name="genero">
                  <option value="Masculino" <?php if ($genero == "Masuculino") {echo "selected";} ?> >Masculino</option>
                  <option value="Femenino" <?php if ($genero == "Femenino") {echo "selected";} ?> >Femenino</option>
                </select>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="fnac" class="col-form-label"><i class="fas fa-calendar"></i> Fecha de Nacimiento</label>
                <input onchange="validarUsuarioPerfil()" id="fnac" type="text" class="form-control" value="{{$fnac /*or ''*/}}" name="fnac" style="background:white;" readonly="readonly" autocomplete="off">
              </div>
            </div>
          </div>
          <?php $yy = date('yy') - 18;?>
          <script>
          $('#fnac').datepicker({
              format: "yyyy-mm-dd",
              language: "es",
              startDate: new Date('1900-01-01'),
              endDate: new Date('<?php echo date($yy.'-m-d'); ?>')
            });
          </script>

          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="ci" class="col-form-label"><i class="fas fa-address-card"></i> CI</label>
                <div class="input-group">
                  <input id="ci" type="text" class="form-control" value="{{$ci /*or ''*/}}" name="ci" onkeypress="return soloNumeros(event)" autocomplete="off" onkeyup="validarUsuarioPerfil()">
                  <span class="input-group-btn">
                    <select class="custom-select" name="cid" id="cid">
                        <option value="LP" @if($cid == 'LP') selected @endif>LP</option>
                        <option value="CB" @if($cid == 'CB') selected @endif>CB</option>
                        <option value="SC" @if($cid == 'SC') selected @endif>SC</option>
                        <option value="CH" @if($cid == 'CH') selected @endif>CH</option>
                        <option value="OR" @if($cid == 'OR') selected @endif>OR</option>
                        <option value="PT" @if($cid == 'PT') selected @endif>PT</option>
                        <option value="TJ" @if($cid == 'TJ') selected @endif>TJ</option>
                        <option value="BE" @if($cid == 'BE') selected @endif>BE</option>
                        <option value="PD" @if($cid == 'PD') selected @endif>PD</option>
                    </select>
                </span>
              </div>
            </div>
          </div>

          <script type="text/javascript">
            var input =  document.getElementById('ci');
            input.addEventListener('input',function(){
              if (this.value.length > 10)
              this.value = this.value.slice(0,10);
            })
          </script>

          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="form-group">
              <label for="ntelefono" class="col-form-label"><i class="fas fa-fw fa-phone"></i> Número Telefónico</label>
              <div class="input-group">
                <div class="input-group-addon"><b>+591</b></div>
                  <input id="ntelefono" type="text" class="form-control" value="{{$telefono /*or ''*/}}" name="ntelefono" onkeypress="return soloNumeros(event)" onkeyup="validarUsuarioPerfil()" autocomplete="off">
                </div>
              </div>
            </div>
            <script type="text/javascript">
              var input =  document.getElementById('ntelefono');
              input.addEventListener('input',function(){
                if (this.value.length > 8)
                this.value = this.value.slice(0,8);
              })
            </script>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" id="guardar-cambios" name="guardar-cambios" value="guardar-cambios" disabled>Guardar cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>


@if(empty(auth()->user()->id_chofer))
<script type="text/javascript">
validarUsuarioPerfil();
function validarUsuarioPerfil() {
  if ((document.getElementById('nombres').value.length > 0) &&
  (document.getElementById('apellido_p').value.length > 0) &&
  (document.getElementById('apellido_m').value.length > 0) &&
  (document.getElementById('direccion').value.length > 0) &&
  (document.getElementById('correo').value.length > 0) &&
  (document.getElementById('genero').value != null) &&
  (document.getElementById('fnac').value.length > 0) &&
  (document.getElementById('ci').value.length > 0) &&
  (document.getElementById('nombres').value.length > 0) &&
  (document.getElementById('ntelefono').value.length > 0)) {
    document.getElementById('guardar-cambios').disabled = false;
  } else {
    document.getElementById('guardar-cambios').disabled = true;
  }
}
</script>
@else
<script type="text/javascript">
validarUsuarioPerfil();
function validarUsuarioPerfil() {
  if ((document.getElementById('nombres').value.length > 0) &&
  (document.getElementById('apellido_p').value.length > 0) &&
  (document.getElementById('apellido_m').value.length > 0) &&
  (document.getElementById('direccion').value.length > 0) &&
  (document.getElementById('correo').value.length > 0) &&
  (document.getElementById('genero').value != null) &&
  (document.getElementById('fnac').value.length > 0) &&
  (document.getElementById('ci').value.length > 0) &&
  (document.getElementById('nombres').value.length > 0) &&
  (document.getElementById('licencia').value.length > 0) &&
  (document.getElementById('ntelefono').value.length > 0)) {
    document.getElementById('guardar-cambios').disabled = false;
  } else {
    document.getElementById('guardar-cambios').disabled = true;
  }
}
</script>
@endif