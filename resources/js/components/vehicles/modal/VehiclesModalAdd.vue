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
import DateMixins from "../../../mixins/dateMixins.js"

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
                wheelNumber: null
            }
        }
    },
    props: {
        vehicles: Array
    },
    components: {
        VehiclesForm
    },
    methods: {
        async submit_form(){
            await axios.post('api/vehicles',{
                carID:                      this.formData.carID,
                brand:                      this.formData.brand,
                model:                      this.formData.model,
                loadingCapacity:            this.formData.loadingCapacity,
                fuelCapacity:               this.formData.fuelCapacity,
                wheelNumber:                this.formData.wheelNumber,
                color:               'Negro'
            })
            .then(response => {
                this.vehicles.push({
                    carID: this.formData.carID,
                    brand: this.formData.brand,
                    model: this.formData.model,
                    loadingCapacity: this.formData.loadingCapacity,
                    fuelCapacity: this.formData.fuelCapacity,
                    wheelNumber: this.formData.wheelNumber,
                    //id_chofer: null,
                    id: this.vehicles.length + 1,
                    created_at: this.todayDate(),
                    updated_at: this.todayDate(),
                });
            })

            .catch(function (error) {
                 alert(error)
            });
        },
    }
}
</script>