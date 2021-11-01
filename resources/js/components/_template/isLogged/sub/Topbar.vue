<template>
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
                        <!-- Mientras no carga -->
                        <div v-if="info.username == ''">
                            <div class="spinner-border text-primary align-items-center float-end" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        <!-- Ya cargado -->
                        <div v-else class="d-flex align-items-center float-end"  id="dropdownMenuButtonIcon" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer">
                                <div class="avatar avatar-xl">
                                    <img src="template/images/faces/1.jpg" alt="I">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">John Duck</h5>
                                    <h6 class="text-muted mb-0" >@{{info.username}}</h6>
                                </div>
                                <div class="ms-3">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonIcon" style="margin: 0px;">
                            <!-- <a class="dropdown-item" href="{{ action('usuarioController@getInfo') }}"><i class="fas fa-user-circle"></i>Ver información de la cuenta</a> -->
                            <a class="dropdown-item" @click="logout"><i class="fas fa-power-off"></i> Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        info: {Type: Object}
    },
    methods: {
        logout(){            
            this.$emit('functionProp')
        }
    }
}
</script>