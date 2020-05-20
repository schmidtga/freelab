<template>

    <div class="home">
        <canvas id="canvas" ref="canvas"></canvas>
        <button class="refresh btn btn-success btn-lg" @click="reloadPage">Refresh</button>
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

                const width = window.innerWidth
                const height = window.innerHeight

                this.canvas.width = width
                this.canvas.height = height
                
                this.drawRectangle(0, 0, width, height, this.randomColor(), this.ctx)

                for (let index = 120; index < 500; index += 10) {
                    if (index == 150) {
                        this.drawRectangle(index, index, 180, 180, this.randomColor(), this.ctx)
                    }
                    if (index == 200) {
                        this.drawRectangle(index, index, 220, 220, this.randomColor(), this.ctx)
                    }
                    if (index == 250) {
                        this.drawRectangle(index, index, 240, 240,  this.randomColor(), this.ctx)
                    }
                    if (index == 300) {
                        this.drawRectangle(index, index, 260, 260,  this.randomColor(), this.ctx)
                    }
                    if (index == 350) {
                        this.drawRectangle(index, index, 280, 280,  this.randomColor(), this.ctx)
                    }
                    if (index == 400) {
                        this.drawRectangle(index, index, 300, 300,  this.randomColor(), this.ctx)
                    }
                    if (index == 450) {
                        this.drawRectangle(index, index, 320, 320,  this.randomColor(), this.ctx)
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
