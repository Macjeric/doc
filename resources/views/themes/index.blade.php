@extends('layout.app')

@section('content')


<div class="row">

        <!-- <div class="col">
        <a href ="/themes/uni/mu"> <img src="/images/mu.jpg"</img> </a>  
        
        </div>

        <div class="col">
        <a href ="/themes/uni/iaa"> <img src="/images/iaa.jpg"</img>    </a>           
        </div> -->

        <div class ="col">
        <svg width="300" height="300"> <a href ="/themes/uni/mu">
        <rect width ="170" height ="170" style ="fill:rgb(0,50,255); stroke:rgb(0,0,0)" />
        <text x="50" y="100" font-family="sans-serif" font-size="40px" fill="black">MU</text></a>
        </svg>
        </div>

        <div class ="col">
        <svg width="300" height="300"> <a href ="/themes/uni/iaa">
        <rect width ="170" height ="170" style ="fill:rgb(0,50,255); stroke:rgb(0,0,0)" />
        <text x="50" y="100" font-family="sans-serif" font-size="40px" fill="black">IAA</text></a>
        </svg>
        </div>


        
</div>
   


@endsection