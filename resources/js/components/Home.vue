<template>

    <div class="container pt-5">
        <h1 class="py-5">{{title}}</h1>
        <canvas id="canvas" ref="canvas">
        </canvas>
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
                return this.$refs.canvas;
            },
            ctx: function () {
                return this.canvas.getContext('2d')
            }
        },

        methods: {
            init: function () {

                const width = 900
                const height = 600

                this.canvas.width = width
                this.canvas.height = height
                
                this.drawRectangle(0, 0, width, height, this.randomColor(), this.ctx)

                this.drawRectangle((width/2)-100, (height/2)-150, 200, 300,  this.randomColor(), this.ctx)
                this.drawRectangle(280, 20, 120, 190, this.randomColor(), this.ctx)
                this.drawRectangle(80, 300, 100, 110, this.randomColor(), this.ctx)

                this.drawTriangle(250, 400, 200, 450, 300, 450, this.randomColor(), this.ctx)

                for (let index = 60; index < 500; index += 10) {
                    this.drawCircle(index, index, 50, 0, 2, this.randomColor(), index, this.ctx)
                }

            },
            drawRectangle: function (x, y, width, height, hexColor, ctx) {

                ctx.beginPath()
                ctx.rect(x, y, width, height)
                ctx.fillStyle = hexColor
                ctx.fill()

            },
            drawTriangle: function (vert1, vert1Line, vert2, vert2Line, vert3, vert3Line, hexColor, ctx) {

                ctx.beginPath();
                ctx.moveTo(vert1, vert1Line);
                ctx.lineTo(vert2, vert2Line);
                ctx.lineTo(vert3, vert3Line);
                ctx.closePath()
                ctx.fillStyle = hexColor
                ctx.fill();

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
            }
        },
        
    }

    

</script>
