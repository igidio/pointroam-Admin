<template>
    <div class="card">
        <link rel="stylesheet" href="template/css/widgets/chat.css">
        <!-- Encabezdo -->
        <div class="card-header">
            <div class="media d-flex align-items-center">
                <div class="avatar me-3">
                    <img src="template/images/faces/1.jpg" alt="" srcset="">
                    <span class="avatar-status bg-success"></span>
                </div>
                <div class="name flex-grow-1">
                    <h6 class="mb-0">{{contact ? contact.name : 'Selecciona un contacto'}}</h6>
                    <span class="text-xs" :if="contact">Online</span>
                </div>
                <button class="btn btn-sm">
                    <i data-feather="x"></i>
                </button>
            </div>
        </div>
        
        <MessagesFeed :contact="contact" :messages="messages"/>
        <MessagesComposer @send="sendMessage"/>

    </div>
</template>

<script>
import MessagesFeed from './sub/MessagesFeed.vue'
import MessagesComposer from './sub/MessagesComposer.vue'

export default {
    props: {
        //contact: Array,
        contact: {type: Object, default: null},
        messages: {type: Array, default: []},
    },
    components: { MessagesFeed,MessagesComposer },
    methods: {
        sendMessage(text){
            if (!this.contact) {
                return;
            }

            axios.post('api/conversation/send', {
                contact_id: this.contact.id,
                text: text
            }).then((response) => {
                this.$emit('new', response.data);
            })
        }
    }
}
</script>