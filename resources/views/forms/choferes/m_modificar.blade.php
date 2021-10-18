<div class="modal fade bs-example-modal-sm_e_{{$chofer->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-m">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel2">Modificar destino</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ action('choferesController@editar')}}" method="post" autocomplete='off'>
      {{ csrf_field() }}     
      <input type="hidden" name="id" value="{{$chofer->id}}">

      <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="apellido_p{{$chofer->id}}" class="control-label mb-1">Apellido Paterno <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('apellido_p{{$chofer->id}}', 20)" style="text-transform:capitalize" id="apellido_p{{$chofer->id}}" name="apellido_p" type="text" class="form-control" onkeypress="return soloLetras(event)" onkeyup="validar{{$chofer->id}}()" value="{{$chofer->apellido_p}}">
            </div>    
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="apellido_m{{$chofer->id}}" class="control-label mb-1">Apellido Materno <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('apellido_m{{$chofer->id}}', 20)" style="text-transform:capitalize" id="apellido_m{{$chofer->id}}" name="apellido_m" type="text" class="form-control" onkeypress="return soloLetras(event)" onkeyup="validar{{$chofer->id}}()" value="{{$chofer->apellido_m}}">
            </div>    
          </div>
        </div>

      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for="nombres{{$chofer->id}}" class="control-label mb-1">Nombres <b style="color: red;">*</b></label>
            <input oninput="validarCaracteres('nombres{{$chofer->id}}', 30)" style="text-transform:capitalize" id="nombres{{$chofer->id}}" name="nombres" type="text" class="form-control" onkeypress="return soloLetras(event)" onkeyup="validar{{$chofer->id}}()" value="{{$chofer->nombres}}">
          </div>    
        </div>
      </div>

      <div class="row">
        <div class="col-9">
        <label class="control-label mb-1" for="ci{{$chofer->id}}">CI <span class="required">*</span></label>
          <input oninput="validarCaracteres('ci{{$chofer->id}}', 10)" onkeypress="return soloNumeros(event)" type="text" id="ci{{$chofer->id}}" name="ci" required="required" class="form-control" autocomplete="off" onkeyup="validar{{$chofer->id}}()" value="{{$chofer->ci}}">
        </div>
        <div class="col-3">
        <label class="control-label mb-1" for="cid{{$chofer->id}}">Depto. <span class="required">*</span></label>
          <select class="form-control" id="cid{{$chofer->id}}" name="cid" required="required">
            <option value='LP' selected>LP</option>
            <option value='SC'>SC</option>
            <option value='CB'>CB</option>
            <option value='CH'>CH</option>
            <option value='OR'>OR</option>
            <option value='PT'>PT</option>
            <option value='TJ'>TJ</option>
            <option value='BE'>BE</option>
            <option value='PD'>PD</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for="telefono{{$chofer->id}}" class="control-label mb-1">Teléfono <b style="color: red;">*</b></label>
            <input oninput="validarCaracteres('telefono{{$chofer->id}}', 8)" id="telefono{{$chofer->id}}" name="telefono" type="text" class="form-control" onkeypress="return soloNumeros(event)" onkeyup="validar{{$chofer->id}}()" value="{{$chofer->telefono}}">
          </div>    
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for="direccion{{$chofer->id}}" class="control-label mb-1">Dirección <b style="color: red;">*</b></label>
            <input oninput="validarCaracteres('direccion{{$chofer->id}}',60)" id="direccion{{$chofer->id}}" name="direccion" type="text" class="form-control" onkeyup="validar{{$chofer->id}}()" value="{{$chofer->direccion}}">
          </div>    
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for="licencia{{$chofer->id}}" class="control-label mb-1">Licencia <b style="color: red;">*</b></label>
            <input oninput="validarCaracteres('licencia{{$chofer->id}}',10)" id="licencia{{$chofer->id}}" name="licencia" type="text" class="form-control" onkeypress="return soloNumeros(event)" onkeyup="validar{{$chofer->id}}()" value="{{$chofer->licencia}}">
          </div>    
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="genero{{$chofer->id}}" class="control-label mb-1">Género</label> <b style="color: red;">*</b>
            <select class="form-control" name="genero" id='genero{{$chofer->id}}'>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <label for="fnac{{$chofer->id}}" class="control-label mb-1">Fecha de Nacimiento</label> <b style="color: red;">*</b>
            <div class="col-12">
              <input id="fnac{{$chofer->id}}" name="fnac" class="date-picker form-control" required="required" type="text" onchange="validar{{$chofer->id}}()" value='{{$chofer->fnac}}'>
              <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
        </div>
      </div>
                                  
      <script>
          $('#fnac{{$chofer->id}}').datepicker({
              format: "yyyy-mm-dd",
              language: "es",
              startDate: new Date('1900-01-01'),
              endDate: new Date('{{date("Y-m-d",strtotime(date("d-m-Y")."- 18 year"))}}'),
              autoclose: true
          });
      </script>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id='mod{{$chofer->id}}'>Modificar elemento</button>
      </div>
      </form> 

    </div>
  </div>
</div>

<script type="text/javascript">
validar{{$chofer->id}}();
function validar{{$chofer->id}}() {
    if (
      (document.getElementById("nombres{{$chofer->id}}").value.length > 0) &&
      (document.getElementById("apellido_p{{$chofer->id}}").value.length > 0) &&
      (document.getElementById("apellido_m{{$chofer->id}}").value.length > 0) &&
      (document.getElementById("ci{{$chofer->id}}").value.length > 0) &&
      (document.getElementById("fnac{{$chofer->id}}").value.length > 0) &&
      (document.getElementById("telefono{{$chofer->id}}").value.length > 0) &&
      (document.getElementById("direccion{{$chofer->id}}").value.length > 0) &&
      (document.getElementById("licencia{{$chofer->id}}").value.length > 0)
    ) {
      document.getElementById("mod{{$chofer->id}}").disabled = false;
  } else {
    document.getElementById("mod{{$chofer->id}}").disabled = true;
  }
}
</script>