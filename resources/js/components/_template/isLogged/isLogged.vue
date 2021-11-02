<template>
<div>
    <Sidebar/>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-heading">
            <Topbar @functionProp="logout" :username="username" :firstname="firstname"/>
            <!-- <Topbar v-if="infouser" @functionProp="logout" :username="infouser.username"/> -->

            <div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <div class="x_panel">
                            <!-- <div class="x_title"><b>Titulo</b></div> -->
                            <!-- <div class="x_title"><b>@yield('ventana_t')</b></div>
                            @yield('content')                        
                            </div> -->
                            <router-view/>
                        </div>    
                    </div>
                </section>                
                <Footer/>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import Sidebar from './sub/Sidebar.vue'
import Footer from './sub/Footer.vue'
import Topbar from './sub/Topbar.vue'
import {mapActions, mapState} from 'vuex'

export default {
    components: { Footer, Sidebar, Topbar },
    mounted(){
        this.getUser();
    },
    methods: {
        ...mapActions(['getUser']),
        logout(){
            axios.post('api/logout')
            .then(() => {
                localStorage.removeItem('token')
                this.$router.push('/login')
            })
            .catch((errors) => {
                console.log(errors)
            })
        },
    },
    computed: {
        ...mapState({            
            //user: state => state.user
            username: state => state.user.infouser.username,
            firstname: state => state.user.details.firstname
        }),
    }
}
</script>