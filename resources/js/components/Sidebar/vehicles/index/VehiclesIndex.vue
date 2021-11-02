<template>
<div>
    <VehiclesModalAdd/>
    <div class="card">
        <div class="card-header"><h5>Lista de vehículos registrados</h5></div>
        <div class="card-body">
            <div v-if="loaded == 'no'">
                <div class="d-flex justify-content-center">
                    <div class="spinner-grow text-primary my-5" role="status">
                        <span class="visually-hidden">Cargando...</span>
                    </div>
                </div>
            </div>
            <div v-else-if="loaded == 'success'">
                <data-table v-bind="bindings"/>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import Vue from "vue";
import DataTable from "@andresouzaabreu/vue-data-table";
import "@andresouzaabreu/vue-data-table/dist/DataTable.css";
Vue.component("data-table", DataTable);

import BtnEliminar from "../modal/VehiclesModalDelete.vue";
import BtnModificar from "../modal/VehiclesModalEdit.vue";
import VehiclesModalAdd from '../modal/VehiclesModalAdd.vue';

import {mapActions, mapState} from 'vuex'

export default {
    components: {
        VehiclesModalAdd
    },
    mounted(){
        this.getVehicles()        
    },
    methods: {
        ...mapActions(['getVehicles'])
    },
    computed: {
        ...mapState({            
            loaded: state => state.vehicles.loaded,
            vehicles: state => state.vehicles,
        }),
        bindings() {
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
                data: Object.values(this.vehicles.vehicles),
                lang: 'es',
            }
        },
        
    }
}
</script>