import Vue from 'vue'
import VueRouter from 'vue-router'

import AOS from 'aos'
import 'aos/dist/aos.css'

Vue.use(VueRouter)

import App from './components/App'
import Home from './components/Home'
import Project from './components/Project'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
            props: { title: "HOME" }
        },
        {
            path: '/project',
            name: 'project',
            component: Project,
            props: { 
                title: "Ambulante",
                author : {
                    name : "Fisayo Afolayan",
                    role : "Software Engineer",
                    code : "Always keep it clean"
                }
            }
        },    
    ],
})
const app = new Vue({
    created () {
        AOS.init()
    },
    el: '#app',
    router,
    components: { App },
    template: '<App/>'
});