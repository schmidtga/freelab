<template>

    <div class="container pt-5">

        <div class="row pt-5">
            <div class="col-12 py-1">
                <button class="btn btn-success btn-lg" v-on:click="reloadPage">Refresh</button>
            </div>
            <div class="col-12 py-1">
                <canvas id="canvas" ref="canvas"></canvas>
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        props : ['title'],

        mounted() {
            this.init()
        },

        computed: {
            canvas: function () {
                return this.$refs.canvas
            },
            ctx: function () {
                return this.canvas.getContext('2d')
            }
        },

        methods: {
            init: function () {

                const width = 1000
                const height = 610

                this.canvas.width = width
                this.canvas.height = height
                
                this.drawRectangle(0, 0, width, height, this.randomColor(), this.ctx)

                for (let index = 60; index < 500; index += 10) {
                    if (index == 100) {
                        this.drawRectangle(60, 60, 180, 180, this.randomColor(), this.ctx)
                    }
                    if (index == 150) {
                        this.drawRectangle(80, 80, 220, 220, this.randomColor(), this.ctx)
                    }
                    if (index == 250) {
                        this.drawRectangle(100, 100, 240, 240,  this.randomColor(), this.ctx)
                    }
                    if (index == 300) {
                        this.drawRectangle(120, 120, 260, 260,  this.randomColor(), this.ctx)
                    }
                    if (index == 350) {
                        this.drawRectangle(140, 140, 280, 280,  this.randomColor(), this.ctx)
                    }
                    if (index == 400) {
                        this.drawRectangle(160, 160, 300, 300,  this.randomColor(), this.ctx)
                    }
                    this.drawCircle(index, index, 50, 0, 2, this.randomColor(), index, this.ctx)
                }

                this.drawTriangle(480, 480, 480, 600, 600, 600, this.randomColor(), this.ctx)
                

            },
            drawRectangle: function (x, y, width, height, hexColor, ctx) {

                ctx.beginPath()
                ctx.rect(x, y, width, height)
                ctx.fillStyle = hexColor
                ctx.fill()

            },
            drawTriangle: function (vert1, vert1Line, vert2, vert2Line, vert3, vert3Line, hexColor, ctx) {

                ctx.beginPath()
                ctx.moveTo(vert1, vert1Line)
                ctx.lineTo(vert2, vert2Line)
                ctx.lineTo(vert3, vert3Line)
                ctx.closePath()
                ctx.fillStyle = hexColor
                ctx.fill()

            },
            drawCircle: function (x, y, size, cut, full, hexColor, opacity, ctx) {

                ctx.beginPath()
                ctx.arc(x, y, size, cut, full*Math.PI)
                ctx.globalAlpha = "." + opacity
                ctx.fillStyle = hexColor
                ctx.fill()
            
            },
            randomColor: function () {
                const randomColor = "#" + Math.floor(Math.random()*16777215).toString(16)
                return randomColor
            },
            reloadPage: function (){
                window.location.reload()
            },
        },
        
    }

    

</script>
