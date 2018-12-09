@extends('layout.app')

@section('content')

<h2 align ="center">Just Do It! </h2>
<p>A Place were you can write down your tasks as Fast as Possible, by getting your document type
    in seconds. </p>

                

                <h3>Getting Started</h3>
                    <ul>
                    <li><a href="#using">Using</a></li>
                    <li><a href="#additions">Configuration</a></li>
                    
                    </ul>
               
            <div class="front-text">            
            <p><a name="using"></a></p>
              <h3 align="center" > Using </h3>
              <p>
                  Move to Themes option, select your university and choose the right made document you prefer, 
                  then download it. 
                  Make Simple editing and fill the required fields </p>
<p>{{ $likes }}</p>


<br></br>

<div class="alert alert-success" role="alert">
  Do you like it? Give it a click if you like <a href="/likes/count" class="alert-link">Like</a>.
</div>

<!-- <div class="float-right">Float right on all viewport sizes</div><br> -->


<!-- <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p> A Modern way to write down your task at a very fast and efficient way!  .</p>
  <hr>
  <p class="mb-0">Whenever you need to, you can write down your tasks anywhere you want.</p>
</div> -->




    @endsection