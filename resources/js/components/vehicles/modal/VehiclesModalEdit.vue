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
import VehiclesForm from "../forms/VehiclesForm.vue";
export default {
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
            }
        }
    },
    methods: {
        async submit_form(){
            await axios.put('api/vehicles/' + this.data.id,{
                carID:                  this.formData.carID,
                brand:                  this.formData.brand,
                model:                 this.formData.model,
                loadingCapacity:        this.formData.loadingCapacity,
                fuelCapacity:     this.formData.fuelCapacity,
                wheelNumber:               this.formData.wheelNumber,
                //id_chofer:               '1'
                'fuelType': 'Gas',
            })
            .catch(function (error) {
                 alert(error)
            });
        }
    }
}
</script>