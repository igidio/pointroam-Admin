<template>
  <div class="card">
    <div class="card-header"><h5>Lista de vehículos registrados</h5></div>
        <div class="card-body">
        <!-- Tabla de informacion -->

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
</template>

<script>
export default {
    data(){
        return {
            vehicles: []
        }
    },
    mounted(){
        axios.get('/api/vehicles').then(response => {
            this.vehicles = response.data;
        });
    }
}
</script>