<div class="modal fade" id="eliminar{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h5 class="modal-title" id="mediumModalLabel">Modificar vecino</h5>
            </div>
            <form class="" action="{{ action('clientesController@eliminar') }}" method="post">
                {{ csrf_field() }}
                <div class="modal-body">                    
                    <input type="hidden" name="id" value="{{$cliente->id}}">
                    <span>¿Seguro desea borrar este elemento?.</span>
                    se borraran todo registro relacionado con el cliente
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>