<template>
    <div class=" conversation overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">
        <div class="chat-head flex sm:items-center justify-between py-3 border-b-2 border-gray-200">
            <div class="flex items-center space-x-4">
                <img :src="'storage/' + contact.profile_image" alt="" class="w-10 sm:w-16 h-10 sm:h-16 rounded-full">
                <div class="flex flex-col leading-tight">
                    <div class="text-2xl mt-1 flex items-center">
                        <span class="text-gray-700 mr-3">{{ contact ? contact.first_name + ' ' + contact.last_name : "Select a contact" }}</span>
                            <span class="text-green-500">
                                <svg width="10" height="10">
                                    <circle cx="5" cy="5" r="5" fill="currentColor"></circle>
                                </svg>
                            </span>
                    </div>
                <span class="text-lg text-gray-600">Hirhedt allat molesztalo</span>
                </div>
            </div>
        </div>
        <MessagesFeed :contact="contact" :messages="messages" />
        <MessageComposer @send="sendMessage" />
    </div>
</template>

<script>
import MessageComposer from "./MessageComposer";
import MessagesFeed from "./MessagesFeed";
import axios from 'axios';

export default {
    components: {
        MessagesFeed,
        MessageComposer
    },
    props: {
        contact: {
            type: Object,
            default: null
        },
        messages: {
            type: Array,
            default() {
                return [];
            }
        }
    },
    methods: {
        sendMessage(text) {
            console.log(this.contact['id']);
            if(!this.contact){
                return;
            }else{
                axios.post('/conversations/send' ,{
                    contact_id: this.contact['id'],
                    text: text
                }).then((response) => {
                    this.$emit('new',response.data);
                })
            }
        }
    }
};
</script>

<style lang="css" scoped>
.chat-head{
    top:0;
    position: sticky;
    background: white;
}
  .conversation{
    flex:10;
    max-height: 500px;
    overflow: scroll;
  }
.scrollbar-w-2::-webkit-scrollbar {
  width: 0.25rem;
  height: 0.25rem;
}

.scrollbar-track-blue-lighter::-webkit-scrollbar-track {
  --bg-opacity: 1;
  background-color: #f7fafc;
  background-color: rgba(247, 250, 252, var(--bg-opacity));
}

.scrollbar-thumb-blue::-webkit-scrollbar-thumb {
  --bg-opacity: 1;
  background-color: #edf2f7;
  background-color: rgba(237, 242, 247, var(--bg-opacity));
}

.scrollbar-thumb-rounded::-webkit-scrollbar-thumb {
  border-radius: 0.25rem;
}
</style>