<template>
    <div>
        <div v-if="$route.name == 'Login'"> <login/> </div>
        <div v-else> <mainView/> </div>    
    </div>
</template>

<script>
import mainView from './_template/isLogged/isLogged.vue';
import login from './_template/login/login.vue';
export default {    
    components: { mainView, login },
}
</script>