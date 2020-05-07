<!doctype html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>freeLAB</title>

            <link rel="stylesheet" type="text/css" href="css/app.css">
        </head>

        <body class="site">
            <div id="app">
                <app></app>
            </div>
            <script type="text/javascript" src="js/vueapp.js"></script>
        </body>
        
    </html>