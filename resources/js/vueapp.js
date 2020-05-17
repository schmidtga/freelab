import Vue from 'vue'
import VueRouter from 'vue-router'

import AOS from 'aos'
import 'aos/dist/aos.css'

Vue.use(VueRouter)

import App from './components/App'
import Home from './components/Home'
import ProjectShow from './components/ProjectShow'
import ProjectIndex from './components/ProjectIndex'

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/project/:id',
            name: 'project.show',
            component: ProjectShow,
        },
        {
            path: '/projects',
            name: 'project.index',
            component: ProjectIndex,
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