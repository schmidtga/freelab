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
                
                this.drawRectangle(0, 0, width, height, "#FAFCF1", this.ctx)
                this.drawRectangle((width/2)-100, (height/2)-150, 200, 300,  "#F26D85", this.ctx)
                this.drawRectangle(280, 20, 120, 190, "#E97FF4", this.ctx)
                this.drawRectangle(80, 300, 100, 110, "#A4F3F8", this.ctx)

                this.drawTriangle(250, 400, 200, 450, 300, 450, "#B6FAC1", this.ctx)
                this.drawCircle(300, 200, 50, 0, 2, "#9193F6", this.ctx)

            },
            drawRectangle: function (x, y, width, height, hexColor, ctx) {

                const drawFillRect = (x, y, width, height, hexColor, ctx) => {
                    ctx.beginPath()
                    ctx.rect(x, y, width, height)
                    ctx.fillStyle = hexColor
                    ctx.fill()
                }
                drawFillRect(x, y, width, height, hexColor, ctx)

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
            drawCircle: function (x, y, size, cut, full, hexColor, ctx) {

                ctx.beginPath()
                ctx.arc(x, y, size, cut, full*Math.PI)
                ctx.fillStyle = hexColor
                ctx.fill()
            

            }
        },
        
    }

    

</script>
