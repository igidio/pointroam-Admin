import VehiclesMain from './components/vehicles/VehiclesMain.vue'
import DriversIndex from './components/drivers/index/DriversIndex.vue'
import ChatIndex from './components/chat/ChatApp.vue'
import Dashboard    from './components/dashboards/Dashboard.vue'
import Login from './components/_template/login/login.vue'

export default {
    mode: 'history',
    fallback: true,
    routes: [
        { 
            path: '/',
            component: Dashboard,
            name: 'Dashboard',
            meta: {requiresAuth: true}
        },
        { 
            path: '/vehicles',
            component: VehiclesMain,            
            name: 'Vehicles',
            meta: {requiresAuth: true}
        },
        { 
            path: '/drivers',
            component: DriversIndex,            
            name: 'DriversIndex',
            meta: {requiresAuth: true}
        },
        { 
            path: '/chat',
            component: ChatIndex,
            name: 'Chat',
            meta: {requiresAuth: true}
        },
        { 
            path: '/login',
            component: Login,
            name: 'Login',
            meta: {guest: true}
        },
    ]
}