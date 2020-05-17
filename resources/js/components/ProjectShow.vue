<template>

    <div class="body-container clearfix">

        <div class="img-container" :style="{ backgroundImage: 'url(' + project.image + ')' }">

            <div class="text-container" data-aos="fade">
                <div class="title-text-container py-5">
                    <h1>{{project.title}}</h1>
                    <span class="arrow up">
                        <i class="fas fa-angle-double-up"></i>
                    </span>
                </div>
                <div class="body-text-container py-5">
                    <div v-html="project.description"></div>
                    <div class="container clearfix py-5">
                        <img class="img-fluid" :src="project.image" :alt="project.title">
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

    import api from '../api/projects';

    export default {
        data() {
            return {
                project: {
                    id: null,
                    title: "",
                    image: "",
                    description: ""
                }
            };
        },
        created() {
            api.find(this.$route.params.id).then((response) => {
                this.project = response.data.data
                this.project.image = '/storage/projects/' + this.project.image
            })
        },
    };
</script>