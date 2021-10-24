<template>
  <div class="card">
    <div class="card-header"><h5>Lista de vehículos registrados</h5></div>
        <div class="card-body">
        <!-- Tabla de informacion -->

        <div v-if="!isLoaded">
            <div class="spinner-grow text-primary justify-content-center" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <div v-else>        

        <table class="table table-striped table-bordered" style="width:100%" id="table1">
            <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Capacidad de Carga (En Kg.)</th>
                <th>Capacidad de Gasolina (En Lt.)</th>
                <th>Número de ruedas</th>
                <th>Fecha de creación</th>
                <th>Modificar/Eliminar</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="vehicle in vehicles" :key="vehicle.id">
                <td>{{ vehicle.placa }}</td>
                <td>{{ vehicle.marca }}</td>
                <td>{{ vehicle.modelo }}</td> 
                <td>{{ vehicle.capacidad_carga }} kg.</td>
                <td>{{ vehicle.capacidad_gasolina }} litros</td>
                <td>{{ vehicle.n_ruedas }} ruedas</td>
                <td>{{ vehicle.updated_at }}</td>
                <!-- Boton para modificar elemento -->
                
                <td>
                <!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm_e_{{$camion->id}}"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm_d_{{$camion->id}}"><i class="fas fa-times"></i></button> -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"><i class="fas fa-times"></i></button>
                </td>
                <!-- @include("forms.vehicles.m_modificar") -->
                <!-- @include("forms.vehicles.m_eliminar") -->
            </tr>
            <!-- @endforeach -->
        </tbody>
        </table>

        </div>
    </div>
    
    </div>
</template>

<script>
import '/template/vendors/simple-datatables/simple-datatables.js';
import Vue from 'vue';
// Vue.use(simpleDatatables );

// let table1 = document.querySelector('#table1');
// let dataTable = new sd.simpleDatatables.DataTable(table1);

const scriptLoader = {
    loaded: [],
    load (src) {
        if (this.loaded.indexOf(src) !== -1) {
            return
        }

        this.loaded.push(src)

        if (document) {
            const script = document.createElement('script')
            script.setAttribute('src', src)
            document.head.appendChild(script)
        }
    }
}

Vue.use({
    install () {
        Vue.prototype.$scriptLoader = scriptLoader
    }
})



export default {
    data(){
        return {
            vehicles: [],
            isLoaded: false
        }
    },
    created(){
        this.$scriptLoader.load('/template/vendors/simple-datatables/simple-datatables.js')
    },
    mounted(){
        axios.get('/api/vehicles').then(response => {
            this.vehicles = response.data;
            this.isLoaded = true
        });
        
    }
}
</script>