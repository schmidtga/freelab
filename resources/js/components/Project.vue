<template>

    <div class="body-container clearfix">
        
        <span class="arrow up">
            <i class="fas fa-angle-double-up"></i>
        </span>

        <div class="img-container" :style="project.background">


            <div class="text-container" 
                data-aos="fade"
                data-aos-offset="100"
                data-aos-easing="ease-in-out">

                <div class="title-text-container py-5">
                    <h1>{{project.title}}</h1>
                    
                </div>
                <div class="body-text-container py-5">
                    <div v-html="project.description"></div>
                    <div class="container clearfix py-5">
                        <img class="img-fluid" :src="project.url" :alt="project.title">
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
                    url: "",
                    background: "",
                    description: ""
                },
            };
        },
        created() {
            api.find(this.$route.params.id).then((response) => {
                this.project = response.data.data
                this.project.url = '/storage/projects/' + this.project.image
                this.project.background = 'backgroundImage: url(' + this.project.url + ')'
                console.log(this.project.background)
            })
        },
    };
</script>