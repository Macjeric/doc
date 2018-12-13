<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130660789-1"></script> 
            <script> 
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-130660789-1');
            </script>


        <title>Pages Made</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel ="stylesheet" href="/css/custom.css">
        <!-- <link rel ="stylesheet" href="/css/body.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://d3js.org/d3.v5.min.js"></script>
        <link rel="stylesheet" href="node_modules/primer-css/build/build.css">
        <link rel="stylesheet" href="node_modules/octicons/build/octicons.css">
        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->


        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

        <!-- Styles -->
        <style>
     
        </style>
    </head>
        <header class ="section">
            <div class="container"> 
                <div class ="header-top" >
                        <h1><a href ="/">Pages Made</h1></a>

                        <!-- <a href ="/login"> SIGN IN </a> -->
                        <!-- <p> Favs </p> -->
                    </div>
            
                <div class ="nav">
                <a href ="/">Home </a>
                <a href ="/themes">Themes </a>
                
            </div>
            </div>
        </header>
        <body>

<div class="middle">
        <div class ="section">
            <div class ="container">
                <!-- <div class="front-text"> -->
                    @yield('content')
            <!-- </div> -->

             <!-- <div> -->
                 <!-- <img src="/images/blank-coffee-cup.jpg" width="1200px" height="700px"></img> -->
             <!-- </div> -->

             
            </div>
        </div>  
</div>  
    </body>
    <!-- <footer>
                 <p align="center"> @2018 Rights </p>
                 
             </footer> -->
</html>
