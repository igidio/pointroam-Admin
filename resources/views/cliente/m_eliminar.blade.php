<div class="modal fade" id="eliminar{{$pedido->id}}" tabindex="-1" role="dialog" aria-labelledby="rol" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{action('pedidosController@eliminarPedido')}}" method="POST" autocomplete="off">
            {{ csrf_field() }}  
            <input type="hidden" name="id" id="id" value="{{$pedido->id}}">
            <div class="modal-body">                
                <div class="row">
                    <div class="col-12">
                        <h5>¿Seguro desea eliminar este elemento?</h5>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </div>
            </form>
        </div>
    </div>
</div>