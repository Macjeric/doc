@extends('layout.app')

@section('content')

<div  align="right">  <img src="/octicons/build/svg/star.svg">  {{ $like }} </img></div>

<h2 align ="center">Cover Pages in Secs </h2>
<p>A Place were you can write down your tasks as Fast as Possible, by getting your document type
    in seconds. </p>

                <button class="button btn btn-success btn-block" data-sharer="whatsapp" data-title="Download your cover pages on the fly:" data-url="https://pagesmade.com">Share on Whatsapp</button> <br>


                <h3>Getting Started</h3>
                    <ul>
                    <li><a href="#using">Using</a></li>
                    <li><a href="#additions">Additions</a></li>
                    <li><a href="#contact">Comment</a></li>

                    
                    </ul>
               
            <!-- <div class="front-text">             -->
            <p><a name="using"></a></p>
              <h3 align="center" > Using </h3>
              <p>
                  Move to <a href="/themes">Themes </a>, select your university and choose the right <a style="color:DodgerBlue;">
                   Microsoft document type (2007/2010/...) </a>
                  you prefer, then download it. Make Simple editing and fill the required fields. Universities are written in a short forms
                  (IAA, MU) you know what it is.
               </p>

            <p><a name="additions"></a></p>
            <h3 align="center" > Additions </h3>
              <p>
                After You have download Microsoft Document and open it, it's views might be unstructured - you need to 
                enable <b> Editing </b> or if that option is not available try to <b> save </b> it by your name and 
                you will be ready to Go!
              </p>

<br></br>

<div class="alert alert-success" role="alert">
  Do you like it? Give it a click if you like <a href="/likes/count" class="alert-link">Like</a>.
</div>

 <p><a name="comment"></a></p>
            <h3 align="center" > Your Opinion </h3>
              <p>You can have your say through: pagesmade@gmail.com
              </p>                






    @endsection