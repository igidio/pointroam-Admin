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
                        <VehiclesForm :datos="datos" @functionProp="submit_form"/>
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
            datos: {
                placa: "",
                marca: "",
                modelo: "",
                capacidad_carga: null,
                capacidad_gasolina: null,
                n_ruedas: null
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
                placa:                  this.datos.placa,
                marca:                  this.datos.marca,
                modelo:                 this.datos.modelo,
                capacidad_carga:        this.datos.capacidad_carga,
                capacidad_gasolina:     this.datos.capacidad_gasolina,
                n_ruedas:               this.datos.n_ruedas,
                id_chofer:               '1'
            })
            .then(response => {
                this.vehicles.push({
                    placa: this.datos.placa,
                    marca: this.datos.marca,
                    modelo: this.datos.modelo,
                    capacidad_carga: this.datos.capacidad_carga,
                    capacidad_gasolina: this.datos.capacidad_gasolina,
                    n_ruedas: this.datos.n_ruedas,
                    id_chofer: null,
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