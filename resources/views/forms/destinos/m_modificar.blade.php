<div class="modal fade bs-example-modal-sm_e_{{$destino->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-m">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel2">Modificar destino</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ action('destinosController@editar')}}" method="post" autocomplete="off">
            {{ csrf_field() }}     
            <input type="hidden" name="id" value="{{$destino->id}}">             
        
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="nombre{{$destino->id}}" class="control-label mb-1">Nombre del destino <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('nombre{{$destino->id}}', 30)" id="nombre{{$destino->id}}" name="nombre" type="text" class="form-control" onkeyup="validar{{$destino->id}}()" value="{{$destino->nombre}}">
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="direccion{{$destino->id}}" class="control-label mb-1">Direccion <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('direccion{{$destino->id}}', 60)" id="direccion{{$destino->id}}" name="direccion" type="text" class="form-control" onkeyup="validar{{$destino->id}}()" value="{{$destino->direccion}}">
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="provincia{{$destino->id}}" class="control-label mb-1">Provincia <b style="color: red;">*</b></label>
              <?php $provincias = DB::table('provincias')->get() ?>
              <select name="provincia" class="form-control" onkeyup="validar{{$destino->id}}()" id="provincia{{$destino->id}}">
              @foreach($provincias as $provincia)
                <option value="{{$provincia->id}}" <?php if ($provincia->id == $destino->provincia) { echo "selected"; } ?>>{{$provincia->nombre}}</option>
              @endforeach
              </select>
            </div>    
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id='mod{{$destino->id}}'>Modificar elemento</button>
      </div>
      </form> 

    </div>
  </div>
</div>

<script type="text/javascript">
validar{{$destino->id}}();
function validar{{$destino->id}}() {
    if (
      (document.getElementById("nombre{{$destino->id}}").value.length > 0) &&
      (document.getElementById("direccion{{$destino->id}}").value.length > 0)
    ) {
      document.getElementById("mod{{$destino->id}}").disabled = false;
  } else {
    document.getElementById("mod{{$destino->id}}").disabled = true;
  }
}
</script>