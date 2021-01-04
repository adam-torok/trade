<template>
    <div class="chat-app">
        <Conversation
            :contact="selectedContact"
            :messages="messages"
            @new="saveNewMessage"
        />
        <ContactList :contacts="contacts" @selected="startConversationWith" />
    </div>
</template>

<script>
import Conversation from "./Conversation.vue";
import ContactList from "./ContactList.vue";
import axios from "axios";

export default {
    props: {
        user: Object,
        required: true
    },
    components: {
        Conversation,
        ContactList
    },
    data() {
        return {
            selectedContact: null,
            messages: [],
            contacts: []
        };
    },
    mounted() {
        Echo.private(`messages${this.user.id}`).listen('NewMessage', e => {
            console.log(helo);
            this.handleIncoming(e.message);
        });

        axios.get("/contacts").then(response => {
            this.contacts = response.data;
        });
    },
    methods: {
        startConversationWith(contact) {
            this.updateUnreadCount(contact, true);
            axios.get(`/conversations/${contact.id}`).then(response => {
                this.messages = response.data;
                this.selectedContact = contact;
            });
        },
        saveNewMessage(message) {
            this.messages.push(message);
        },
        handleIncoming(message) {
            if (
                this.selectedContact &&
                message.from == this.selectedContact.id
            ) {
                this.saveNewMessage(message);
                return;
            }
        this.updateUnreadCount(message.from_contact, false);
        },
        updateUnreadCount(contact, reset) {
            this.contacts = this.contacts.map(single => {
                if (single.id !== contact.id) {
                    return single;
                }
                if (reset) single.unread = 0;
                else single.unread += 1;
                return single;
            });
        }
    }
};
</script>

<style lang="scss">
.chat-app {
    display: flex;
}
</style>
