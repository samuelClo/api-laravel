<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="/css/app.css" rel="stylesheet" >
    </head>
    <body>
        <div id="app">
            <router-view></router-view>


            <p>
                <router-link :to="{ name: 'home' }">Home</router-link> |
                <router-link :to="{ name: 'hello' }">Hello World</router-link>
            </p>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
