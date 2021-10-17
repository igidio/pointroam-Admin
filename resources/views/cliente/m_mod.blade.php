<div class="modal fade" id="mod{{$pedido->id}}" tabindex="-1" role="dialog" aria-labelledby="rol" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{action('pedidosController@modPedido')}}" method="POST" autocomplete="off">
            {{ csrf_field() }}  
            <div class="modal-body">                
                <div class="row">
                    <div class="col-12">
                        <input type="hidden" name="id" id="id" value="{{$pedido->id}}">
                        <div class="form-group">
                            <label for="titulo" class="control-label mb-1">Titulo</label>
                            <input value="{{$pedido->encabezado}}" oninput="validarCaracteres('titulo{{$pedido->id}}', 30)" id="titulo{{$pedido->id}}" name="titulo" type="text" class="form-control" onkeyup="validarMod{{$pedido->id}}()">
                        </div>    
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="descripcion{{$pedido->id}}" class="control-label mb-1">Descripción</label>
                            <textarea name="descripcion" id="descripcion{{$pedido->id}}" class="form-control" rows="3" placeholder="La descripción va aquí" style="margin-top: 0px; margin-bottom: 0px; min-height: 106px; max-height: 220px;">{{$pedido->descripcion}}</textarea>
                        </div>    
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="mod{{$pedido->id}}">Modificar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
validarMod{{$pedido->id}}();
function validarMod{{$pedido->id}}() {
    if (
      (document.getElementById("titulo{{$pedido->id}}").value.length > 0)
    ) {
      document.getElementById("mod{{$pedido->id}}").disabled = false;
  } else {
    document.getElementById("mod{{$pedido->id}}").disabled = true;
  }
}
</script>