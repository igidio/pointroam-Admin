<template>
<div>
    <VehiclesModalAdd :vehicles="vehicles"/>

    <div class="card">
        <div class="card-header"><h5>Lista de vehículos registrados</h5></div>
        <div class="card-body">
            <div v-if="!isLoaded">
                <div class="spinner-grow text-primary justify-content-center" role="status">
                    <span class="visually-hidden">Cargando...</span>
                </div>
            </div>
            <div v-else>
                <data-table v-bind="bindings"/>
            </div>
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
import VehiclesModalAdd from '../modal/VehiclesModalAdd.vue';

export default {
    components: {
        VehiclesModalAdd
    },
    data(){
        return {
            vehicles: [],
            isLoaded: false
        }
    },
    mounted(){
        this.getIndex();
    },
    methods: {
        getIndex(){
            axios.get('/api/vehicles').then(response => {
                //this.vehicles = response.data;
                this.vehicles = response.data.data;
                this.isLoaded = true
            }).then(
                console.log(this.vehicles)
            );
            
        },
    },
    computed: {
        bindings() {
            //alert("Esto");
            return {
                columns: [
                    {key: "carID", title: "Placa"},
                    {key: "brand", title: "Marca"},
                    {key: "model", title: "Modelo"},
                    {key: "loadingCapacity", title: "Capacidad de Carga (En Kg.)"},
                    {key: "fuelCapacity", title: "Capacidad de Gasolina (En Lt.)"},
                    {key: "wheelNumber", title: "Número de ruedas"},
                    {key: "updated_at", title: "Fecha de creación"},
                    {title: "Modificar", component: BtnModificar },
                    {title: "Eliminar", component: BtnEliminar},
                ],
                data: this.vehicles,
                lang: 'es',
            }
        }
    }
}
</script>