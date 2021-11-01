import Vue from "vue";
import Vuex from 'vuex';
import DateMixins from "./mixins/dateMixins.js"

Vue.use(Vuex);

const modVehicles = {
    mixins: [DateMixins],
    state: {
        vehicles: Array,
        vehicle: {
            nombre: '', 
            id: '',
            carID: '',
            brand: '',
            model: '',
            loadingCapacity: null,
            fuelCapacity: null,
            wheelNumber: null,
            updated_at: '',
        }
    },
    mutations: {
        setVehicles(state,payload){
            state.vehicles = payload
        },
        updateAddVehicles(state,payload){            
            state.vehicles.push({
                carID: payload.carID,
                brand: payload.brand,
                model: payload.model,
                loadingCapacity: payload.loadingCapacity,
                fuelCapacity: payload.fuelCapacity,
                wheelNumber: payload.wheelNumber,
                id: state.vehicles.length + 1,
                updated_at: payload.todayDate
            });
        },
        updateVehicle(state,payload){
            state.vehicles = state.vehicles.map(item => item.id === payload.id ? payload : item)
        },
        setDeleteVehicle(state,payload){
            state.vehicles = state.vehicles.filter(item => item.id !== payload)
        }
    },
    actions: {
        getVehicles({commit}){
            var vehicles = Array
            axios.get('/api/vehicles')
            .then(response => {
                vehicles = response.data.data;
                //this.isLoaded = true
                commit('setVehicles',vehicles)
            });
        },
        addVehicle({commit},formData){
            axios.post('api/vehicles',{
                carID:                      formData.carID,
                brand:                      formData.brand,
                model:                      formData.model,
                loadingCapacity:            formData.loadingCapacity,
                fuelCapacity:               formData.fuelCapacity,
                wheelNumber:                formData.wheelNumber,
                color:                      'Negro',                
            })
            .then(response => {                
                commit('updateAddVehicles',formData);
            })
            .catch(function (error) {
                    alert(error)
            });
        },
        editVehicle({commit},formData){
            axios.put('api/vehicles/' + formData.id,{
                carID:                  formData.carID,
                brand:                  formData.brand,
                model:                 formData.model,
                loadingCapacity:        formData.loadingCapacity,
                fuelCapacity:     formData.fuelCapacity,
                wheelNumber:               formData.wheelNumber,
                //id_chofer:               '1'
                'fuelType': 'Gas',
            })
            .then(response => {                
                commit('updateVehicle',formData)
            })
            .catch(function (error) {
                 alert(error)
            });
        },
        deleteVehicle({commit},id){
            axios.delete('/api/vehicles/' + id )
            .then(response => {
                commit('setDeleteVehicle',id)
            })
        },
    },
    modules: {}
}

export default new Vuex.Store({
    modules: {
        vehicles: modVehicles
    }
})