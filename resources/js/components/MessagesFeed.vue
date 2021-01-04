<template>
    <div class="feeder">
        <div v-if="contact" id='feed' class="feed" ref="feed">
        <div v-for="message in messages" :key="message.id">
            <div :class="`flex p-1 items-end ${message.to == contact.id ? '' : 'justify-end'}`">
                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-end">
                    <span :class="`message block px-4 py-2 rounded-lg font-lg rounded-bl-none
                            ${ message.to == contact.id
                                ? '  bg-gray-300 text-gray-600'
                                : '  bg-yellow-600 text-white'
                            }`
                        ">
                        {{ message.text }}
                    </span>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    props: {
        contact: {
            type: Object
        },
        messages: {
            type: Array,
            required: true
        }
    },
    methods: {
    scrollToEnd() {
            setTimeout(() => {
            var container = document.querySelector(".conversation");
            var scrollHeight = container.scrollHeight;
            container.scrollTop = scrollHeight;
            }, 50);
        },
    },
    mounted(){
        this.scrollToEnd();
    },
    watch: {
        contact(contact) {
            this.scrollToEnd();
        },
        messages(messages) {
            this.scrollToEnd();
        }
    }
};
</script>
