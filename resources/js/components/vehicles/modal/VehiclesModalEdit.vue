<template>
    <div>
        <button class="btn btn-warning" data-bs-toggle="modal" :data-bs-target="'#editar'+data.id">
                <i class="fa fa-edit"></i>
        </button>

        <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" :id="'editar'+data.id">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel2">Modificar información</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                        </div>
                    <form action="" method="post" autocomplete='off'>
                        <VehiclesForm :formData="formData" @functionProp="submit_form"/>
                    </form>

                </div>
            </div>
        </div>
  </div>

</template>

<script>
import { mapActions } from 'vuex';
import DateMixins from "../../../mixins/dateMixins.js"
import VehiclesForm from "../forms/VehiclesForm.vue";
export default {
    mixins: [DateMixins],
    components: {
        VehiclesForm
    },
    props: {
      data: Object,
      vehicles: Array
    },
    data(){
        return {
            formData: {
                carID: this.data.carID,
                brand: this.data.brand,
                model: this.data.model,
                loadingCapacity: this.data.loadingCapacity,
                fuelCapacity: this.data.fuelCapacity,
                wheelNumber: this.data.wheelNumber,
                id: this.data.id,
                updated_at: this.todayDate()
            }
        }
    },
    methods: {
        ...mapActions(['editVehicle']),
        submit_form(){
            this.editVehicle(this.formData);
        }
    }
}
</script>