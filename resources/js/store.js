import Vue from "vue";
import Vuex from 'vuex';
import DateMixins from "./mixins/dateMixins.js"

Vue.use(Vuex);

const modVehicles = {
    mixins: [DateMixins],
    state: {
        vehicles: Array,
        loaded: 'no',
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
        },
        setLoaded(state,payload){
            state.loaded = payload
        }
    },
    actions: {
        getVehicles({commit}){
            var vehicles = Array
            axios.get('/api/vehicles')
            .then(response => {
                vehicles = response.data.data;
                commit('setVehicles',vehicles)
                commit('setLoaded',"success")
            })
            .catch(response => {
                commit('setLoaded',"error")
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
                commit('setLoaded',"success")
            })
            .catch(function (error) {
                commit('setLoaded',"error")
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

const modUsers = {
    state: {
        infouser: {},
        details: {},

    },
    mutations: {
        setInfouser(state,payload){ state.infouser = payload },
        setDetails(state,payload){ state.details = payload }
    },
    actions: {        
        getUser({commit}){
            var infouser = {}
            var details = {}
            window.axios.defaults.headers.common['Authorization'] = `Bearer ${localStorage.getItem('token')}`
            axios.get('api/user')
            .then(() => {
                axios.get('api/userinformation')            
                .then((response) => {
                    infouser.username = response.data.username;
                    infouser.email = response.data.email,
                    infouser.access = response.data.access,
                    infouser.image = response.data.image,
                    infouser.updated_at = response.data.updated_at,

                    details.firstname = response.data.subjects.firstname,
                    details.lastnameP = response.data.subjects.lastnameP,
                    details.lastnameM = response.data.subjects.lastnameM,
                    details.address = response.data.subjects.address,
                    details.birthday = response.data.subjects.birthday,
                    details.numberID = response.data.subjects.numberID,
                    details.department = response.data.subjects.department,
                    details.phone = response.data.subjects.phone,

                    commit('setInfouser',infouser)
                    commit('setDetails',details)
                    //commit('setDetails',details)
                })                
            }).catch((errors) => {
                console.log(errors)
            })
        },
        logout({commit}){
            axios.post('api/logout')
            .then(() => {
                localStorage.removeItem('token')
                this.$router.push('/login')
            })
            .catch((errors) => {
                console.log(errors)
            })
        }
    },
    modules: {
    }
}

export default new Vuex.Store({
    modules: {
        vehicles: modVehicles,
        user: modUsers,
    }
})