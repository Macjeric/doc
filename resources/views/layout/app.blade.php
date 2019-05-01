<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

                <!-- Global site tag (gtag.js) -->

            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130660789-1"></script> 
            <script> 
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-130660789-1');
            </script>


        <title>Pages Made | Cover Pages and Documents</title>

        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        {{-- <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" href="/fonts/Camphor-W01-Regular.ttf"> --}}
        <link rel ="stylesheet" href="/css/custom.css">
        <link rel ="stylesheet" href="/css/scustom.css">
        <link rel ="stylesheet" href="/css/kitchen.css">
        <script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>

        
        {{-- <link rel="icon" type="image/png" sizes="32x32" href="{{ favicon(asset('favicon.png')) }}"> --}}


        <!-- <link rel ="stylesheet" href="/css/body.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ favicon(asset('favicon.png')) }}">
        {{-- <link href="//db.onlinewebfonts.com/c/22f912b4b10a938d5f28b7fe79ed7466?family=Camphor+W01+Regular" rel="stylesheet" type="text/css"/> --}}
        <style type="text/css">
                @font-face {
                    font-family: "Camphor W01 Regular";
                    src: url(/fonts/Camphor-W01-Regular.ttf) format("truetype");
                }
                
</style>
         
        {{-- <link rel="stylesheet" href="node_modules/octicons/build/octicons.css">  --}}
        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

        <!-- Styles -->
        <style>
        body {
                font-family: 'Camphor W01 Regular';
            }


   

        html, body {
                background-color: #E8E6E1;
            }

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
                 @if($flash = session('message'))
        <div class ="alert alert-success" role="alert">
            {{$flash}}
        </div>
        @endif


            @include('inc.messages')
                    @yield('content')
           

             
            </div>
        </div>  
</div>  


    <footer>
        
       <div class="wrapper">
       <div>
          <br>
          <p align="center"> @2018-2019 Rights </p>
 </div> 
<div class="footer-contents">
   <div class="dtexts">
         Make it as Simple as possible, just do your work in peace.

 </div>

 <div class="dtexts2">
<h7><b>LEARN</b></h7>
<p><a href="/#"> Nakutunuku </a></p>
     </div>
     </div>
       </div>
             </footer>

   
    
             </body>

</html>
