<template>

    <div class="body-container clearfix">

        <div class="img-container" style="
            background: url('./storage/projects/ambulantes.jpg') no-repeat fixed;
            background-size: cover;">

            <div class="text-container" data-aos="fade">
                <div class="title-text-container">
                    <h1>{{project.title}}</h1>
                    <span class="arrow up">
                        <i class="fas fa-angle-double-up"></i>
                    </span>
                </div>
                <div class="body-text-container py-5">
                    
                    <div class="container clearfix py-5">
                        <img class="img-fluid" src="/storage/projects/ambulantes.jpg" alt="Ambulante">
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
                    description: ""
                }
            };
        },
        created() {
            api.find(this.$route.params.id).then((response) => {
                this.project = response.data.data
            })
        }
    };
</script>