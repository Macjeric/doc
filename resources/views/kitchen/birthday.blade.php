@extends('layout.app')

@section('content')

<div>
	<a href="/kitchen" class="btn btn-info " role="button" aria-pressed="true">Back to Kitchen</a>
</div>

	<div class="ord-card">
		{{-- <div class="ord-box"> --}}
			{{-- left --}}
		<div class="ord-cardleft">
				{{-- <a class="kit-pill" href="/kitchen/birthday">Birthday</a> --}}
				<h4 style="padding-left: 30px; padding-top: 20px;"> Create Order </h4> <hr>
				{{-- <a href="birthday"><img src="/images/bd.jpg" class="round" width="110" height="100"></img></a> --}}
			<form method="POST" action="/kitchen/graduation">
			    @csrf

			      <div class="form-group ">
			                <label for="name" class="col-sm-4 col-form-label">Name</label>
			            <div class="col-sm-7">
			                 <input type="text" class="form-control" name="name" placeholder="Your Name" required>
			            </div>
			     </div>

			     <div class="form-group ">
			                 <label for="pnum" class="col-sm-4 col-form-label">Phone number</label>
			            <div class="col-sm-7">
			                 <input type="text" class="form-control" name="pnum" placeholder="Phone #" pattern="[0-9]{10}" required>
			            </div>
			  	</div>

			  	<div class="form-group ">
					                <label for="choice" class="col-sm-4 col-form-label">Cake type</label>
					            <div class="col-sm-12">
					              <select class="form-control col-sm-7" name ="choice">
                        				<option value="Graduation-Cake" >Birthday-Cake</option>
                        			</select>
                        		</div>
                        	</div>
                        	

			     <div class="form-group ">
			                 <label for="quantity" class="col-sm-4 col-form-label">Quantity</label>
			            <div class="col-sm-7">
			                 <input type="number" class="form-control" name="quantity" placeholder="Cake(s) Quantity" pattern="[0-9]" required>
			            </div>
			  	</div>


			  	<div class="form-group ">
			                 <label for="kgs" class="col-sm-4 col-form-label">Kg(s) Optional</label>
			            <div class="col-sm-7">
			                 <input type="number" class="form-control" name="kgs" placeholder="Cake(s) kgs" >
			            </div>
			  	</div>

			<div class="form-group " style="margin-top: 35px; ">
			  		<div class="col-md-8 col-md-offset-4">
						<button type="submit" class="btn btn-primary">Create Order</button>
					</div>
			</div>
		</div>
</form>	


						{{-- right --}}
						<div class="card-righta" style="margin-top: 88px; padding-right: 30px;">
							<h4>
								<a class="card-title">Birthday Cake</a>
							</h4>
							<p>
								You are Ordering a Birthday Cake
							</p>
								<img src="/images/bd.jpg" class="round" width="110" height="100"></img>

								<div style="margin-top: 10px;">
									<small>Contact: 0743-600-799</small>
								</div>
						</div>


	{{-- </div>			 --}}
		</div>

@endsection
