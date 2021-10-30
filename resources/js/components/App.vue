<template>
    <!-- Cuando haya auth -->
    <!-- <div v-if="thisislogged">           <mainView/>  </div>
    <div v-else> <login @functionProp="loginNow"/>   </div> -->

    <div>  <mainView/>  </div>
</template>

<script>
import mainView from './_template/isLogged/isLogged.vue';
import login from './_template/login/login.vue';
export default {    
    components: { mainView, login },
    props: {
        user: { type: [Object], required: false},
        islogged: Boolean
    },
    data() {
        return{ thisislogged: this.islogged }
    },
    methods: {
        loginNow(){ this.thisislogged = true; }
    }
}
</script>