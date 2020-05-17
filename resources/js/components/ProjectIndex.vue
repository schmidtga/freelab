<template>
    <div class="projects">
        <ul v-if="projects" class="navbar-nav mr-auto">
            <li v-for="project in projects" class="nav-item">
                <router-link :to="{ name: 'project.show', params: { id: project.id }}" class="nav-link">{{project.title}}</router-link>
            </li>
        </ul>
    </div>
</template>
<script>

    import api from '../api/projects';

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
                api.all().then((response) => {
                    this.projects = response.data.data
                })
            }
        }
    }
</script>