import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'

import {routes} from './routes'

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes //routes:routes 와 동일함
});

new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
