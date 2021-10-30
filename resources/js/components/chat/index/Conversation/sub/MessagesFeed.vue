<template>
    <div class="card-body pt-4 bg-grey">
        <div class="chat-content" v-if="contact" ref="feed">
            <div v-for="message in messages" :key="message.id" class="chat chat-body" :class="compClass(contact.id,message.to)">
                <div class="chat-message">{{message.text}}</div>
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
    props: {
        contact: { type: Object },
        messages: { type: Array, required: true }
    },
    methods: {
        send(){
            if(this.message == ''){
                return;
            }
            this.$emit('send',this.message);
            this.message = '';
        },

        compClass(contactId,messageTo){            
            return (contactId == messageTo) ? "chat chat-left" : "chat";            
        },
        scrollToBottom(){
            setTimeout(() => {
                this.$refs.feed.scrollTop = this.$refs.feed.scrollHeight - this.$refs.feed.clientHeight;
            },50)
        }
    },
    watch: {
        contact(contact){ this.scrollToBottom();},
        messages(messages){ this.scrollToBottom();}
    }
}
</script>