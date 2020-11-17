require('./bootstrap');

import Vue from 'vue'

// For Http Calls
window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
let token = document.head.querySelector('meta[name="csrf-token"]');

Vue.prototype.$web = axios.create({
    headers: {
        "X-CSRF-TOKEN": token.content
    }
});

/**
 * Register components.
 */
const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

new Vue({
    el: '#app',
});
