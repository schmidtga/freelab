import Vue from 'vue'
import VueRouter from 'vue-router'

import AOS from 'aos'
import 'aos/dist/aos.css'

Vue.use(VueRouter)

import App from './components/App'
import Home from './components/Home'
import Menu from './components/Menu'
import Project from './components/Project'
import NotFound from './components/NotFound'

const routes = [{
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
    {
        path: "*",
        name: 'notfound',
        component: NotFound,
    }
]

const router = new VueRouter({
    mode: 'history',
    history: true,
    routes: routes,
    base: '/'
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