@extends('layout.app')

@section('content')

<div>    
   <h5> IAA Goes Here!</h5>

<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Hellooo!</h4>
      <p>We now support Microsoft Word 2019. Take a look down there.</p>
</div>

  <p>So do you need a cake for your birthday or Whatsoever? Check Out <a href="/kitchen">Jo's Kitchen</a> for cool cake.</p>
    
    </div>
        <div>
            <a href="/kitchen"><img src="/images/jos-kit.svg" width="300" height="200" align="left"></img></a>
        </div>
               

        <p align ="right"><img src="/octicons/build/svg/arrow-down.svg"> {{ $downloads }} </img></p>
        <div class="alert alert-success" role="alert">
          Give it a click if you like it => <a href="/likes/count" class="alert-link">Like</a>.
        </div> 

        <button class="button btn btn-success btn-block" data-sharer="whatsapp" data-title="Download your cover pages on the fly:" data-url="https://pagesmade.com/uni/iaa">Share on Whatsapp</button><br/>

                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Individual Cover Page Only</h5>
                            <p class="card-text">Download the choice of your own Microsoft word edition.</p>
                            <a href="/themes/download/13" class="btn btn-primary">2007</a>
                            <a href="/themes/download/5" class="btn btn-primary">2013</a>
                            <a href="/themes/download/21" class="btn btn-primary">2019</a>

                          </div>
                        </div>
                      </div>
                    </div>

                    <br/> 

                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Individual Cover Page + Reference</h5>
                            <p class="card-text">Download the choice of your own Microsoft word edition.</p>
                            <a href="/themes/download/14" class="btn btn-primary">2007</a>
                            <a href="/themes/download/6" class="btn btn-primary">2013</a>
                            <a href="/themes/download/22" class="btn btn-primary">2019</a>

                          </div>
                        </div>
                      </div>
                    </div>

                    <br />

                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Group Cover Page Only</h5>
                            <p class="card-text">Download the choice of your own Microsoft word edition.</p>
                            <a href="/themes/download/15" class="btn btn-primary">2007</a>
                            <a href="/themes/download/7" class="btn btn-primary">2013</a>
                            <a href="/themes/download/23" class="btn btn-primary">2019</a>

                          </div>
                        </div>
                      </div>
                    </div>

                    <br /> 

                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Group Cover Page + Reference</h5>
                            <p class="card-text">Download the choice of your own Microsoft word edition.</p>
                            <a href="/themes/download/16" class="btn btn-primary">2007</a>
                            <a href="/themes/download/8" class="btn btn-primary">2013</a>
                            <a href="/themes/download/24" class="btn btn-primary">2019</a>

                          </div>
                        </div>
                      </div>
                    </div> 

                    <br />

    </div>     
        
       
@endsection