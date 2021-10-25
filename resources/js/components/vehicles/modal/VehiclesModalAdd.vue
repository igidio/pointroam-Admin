<template>
    <div>
        <button type="button" class="btn btn-primary btn-w btn-block mb-3" data-bs-toggle="modal" data-bs-target="#add"><i class="fas fa-plus-circle"></i> Crear datos de vehículo </button>
        <!-- @include("forms.vehicles.m_crear") -->
        <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="add">
            <div class="modal-dialog modal-m">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel2">Agregar camión</h4>        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span>
                        </button>
                    </div>
                    
                    <!-- <form action="{{ action('VehiclesController@nuevo')}}" method="post" autocomplete='off'> -->
                    <form @submit.prevent="submit_form" autocomplete='off' id="myForm">
                        <VehiclesForm :datos="datos"/>
                    </form>

                </div>
            </div>
        </div>

    </div>
</template>

<script>
import VehiclesForm from "../forms/VehiclesForm.vue";
export default {
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
    components: {
        VehiclesForm
    },
    methods: {
        submit_form(){
            //axios.post('api/vehicles',this.datos)
            //alert(this.datos.n_ruedas)
            axios.post('/api/vehicles',{
                placa:                  this.datos.placa,
                marca:                  this.datos.marca,
                modelo:                 this.datos.modelo,
                capacidad_carga:        this.datos.capacidad_carga,
                capacidad_gasolina:     this.datos.capacidad_gasolina,
                n_ruedas:               this.datos.n_ruedas
            })
                .then(function(response) {
                    alert("subido")
                     this.$router.push('/')                    
            })
            .catch(function (error) {
                 alert(error)
            });
        }
    }
}
</script>