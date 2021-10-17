<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-m">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel2">Modificar destino</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ action('destinosController@nuevo')}}" method="post" autocomplete="off">
        {{ csrf_field() }}  

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="nombre" class="control-label mb-1">Nombre del destino <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('nombre', 30)" id="nombre" name="nombre" type="text" class="form-control" onkeyup="validar()">
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="direccion" class="control-label mb-1">Direccion <b style="color: red;">*</b></label>
              <input oninput="validarCaracteres('direccion', 60)" id="direccion" name="direccion" type="text" class="form-control" onkeyup="validar()">
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="direccion" class="control-label mb-1">Provincia <b style="color: red;">*</b></label>
              <?php $provincias = DB::table('provincias')->get() ?>
              <select name="provincia" class="form-control" onkeyup="validar()" id="provincia">
              @foreach($provincias as $provincia)
                <option value="{{$provincia->id}}">{{$provincia->nombre}}</option>
              @endforeach
              </select>
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
      (document.getElementById("nombre").value.length > 0) &&
      (document.getElementById("direccion").value.length > 0)
    ) {
      document.getElementById("crear").disabled = false;
  } else {
    document.getElementById("crear").disabled = true;
  }
}
</script>