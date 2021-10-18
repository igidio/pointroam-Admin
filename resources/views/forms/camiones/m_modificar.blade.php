<div class="modal fade bs-example-modal-sm_e_{{$camion->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-m">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel2">Modificar camión</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ action('camionesController@editar')}}" method="post" autocomplete='off'>
            {{ csrf_field() }}     
            <input type="hidden" name="id" value="{{$camion->id}}">

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="placa{{$camion->id}}" class="control-label mb-1">Placa <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('placa{{$camion->id}}', 8)" id="placa{{$camion->id}}" name="placa" type="text" class="form-control" onkeypress="return placaAuto(e)" onkeyup="validar{{$camion->id}}()" value='{{$camion->placa}}'>
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="marca{{$camion->id}}" class="control-label mb-1">Marca <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('marca{{$camion->id}}', 15)" id="marca{{$camion->id}}" name="marca" type="text" class="form-control" onkeyup="validar{{$camion->id}}()" value='{{$camion->marca}}'>
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="modelo{{$camion->id}}" class="control-label mb-1">Modelo <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('modelo{{$camion->id}}', 15)" id="modelo{{$camion->id}}" name="modelo" type="text" class="form-control" onkeyup="validar{{$camion->id}}()" value='{{$camion->modelo}}'>
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="capacidad_carga{{$camion->id}}" class="control-label mb-1">Capacidad de carga en kg. <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('capacidad_carga{{$camion->id}}', 4)" id="capacidad_carga{{$camion->id}}" name="capacidad_carga" type="text" onkeypress="return soloNumeros(event)" class="form-control" onkeyup="validar{{$camion->id}}()" value='{{$camion->capacidad_carga}}'>
            </div>    
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="capacidad_gasolina{{$camion->id}}" class="control-label mb-1">Capacidad de gasolina en litros <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('capacidad_gasolina{{$camion->id}}', 4)" id="capacidad_gasolina{{$camion->id}}" name="capacidad_gasolina" type="text" onkeypress="return soloNumeros(event)" class="form-control" onkeyup="validar{{$camion->id}}()" value='{{$camion->capacidad_gasolina}}'>
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="n_ruedas{{$camion->id}}" class="control-label mb-1">No. de ruedas <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('n_ruedas{{$camion->id}}', 2)" id="n_ruedas{{$camion->id}}" name="n_ruedas" type="text" onkeypress="return soloNumeros(event)" class="form-control" onkeyup="validar{{$camion->id}}()" value="{{$camion->n_ruedas}}">
            </div>    
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id='mod{{$camion->id}}'>Modificar elemento</button>
      </div>
      </form> 

    </div>
  </div>
</div>

<script type="text/javascript">
validar{{$camion->id}}();
function validar{{$camion->id}}() {
    if (
      (document.getElementById("placa{{$camion->id}}").value.length > 0) &&
      (document.getElementById("marca{{$camion->id}}").value.length > 0) &&
      (document.getElementById("modelo{{$camion->id}}").value.length > 0) &&
      (document.getElementById("capacidad_carga{{$camion->id}}").value.length > 0) &&
      (document.getElementById("capacidad_gasolina{{$camion->id}}").value.length > 0) &&
      (document.getElementById("n_ruedas{{$camion->id}}").value.length > 0)
    ) {
      document.getElementById("mod{{$camion->id}}").disabled = false;
  } else {
    document.getElementById("mod{{$camion->id}}").disabled = true;
  }
}
</script>