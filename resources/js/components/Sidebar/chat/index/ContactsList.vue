<template>
    <div class="card">
        <div class="card-header">Lista de contactos</div>
        <div class="card-body">
            <div class="list-group">
                <a v-for="contact in sortedContacts" :key="contact.id" @click="selectContact(contact)" :class="compClass(contact,'general')" >
                    <div class="d-flex w-100 justify-content-between">
                        <!-- <h5 class="mb-1 text-white">{{contact.username}}</h5> -->
                        <h5 :class="compClass(contact,'username')">{{contact.username}}</h5>
                        <small>Hace 3 días</small>
                    </div>
                    <span v-if="contact.unread">{{contact.unread}}</span>
                    <!-- <p class="mb-1">
                        Donec id elit non mi porta gravida at eget metus. Maecenas sed
                        diam eget risus varius blandit.
                    </p> -->
                    <small>{{contact.email}}</small>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        contacts: { type: Array, default: [] }
    },
    data() {
        return {
            selected: this.contacts.length ? this.contacts[0] : null
            //selected: 0
            //selected: null
        }
    },
    methods: {
        compClass(contact,type){
            if(contact == this.selected){
                if(type=="general"){
                    return "list-group-item list-group-item-action active"
                }else{
                    return"mb-1 text-white"
                }
            } else {
                if(type=="general"){
                    return "list-group-item list-group-item-action"
                }else{
                    return"mb-1"
                }
                
            }
        },
        selectContact(contact) {
            //this.selected = contact.id - 2;
            this.selected = contact;
            this.$emit('selected', contact);
            console.log(this.selected);
        }
    },
    computed: {
        sortedContacts() {
            return _.sortBy(this.contacts, [(contact) => {
                if (contact == this.selected) {
                    return Infinity;
                }

                return contact.unread;
            }]).reverse();
        }
    }
    // methods: {
    //     selectContact(index,contact){
    //         this.selected = index;
    //         this.$emit('selected', contact);
    //     }
    // }
}
</script>