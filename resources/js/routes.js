import VehiclesMain from './components/Sidebar/vehicles/VehiclesMain.vue'
import DriversIndex from './components/Sidebar/drivers/index/DriversIndex.vue'
import ChatIndex from './components/Sidebar/chat/ChatApp.vue'
import Dashboard    from './components/dashboards/Dashboard.vue'
import Login from './components/_template/login/login.vue'
//UserOptions
import UserInfo from './components/UserOptions/UserInfo/UserInfo.vue'

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
            path: '/user',
            component: UserInfo,
            name: 'User',
            meta: {requiresAuth: true}
        },
        //GUEST
        { 
            path: '/login',
            component: Login,
            name: 'Login',
            meta: {guest: true}
        },
    ]
}