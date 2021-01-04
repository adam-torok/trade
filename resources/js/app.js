window.Vue = require('vue');
window._ = require('lodash');
window.Popper = require('popper.js').default;

import Echo from 'laravel-echo'
window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster : 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted : true,
});
window.axios = require('axios');

window.Echo.private('trader').listen('NewMessage',function(e){
    console.log('twist tonhaltorzs');
})

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

Vue.component('chat-app', require('./components/ChatApp.vue').default);

const chat = new Vue({
    el: '.chats',
});

