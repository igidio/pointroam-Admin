<div class="modal fade bs-example-modal-sm_e_{{$per->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-m">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel2">Modificar miembro del personal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ action('personalController@editar')}}" method="post" autocomplete="off">
        {{ csrf_field() }}     
        <input type="hidden" name="id" value="{{$per->id}}">             

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="apellido_p{{$per->id}}" class="control-label mb-1">Apellido Paterno <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('apellido_p{{$per->id}}', 20)" style="text-transform:capitalize" id="apellido_p{{$per->id}}" name="apellido_p" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$per->apellido_p}}" onkeypress="return soloLetras(event)" onkeyup="validar{{$per->id}}()">
            </div>    
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="apellido_m{{$per->id}}" class="control-label mb-1">Apellido Materno <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('apellido_m{{$per->id}}', 20)" style="text-transform:capitalize" id="apellido_m{{$per->id}}" name="apellido_m" type="text" class="form-control" onkeypress="return soloLetras(event)" onkeyup="validar{{$per->id}}()" value="{{$per->apellido_m}}">
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="nombres{{$per->id}}" class="control-label mb-1">Nombres <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('nombres{{$per->id}}', 30)" style="text-transform:capitalize" id="nombres{{$per->id}}" name="nombres" type="text" class="form-control" onkeypress="return soloLetras(event)" onkeyup="validar{{$per->id}}()" value='{{$per->nombres}}'>
            </div>    
          </div>
        </div>

        <div class="row">
        <div class="col-9">
        <label class="control-label mb-1" for="ci{{$per->id}}">CI <span class="required">*</span></label>
          <input oninput="validarCaracteres('ci{{$per->id}}', 9)" onkeypress="return soloNumeros(event)" type="text" id="ci{{$per->id}}" name="ci" required="required" class="form-control" autocomplete="off" onkeyup="validar{{$per->id}}()" value='{{$per->ci}}'>
        </div>
        <div class="col-3">
        <label class="control-label mb-1" for="ci">Depto. <span class="required">*</span></label>
          <select class="form-control" id="cid{{$per->id}}" name="cid" required="required">
            <option value='LP' <?php if ($per->cid == 'LP') { echo 'selected'; }?> >LP</option>
            <option value='SC' <?php if ($per->cid == 'SC') { echo 'selected'; }?> >SC</option>
            <option value='CB' <?php if ($per->cid == 'CB') { echo 'selected'; }?> >CB</option>
            <option value='CH' <?php if ($per->cid == 'CH') { echo 'selected'; }?> >CH</option>
            <option value='OR' <?php if ($per->cid == 'OR') { echo 'selected'; }?> >OR</option>
            <option value='PT' <?php if ($per->cid == 'PT') { echo 'selected'; }?> >PT</option>
            <option value='TJ' <?php if ($per->cid == 'TJ') { echo 'selected'; }?> >TJ</option>
            <option value='BE' <?php if ($per->cid == 'BE') { echo 'selected'; }?> >BE</option>
            <option value='PD' <?php if ($per->cid == 'PD') { echo 'selected'; }?> >PD</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for="telefono{{$per->id}}" class="control-label mb-1">Teléfono <b style="color: red;">*</b></label>
            <input oninput="validarCaracteres('telefono{{$per->id}}', 8)" id="telefono{{$per->id}}" name="telefono" type="text" class="form-control" onkeypress="return soloNumeros(event)" onkeyup="validar{{$per->id}}()" value='{{$per->telefono}}'>
          </div>    
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for="direccion{{$per->id}}" class="control-label mb-1">Dirección <b style="color: red;">*</b></label>
            <input oninput="validarCaracteres('direccion{{$per->id}}',60)" id="direccion{{$per->id}}" name="direccion" type="text" class="form-control" onkeyup="validar{{$per->id}}()" value='{{$per->direccion}}'>
          </div>    
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="genero{{$per->id}}" class="control-label mb-1">Género</label> <b style="color: red;">*</b>
            <select class="form-control" name="genero" id="genero{{$per->id}}">
              <option value="Masculino" <?php if ($per->genero == 'Masculino') { echo 'selected'; }?> >Masculino</option>
              <option value="Femenino" <?php if ($per->genero == 'Femenino') { echo 'selected'; }?> >Femenino</option>
            </select>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <label for="genero{{$per->id}}" class="control-label mb-1">Fecha de Nacimiento</label> <b style="color: red;">*</b>
            <div class="col-12">
              <input onchange="validar{{$per->id}}()" id="fnac{{$per->id}}" name="fnac" class="date-picker form-control" required="required" type="text" readonly style="background-color: #fff;"  value='{{$per->fnac}}'>
              <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-12">
        <label class="control-label mb-1" for="id_cargo{{$per->id}}">Cargo <span class="required">*</span></label>
          <?php $cargos = DB::table('cargos')->get() ?>
          <select class="form-control" id="id_cargo{{$per->id}}" name="id_cargo" required="required">
            @foreach($cargos as $cargo)
            <option value="{{$cargo->id}}" <?php if ($cargo->id == $per->id_cargo) { echo "selected"; } ?> >{{$cargo->nombre}}</option>
            @endforeach
          </select>
        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id='mod{{$per->id}}'>Modificar elemento</button>
      </div>
      </form> 

    </div>
  </div>
</div>

<script type="text/javascript">
validar{{$per->id}}();
function validar{{$per->id}}() {
    if (
      (document.getElementById("nombres{{$per->id}}").value.length > 0) &&
      (document.getElementById("apellido_p{{$per->id}}").value.length > 0) &&
      (document.getElementById("apellido_m{{$per->id}}").value.length > 0) &&
      (document.getElementById("ci{{$per->id}}").value.length > 0) &&
      (document.getElementById("fnac{{$per->id}}").value.length > 0) &&
      (document.getElementById("telefono{{$per->id}}").value.length > 0) &&
      (document.getElementById("direccion{{$per->id}}").value.length > 0)
    ) {
      document.getElementById("mod{{$per->id}}").disabled = false;
  } else {
    document.getElementById("mod{{ $per->id}}").disabled = true;
  }
}
</script>