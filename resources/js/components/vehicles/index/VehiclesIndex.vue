<template>
<div class="card">
    <div class="card-header"><h5>Lista de vehículos registrados</h5></div>
    <div class="card-body">
        <div v-if="!isLoaded">
            <div class="spinner-grow text-primary justify-content-center" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <div v-else>
            <data-table v-bind="bindings" @actionTriggered="handleAction('Nombre')"/>
        </div>
    </div>
</div>
</template>

<script>
import Vue from "vue";
import DataTable from "@andresouzaabreu/vue-data-table";
Vue.component("data-table", DataTable);
import "@andresouzaabreu/vue-data-table/dist/DataTable.css";

import BtnEliminar from "../modal/VehiclesModalDelete.vue";
import BtnModificar from "../modal/VehiclesModalEdit.vue";

export default {
    data(){
        return {
            vehicles: [],
            isLoaded: false
        }
    },
    mounted(){
        axios.get('/api/vehicles').then(response => {
            //this.vehicles = response.data;
            this.vehicles = response.data.data;
            this.isLoaded = true
        });    
    },
    computed: {
        bindings() {
            return {
                columns: [
                    {key: "placa", title: "Placa"},
                    {key: "marca", title: "Marca"},
                    {key: "modelo", title: "Modelo"},
                    {key: "capacidad_carga", title: "Capacidad de Carga (En Kg.)"},
                    {key: "capacidad_gasolina", title: "Capacidad de Gasolina (En Lt.)"},
                    {key: "n_ruedas", title: "Número de ruedas"},
                    {key: "updated_at", title: "Fecha de creación"},
                    {title: "Modificar", component: BtnModificar},
                    {title: "Eliminar", component: BtnEliminar},
                ],
                data: this.vehicles,
                lang: 'es',
            }
        }
    }
}
</script>