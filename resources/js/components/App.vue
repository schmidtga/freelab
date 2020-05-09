<template>
    <div>
        <nav class="navbar fixed-top">
            <router-link :to="{ name: 'home' }" class="nav-brand">freeLAB</router-link>
            <div class="container">
                <ul class="navbar-nav">
                    <router-link :to="{ name: 'project' }" class="nav-link" >ambulante</router-link>
                </ul>
            </div>
        </nav>
        <main>
            <router-view></router-view>
        </main>
    </div>
</template>
<script>
    export default {}
</script>