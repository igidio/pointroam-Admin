<div class="modal fade bs-example-modal-sm_d_{{$camion->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h4 class="modal-title white" id="myModalLabel2">Eliminar camión</h4>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ action('camionesController@eliminar')}}" method="post">
            {{ csrf_field() }}                  
          <input type="hidden" name="id" value="{{$camion->id}}"> 
          <h3>¿Seguro desea eliminar este elemento?</h3>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger">Elminar elemento</button>
      </div>
      </form> 
    </div>
  </div>
</div>