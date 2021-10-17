<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-m">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel2">Agregar camión</h4>        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ action('camionesController@nuevo')}}" method="post" autocomplete='off'>
            {{ csrf_field() }}   


        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="placa" class="control-label mb-1">Placa <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('placa', 8)" id="placa" name="placa" type="text" class="form-control" onkeypress="return placaAuto(e)" onkeyup="validar()">
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="marca" class="control-label mb-1">Marca <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('marca', 15)" id="marca" name="marca" type="text" class="form-control" onkeyup="validar()">
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="modelo" class="control-label mb-1">Modelo <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('modelo', 15)" id="modelo" name="modelo" type="text" class="form-control" onkeyup="validar()">
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="capacidad_carga" class="control-label mb-1">Capacidad de carga en kg. <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('capacidad_carga', 4)" id="capacidad_carga" name="capacidad_carga" type="text" onkeypress="return soloNumeros(event)" class="form-control" onkeyup="validar()">
            </div>    
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="capacidad_gasolina" class="control-label mb-1">Capacidad de gasolina en litros <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('capacidad_gasolina', 4)" id="capacidad_gasolina" name="capacidad_gasolina" type="text" onkeypress="return soloNumeros(event)" class="form-control" onkeyup="validar()">
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="n_ruedas" class="control-label mb-1">No. de ruedas <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('n_ruedas', 2)" id="n_ruedas" name="n_ruedas" type="text" onkeypress="return soloNumeros(event)" class="form-control" onkeyup="validar()">
            </div>    
          </div>
        </div>

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
      (document.getElementById("placa").value.length > 0) &&
      (document.getElementById("marca").value.length > 0) &&
      (document.getElementById("modelo").value.length > 0) &&
      (document.getElementById("capacidad_carga").value.length > 0) &&
      (document.getElementById("capacidad_gasolina").value.length > 0) &&
      (document.getElementById("n_ruedas").value.length > 0)
    ) {
      document.getElementById("crear").disabled = false;
  } else {
    document.getElementById("crear").disabled = true;
  }
}
</script>