require('./bootstrap');

window.Vue = require('vue').default;
import VueRouter from 'vue-router';
Vue.use(VueRouter);
// import Vuex from 'vuex';
// Vue.use(Vuex)

import App          from './components/App.vue'
import Dashboard    from './components/dashboards/Dashboard.vue'

import VehiclesMain from './components/vehicles/VehiclesMain.vue'
import DriversIndex from './components/drivers/index/DriversIndex.vue'
import ChatIndex from './components/chat/ChatApp.vue'

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/',            component: Dashboard,               name: 'Dashboard' },
        { path: '/vehicles',    component: VehiclesMain,            name: 'Vehicles'},
        { path: '/drivers',     component: DriversIndex,            name: 'DriversIndex'},
        { path: '/chat',        component: ChatIndex,               name: 'Chat'},
    ]
})

const app = new Vue({
    el: '#app',
    components: { 
        App
    },
    router
});

// export default new Vuex.Store({
//     state: {
//       vehicles: [],
//       vehicle: {nombre: '', id: ''}
//     },
//     mutations: {
//     },
//     actions: {
//     },
//     modules: {
//     }
// })