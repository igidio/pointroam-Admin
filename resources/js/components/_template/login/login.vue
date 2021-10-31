<template>
    
<div id="auth">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="template/css/bootstrap.css">
    <link rel="stylesheet" href="template/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="template/css/app.css">
    <link rel="stylesheet" href="template/css/pages/auth.css">
    <div class="row h-40">
        
        <div class="col-lg-5 col-12" id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="template/images/logo/logo.png" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Inicio de sesión</h1>
            <p class="auth-subtitle mb-5">Ingresa con tus datos personales</p>

            <form @submit.prevent="submit_form" autocomplete='off' type="POST">
                <div class="form-group position-relative has-icon-left mb-3">
                    <input type="text" class="form-control form-control-xl" placeholder="Nombre de usuario" v-model.trim="formData.username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Contraseña" v-model.trim="formData.password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Recordar inicio de sesión
                    </label>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-m mt-5" :disabled="validate">
                    Iniciar sesión
                </button>
                <div class="alert alert-light-danger color-danger" v-text="errors.username"></div>
                <div class="alert alert-light-danger color-danger" v-text="errors.password"></div>
            </form>
            <!-- <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Don't have an account? <a href="auth-register.html" class="font-bold">Sign
                        up</a>.</p>
                <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
            </div> -->
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>
</div>

</template>

<script>
export default {
    data() {
        return {
            formData: {
                username: "",
                password: "",
                device_name: 'Browser'
            },
            errors: {}
        }
    },
    // props: {
    //     functionProp: { type: Function }
    // },
    methods: {
        async submit_form(){
            //this.$emit('functionProp')
        //    login(){
                await axios.post('api/login', {
                    username:                      this.formData.username,
                    password:                      this.formData.password,
                    device_name:                   this.formData.device_name,
                })
                .then(response => {
                    localStorage.setItem('token',response.data)
                    this.$router.push('/')
                })
                .catch((errors) => {
                    this.errors = errors.response.data.errors
                })
          //  }

        }
    },
    computed: {
        validate(){            
            return (this.username == "" || this.password == "") ?  true : false;
        }
    }
}
</script>