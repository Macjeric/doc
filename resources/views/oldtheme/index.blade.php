@extends('layout.app')

@section('content')

<h4>Start</h4>

<!-- <form method = "POST" action="/documents" enctype="multipart/form-data"> -->

{{ csrf_field() }}

<!-- <input type="file" name="document"></input> -->

<!-- <button type="submit"> Save doc </button> -->




<!-- download => https://drive.google.com/uc?authuser=0&id=168mBZZ64a3s58qgzdiqH599UMgr8y8Yl&export=download -->

{!!Form::open(['action' => 'SampleController@index', 'method' => 'GET'])!!}

@csrf
<div class="form-group">
  {{Form::label('choice', 'Choose your Theme:')}}
      <select name="themetype" class="form-control">
      
        <option value ="CP-only" >Cover Page Only</option>
        <option value="CP-R" >Cover Page & Reference</option>
        <option value="3" >UDSM</option>
        <option value="4" >Arusha Institute of Accounts</option>
        
      </select>
  </div>

  <div class="form-group">
  {{Form::label('university', 'University Name:') }}
      <select name="university" class="form-control">
      
        <option value ="MU" >Mzumbe University</option>
        <option value="SUA" >Sokoine University of Angriculture</option>
        <option value="UDSM" >UDSM</option>
        <option value="AIA" >Arusha Institute of Accounts</option>
        
      </select>
  </div>

   <div class="form-group">
  {{Form::label('msoffice', 'Office type:')}}
      <select name="msoffice" class="form-control">
      
        <option value ="w2007" >Word 2007</option>
        <option value="w2010" >Word 2010</option>
        <option value="w2013" >Word 2013</option>
        <option value="w2016" >Word 2016</option>
        
      </select>
  </div>

  <div>
  {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
 

  </div>
</form>

<br></br>

@endsection