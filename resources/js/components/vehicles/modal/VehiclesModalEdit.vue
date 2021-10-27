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
                    <!-- <form action="{{ action('VehiclesController@nuevo')}}" method="post" autocomplete='off'> -->
                    <form action="" method="post" autocomplete='off'>
                        <VehiclesForm :datos="datos" @functionProp="submit_form"/>
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
    methods: {
        async submit_form(){
            await axios.put('api/vehicles/' + this.data.id,{
                placa:                  this.datos.placa,
                marca:                  this.datos.marca,
                modelo:                 this.datos.modelo,
                capacidad_carga:        this.datos.capacidad_carga,
                capacidad_gasolina:     this.datos.capacidad_gasolina,
                n_ruedas:               this.datos.n_ruedas,
                id_chofer:               '1'
            })
                .then(response => {                    
                    console.log(this.vehicles);
                    // let newData = this.data.map(obj =>
                    //     //obj.id === this.data.id ? { ...obj, completed: true } : obj
                    //     obj.id === this.data.id ? { 
                    //         placa: this.datos.placa,
                    //         marca: this.datos.marca,
                    //         modelo: this.datos.modelo,
                    //         capacidad_carga: this.datos.capacidad_carga,
                    //         capacidad_gasolina: this.datos.capacidad_gasolina,
                    //         n_ruedas: this.datos.n_ruedas,
                    //         id_chofer: null,
                    //         created_at: this.datos.created_at,
                    //         updated_at: this.todayDate(),
                    //     } : obj
                    
                    //var newData = this.data.find(({ _id }) => _id === editingUser); 
                    })
                //$("#add").hide();
                // $('#add').modal('toggle');
                
                // $('#add').removeClass('in');
                // $('#add').attr("aria-hidden","true");
                // $('#add').css("display", "none");
                // $('.modal-backdrop').remove();
                // $('body').removeClass('modal-open');

                //this.$router.push('/vehicles')

            .catch(function (error) {
                 alert(error)
            });
        }
    }
}
</script>