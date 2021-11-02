<template>
    <div>
        <button type="button" class="btn btn-primary btn-w btn-block mb-3" data-bs-toggle="modal" data-bs-target="#add"><i class="fas fa-plus-circle"></i> Crear datos de vehículo </button>
        <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="add">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel2">Agregar camión</h4>        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>
                    <form @submit.prevent="submit_form" autocomplete='off'>
                        <VehiclesForm :formData="formData" @functionProp="submit_form"/>
                    </form>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import VehiclesForm from "../forms/VehiclesForm.vue";
import DateMixins from "../../../../mixins/dateMixins.js"
import {mapActions} from 'vuex'

export default {
    mixins: [DateMixins],
    data(){
        return {
            formData: {
                carID: "",
                brand: "",
                model: "",
                loadingCapacity: null,
                fuelCapacity: null,
                wheelNumber: null,
                todayDate: this.todayDate()
            }
        }
    },
    components: { VehiclesForm },
    methods: {
        ...mapActions(['addVehicle']),
        submit_form(){
            this.addVehicle(this.formData);
            this.$notification.new("Vehículo agregado correctamente" );
        }
    }
}
</script>