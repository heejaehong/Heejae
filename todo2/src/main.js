import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import App from './App.vue'
import Auth from './package/auth/auth'

import {routes} from './routes'

Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(Auth);


const router = new VueRouter({
    mode:'history',
    routes //routes:routes 와 동일함
});

new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
