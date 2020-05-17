<template>
    <div>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/">FreeLAB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <project-index></project-index>
            </div>
        </nav>
        <main>
            <router-view :key="$route.fullPath"></router-view>
        </main>
    </div>
</template>
<script>

    import ProjectIndex from './ProjectIndex'

    export default {
        components: {
            ProjectIndex
        }
    }

</script>