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
            <Topbar @functionProp="logout" :info="info"/>

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
export default {
    data(){ 
        return { 
            token: localStorage.getItem('token'),
            info: {
                username: '',
                name: 'asdasd'
            }
        } 
    },
    components: { Footer, Sidebar, Topbar },
    created(){
        window.axios.defaults.headers.common['Authorization'] = `Bearer ${this.token}`
        axios.get('api/user').then((response) => {
            this.currentUser = response.data
            this.info.username = this.currentUser.username
            this.globalId = this.info.id
            //alert(this.appName);
        }).catch((errors) => {
            console.log(errors)
        })
    },
    mounted() {
    },
    methods: {
        logout(){
            axios.post('api/logout')
            .then((response) => {
                localStorage.removeItem('token')
                this.$router.push('/login')
            })
            .catch((errors) => {
                console.log(errors)
            })
        },
    }
}
</script>