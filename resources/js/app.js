require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('form-vehicles', require('./components/vehicles/forms/VehiclesForms.vue').default);
Vue.component('list-vehicles', require('./components/vehicles/lists/VehiclesList.vue').default);

const app = new Vue({
    el: '#app',
});
