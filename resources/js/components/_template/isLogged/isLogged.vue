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
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="align-items-center">
                                    <!-- <h3>@yield('title')</h3> -->
                                    <h3>Titulo</h3>
                                    <nav aria-label="breadcrumb" class="breadcrumb-header float-lg-start">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Alert</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            
                            <div class="col-3">
                                <div class="d-flex align-items-center float-end"  id="dropdownMenuButtonIcon" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer">
                                    <div class="avatar avatar-xl">
                                        <img src="template/images/faces/1.jpg" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">John Duck</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                    <div class="ms-3">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonIcon" style="margin: 0px;">
                                    <!-- <a class="dropdown-item" href="{{ action('usuarioController@getInfo') }}"><i class="fas fa-user-circle"></i>Ver información de la cuenta</a> -->
                                    <a class="dropdown-item" href="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> Cerrar sesión</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
export default {
    data(){ return { token: localStorage.getItem('token') } },
    components: {
        Footer, Sidebar
    },
    mounted() {
        window.axios.defaults.headers.common['Authorization'] = `Bearer ${this.token}`
        //this.getEmployees() 
        axios.get('api/user').then((response) => {
            this.currentUser = response.data
            console.log(this.currentUser)
        }).catch((errors) => {
            console.log(errors)
            console.log("dssadasd")
        })
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