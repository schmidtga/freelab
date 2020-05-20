import Vue from 'vue'
import VueRouter from 'vue-router'

import AOS from 'aos'
import 'aos/dist/aos.css'

Vue.use(VueRouter)

import App from './components/App'
import Home from './components/Home'
import Menu from './components/Menu'
import Project from './components/Project'

const router = new VueRouter({
    routes: [{
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/project/:id',
            name: 'project',
            component: Project,
        },
        {
            path: '/menu',
            name: 'menu',
            component: Menu,
        },
    ],
})
const app = new Vue({
    created() {
        AOS.init()
    },
    el: '#app',
    router,
    components: { App },
    template: '<App/>'
})