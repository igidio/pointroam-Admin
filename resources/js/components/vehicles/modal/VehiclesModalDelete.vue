<template>
  <div>
    <button class="btn btn-danger" data-bs-toggle="modal" :data-bs-target="'#eliminar'+data.id">
      <i class="fa fa-trash"></i>
    </button>

    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" :id="'eliminar'+data.id">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h4 class="modal-title white">Eliminar camión</h4>
          </div>
          <form action="" method="post">
            <div class="modal-body">
              <input type="show" name="id" :value="data.id"> 
              <h3>¿Seguro desea eliminar este elemento?</h3>
              <!-- <form action="{{ action('VehiclesController@eliminar')}}" method="post"> -->
              <!-- {{ csrf_field() }}                   -->
              <!-- <input type="hidden" name="id" value="{{$camion->id}}">  -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-danger">Elminar elemento</button>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ButtonDelete",
  props: {
    // prop below is REQUIRED:
    data: {
      type: Object
    }
  }
}
</script>