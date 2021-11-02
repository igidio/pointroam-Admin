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
          </div>>
            <div class="modal-body">
              <h3>¿Seguro desea eliminar este elemento?</h3>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" @click="deleteVehicle(data.id); mensaje()" data-bs-dismiss="modal" class="btn btn-danger">Elminar elemento</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions } from 'vuex'
export default {
  name: "ButtonDelete",
  props: {
    // prop below is REQUIRED:
    data: {
      type: Object
    },
  },
  methods: {
    ...mapActions(['deleteVehicle']),
    mensaje(){ this.$notification.warning('Vehículo eliminado') }
  }
}
</script>