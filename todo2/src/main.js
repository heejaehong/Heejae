import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import App from './App.vue'
import Auth from './package/auth/auth'

import {routes} from './routes'

Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(Auth);

Vue.http.options.root = 'http://localhost:8001/api/';

const router = new VueRouter({
    mode:'history',
    routes //routes:routes 와 동일함
});

router.beforeEach((to, from, next) => {
    if(to.matched.some(record => record.meta.forAuth)) {

        if (Vue.auth.isAuthenticated()) {
            next();

        } else {
            next({name: 'Login'});
        }

    } else{
        next();
    }
});




new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
