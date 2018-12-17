@extends('layout.app')

@section('content')


<h5> Mzumbe Goes Here! </h5>

<div>

<div>
<p align ="right"><img src="/octicons/build/svg/arrow-down.svg"> {{ $downloads }}</img></p>
<div class="alert alert-success" role="alert">
  Give it a click if you like it => <a href="/likes/count" class="alert-link">Like</a>.
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Individual Cover Page Only</h5>
        <p class="card-text">Download the choice of your own Microsoft word edition.</p>
        <a href="/themes/download/9" class="btn btn-primary">2007</a>
        <a href="/themes/download/1" class="btn btn-primary">2013</a>
      </div>
    </div>
  </div>
</div>

<br> 

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Individual Cover Page + Reference</h5>
        <p class="card-text">Download the choice of your own Microsoft word edition.</p>
        <a href="/themes/download/10" class="btn btn-primary">2007</a>
        <a href="/themes/download/2" class="btn btn-primary">2013</a>
      </div>
    </div>
  </div>
</div>

<br>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Group Cover Page Only</h5>
        <p class="card-text">Download the choice of your own Microsoft word edition.</p>
        <a href="/themes/download/11" class="btn btn-primary">2007</a>
        <a href="/themes/download/3" class="btn btn-primary">2013</a>
      </div>
    </div>
  </div>
</div>

<br> 

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Group Cover Page + Reference</h5>
        <p class="card-text">Download the choice of your own Microsoft word edition.</p>
        <a href="/themes/download/12" class="btn btn-primary">2007</a>
        <a href="/themes/download/4" class="btn btn-primary">2013</a>
      </div>
    </div>
  </div>
</div>

<br>



@endsection