<template>
    <div class="projects">
        <ul v-if="projects" class="navbar-nav mr-auto">
            <li v-for="project in projects" :key="project.title" class="nav-item">
                <router-link :to="{ name: 'project' }" class="nav-link" >{{project.title}}</router-link>
            </li>
        </ul>
    </div>
</template>
<script>

    import axios from 'axios';
    export default {
        data() {
            return {
                projects: null,
            };
        },
        created() {
            this.fetchData();
        },
        methods: {
            fetchData() {
                this.projects = null
                this.loading = true
                axios
                    .get('/api/project')
                    .then(response => {
                        this.projects = response.data
                    }).catch(error => {
                        console.log(error.response.data.message || error.message)
                    });
            }
        }
    }
</script>