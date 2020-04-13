require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
import App from './App.vue';
import router from './router'



Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});