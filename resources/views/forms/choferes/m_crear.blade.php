<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-m">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel2">Crear chófer</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ action('choferesController@nuevo')}}" method="post" autocomplete='off'>
            {{ csrf_field() }}                  
        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="apellido_p" class="control-label mb-1">Apellido Paterno <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('apellido_p', 20)" style="text-transform:capitalize" id="apellido_p" name="apellido_p" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" onkeypress="return soloLetras(event)" onkeyup="validar()">
            </div>    
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="apellido_m" class="control-label mb-1">Apellido Materno <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('apellido_m', 20)" style="text-transform:capitalize" id="apellido_m" name="apellido_m" type="text" class="form-control" onkeypress="return soloLetras(event)" onkeyup="validar()">
            </div>    
          </div>
        </div>

      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for="nombres" class="control-label mb-1">Nombres <b style="color: red;">*</b></label>
            <input oninput="validarCaracteres('nombres', 30)" style="text-transform:capitalize" id="nombres" name="nombres" type="text" class="form-control" onkeypress="return soloLetras(event)" onkeyup="validar()">
          </div>    
        </div>
      </div>

      <div class="row">
        <div class="col-9">
        <label class="control-label mb-1" for="ci">CI <span class="required">*</span></label>
          <input oninput="validarCaracteres('ci', 10)" onkeypress="return soloNumeros(event)" type="text" id="ci" name="ci" required="required" class="form-control" autocomplete="off" onkeyup="validar()">
        </div>
        <div class="col-3">
        <label class="control-label mb-1" for="ci">Depto. <span class="required">*</span></label>
          <select class="form-control" id="cid" name="cid" required="required">
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
            <label for="telefono" class="control-label mb-1">Teléfono <b style="color: red;">*</b></label>
            <input oninput="validarCaracteres('telefono', 8)" id="telefono" name="telefono" type="text" class="form-control" onkeypress="return soloNumeros(event)" onkeyup="validar()">
          </div>    
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for="direccion" class="control-label mb-1">Dirección <b style="color: red;">*</b></label>
            <input oninput="validarCaracteres('direccion',60)" id="direccion" name="direccion" type="text" class="form-control" onkeyup="validar()">
          </div>    
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for="licencia" class="control-label mb-1">Licencia <b style="color: red;">*</b></label>
            <input oninput="validarCaracteres('licencia',10)" id="licencia" name="licencia" type="text" class="form-control" onkeypress="return soloNumeros(event)" onkeyup="validar()">
          </div>    
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="genero" class="control-label mb-1">Género</label> <b style="color: red;">*</b>
            <select class="form-control" name="genero">
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <label for="genero" class="control-label mb-1">Fecha de Nacimiento</label> <b style="color: red;">*</b>
            <div class="col-12">
              <input id="fnac" name="fnac" class="date-picker form-control" required="required" type="text" onchange="validar()">
              <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
        </div>
      </div>
                                  
      <script>
          $('#fnac').datepicker({
              format: "yyyy-mm-dd",
              language: "es",
              startDate: new Date('1900-01-01'),
              endDate: new Date('{{date("Y-m-d",strtotime(date("d-m-Y")."- 18 year"))}}'),
              autoclose: true
          });
      </script>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id='crear'>Crear elemento</button>
      </div>
      </form> 

    </div>
  </div>
</div>

<script type="text/javascript">
validar();
function validar() {
    if (
      (document.getElementById("nombres").value.length > 0) &&
      (document.getElementById("apellido_p").value.length > 0) &&
      (document.getElementById("apellido_m").value.length > 0) &&
      (document.getElementById("ci").value.length > 0) &&
      (document.getElementById("fnac").value.length > 0) &&
      (document.getElementById("telefono").value.length > 0) &&
      (document.getElementById("licencia").value.length > 0) &&
      (document.getElementById("direccion").value.length > 0)
    ) {
      document.getElementById("crear").disabled = false;
  } else {
    document.getElementById("crear").disabled = true;
  }
}
</script>