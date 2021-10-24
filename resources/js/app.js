require('./bootstrap');

window.Vue = require('vue').default;
import VueRouter from 'vue-router';
Vue.use(VueRouter);


import App          from './components/App.vue'
import Dashboard    from './components/dashboards/Dashboard.vue'

import VehiclesMain from './components/vehicles/VehiclesMain.vue'
import DriversIndex from './components/drivers/index/DriversIndex.vue'

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/',    component: Dashboard,                   name: 'Dashboard' },
        { path: '/vehicles',    component: VehiclesMain,       name: 'Vehicles'},
        { path: '/drivers',    component: DriversIndex,       name: 'DriversIndex'},
    ]
})

const app = new Vue({
    el: '#app',
    components: { 
        App
    },
    router
});
