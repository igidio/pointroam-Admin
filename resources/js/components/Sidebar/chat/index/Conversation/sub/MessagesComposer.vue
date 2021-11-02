<template>
    <div class="card-footer">
        <div class="message-form d-flex flex-direction-column align-items-center">
            <a href="http://" class="black"><i data-feather="smile"></i></a>
            <div class="d-flex flex-grow-1 ml-4">
                <input type="text" class="form-control" placeholder="Escribe algo..." v-model="message" @keydown.enter="send">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            message: ''
        }
    },
    methods: {
        //send(e) {
        send(e) {
            e.preventDefault();

            if( this.message == '' ) { return; }

            this.$emit('send',this.message);
            this.message = ''; 
        }
    }
}
</script>