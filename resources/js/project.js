require('./bootstrap');

window.Vue = require('vue');
Vue.component('contact-form', require('./components/ContactForm.vue').default);
const app = new Vue({
    el: '#app'
});