require('./bootstrap');

window.Vue = require('vue').default;
import VueRouter from 'vue-router';
import routes from './routes';
import Login from './components/_template/login/login.vue'
Vue.use(VueRouter);
// import Vuex from 'vuex';
// Vue.use(Vuex)

const router = new VueRouter(routes)

import App from './components/App.vue'
import { data } from 'jquery';

function loggedIn(){ return localStorage.getItem('token') }

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (!loggedIn()) {
            next({
                path: '/login',
                component: Login
            })
        } else { next() }
    } else if(to.matched.some(record => record.meta.guest)) {
        if (loggedIn()) {
            next({
                path: '/',
                component: App
            })
        } else { next() }
    } else { next() }
})

// const router = new VueRouter({
//     mode: 'history',
//     routes: [
//         { path: '/',            component: Dashboard,               name: 'Dashboard' },
//         { path: '/vehicles',    component: VehiclesMain,            name: 'Vehicles'},
//         { path: '/drivers',     component: DriversIndex,            name: 'DriversIndex'},
//         { path: '/chat',        component: ChatIndex,               name: 'Chat'},
//     ]
// })

const app = new Vue({
    el: '#app',
    components: { App },
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