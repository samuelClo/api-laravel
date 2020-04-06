import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Edit from './views/Edit'
import Home from './views/Home'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/edit/:id',
            name: 'edit',
            component: Edit,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
