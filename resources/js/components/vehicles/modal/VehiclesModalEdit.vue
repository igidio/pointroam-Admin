<template>
    <div>
        <button class="btn btn-warning" data-bs-toggle="modal" :data-bs-target="'#editar'+data.id">
                <i class="fa fa-edit"></i>
        </button>

        <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" :id="'editar'+data.id">
                <div class="modal-dialog modal-m">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel2">Agregar camión</h4>        
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                        </div>                    
                    <!-- <form action="{{ action('VehiclesController@nuevo')}}" method="post" autocomplete='off'> -->
                    <form action="" method="post" autocomplete='off'>
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
    components: {
        VehiclesForm
    },
    props: {
      data: {
        type: Object
      }
    },
    data(){
        return {
            datos: {
                placa: this.data.placa,
                marca: this.data.marca,
                modelo: this.data.modelo,
                capacidad_carga: this.data.capacidad_carga,
                capacidad_gasolina: this.data.capacidad_gasolina,
                n_ruedas: this.data.n_ruedas,
            }
        }
    },
}
</script>