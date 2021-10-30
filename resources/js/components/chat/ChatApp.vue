<template>
    <div class="card">
        <div class="card-header">Este es el encabezado</div>
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <Conversation :contact="selectedContact" :messages="messages" @new="saveNewMessage"/>
                </div>
                <div class="col-4">
                    <ContactsList :contacts="contacts" @selected="startConversationWith"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Conversation from './index/Conversation/Conversation.vue';
import ContactsList from './index/ContactsList.vue';

export default {
    // props: {
    //     user: {
    //         type: Object,
    //         required: true
    //     }
    // },
    data() {
        return {
            selectedContact: null,
            messages: [],
            contacts: []
        }
    },
    components: { Conversation, ContactsList },
    mounted(){
        axios.get('api/contacts').then(response => {
            this.contacts = response.data
        });
    },
    methods: {
        startConversationWith(contact){
            //axios.get('/conversation/'+ contact.id)
            axios.get('api/conversation/'+contact.id)
            .then(response => {
                    this.messages = response.data;
                    this.selectedContact = contact;
            })
        },
        saveNewMessage(text){
            this.messages.push(text);
        }
    },
}
</script>

