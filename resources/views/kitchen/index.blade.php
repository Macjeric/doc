@extends('layout.app')

@section('content')

<h2 align="center" style="margin-bottom: 35px;"> Jo's Kitchen </h2>
	<div class="kit-box">			
		<div class="kit-text">
				<h3>Order your brand cake instantly </h3>

				<p>Choose the right choice of cake and place the order. When placing the order make sure you fill all
					neccessary fields required so as to avoid misplacements.

				</p>

				<p>
					Once an order is placed successfully, your cake will be prepared accordingly to the time
					you placed the order. First come first serve. 
				</p>

				<p>
					Soon After you have ordered the cake you need to contact the chef for updates and deliveries.
				</p>
		
			</div>

			<div style="padding-left:5px;" >
				<small>
					<?php 
						$now = Carbon\Carbon::now(); 
        					echo $now->toDayDateTimeString();
      				  ?>
				</small>
				
					<img src="/images/cake00.jpg" width="240" height="200" style="margin-bottom: 30px;"></img>
				
			</div>
	</div>
	
	<div style="margin-bottom: 100px;">
			<button class="button btn btn-success btn-block" data-sharer="whatsapp" data-title="Order your cake on the fly:" data-url="https://pagesmade.com/kitchen">Share on Whatsapp</button> <br>
	
			<a href="https://instagram.com/jos.kitchen_/?hl=en" class=" btn btn-danger btn-block" >Instagram</a>
	</div>

{{-- Birthday --}}
		<div class="kit-card" style="margin-bottom: 30px;">
			{{-- left --}}
			<div class="card-left card-bd">
				<a class="kit-pill" href="/kitchen/birthday">Birthday</a>

				<a href="/kitchen/birthday"><img src="/images/bd.jpg" class="round mob-img" width="110" height="100" ></img></a>

				<p>birthday party</p>
			</div>


			{{-- right --}}
			<div class="card-right">
				<h4>
					<a class="card-title" href="/kitchen/birthday">Birthday Cake</a>
				</h4>
				<p class="mob-tex">
					“Sending you smiles for every moment of your special day…Have a wonderful time and a very happy birthday!”
				</p>
				
				<div style="margin-top: 28px;">
					<a class=" ord-pill" href="/kitchen/birthday">Order Now
				
				</a></div>
			</div>

		</div>

{{-- Graduation --}}
		<div class="kit-card" style="margin-bottom: 30px;">
			{{-- left --}}
			<div class="card-left card-graduation">
				<a class="kit-pill" href="/kitchen/graduation">Graduation</a>

				<a href="/kitchen/graduation"><img src="/images/grad-cap.jpg" class="round mob-img" width="110" height="100"></img></a>

				<p>Graduation</p>
			</div>


			{{-- right --}}
			<div class="card-right">
				<h4>
					<a class="card-title" href="/kitchen/graduation">Graduation Cake</a>
				</h4>
				<p class="mob-tex">
					“Success is the ability to go from one failure to another with no loss of enthusiasm” – Winston Churchill.
				</p>

				<div class="mob-pill" style="margin-top: 28px;">
					<a class=" ord-pill ord-pill-gd" href="/kitchen/graduation">Order Now
				
				</a></div>

			</div>

		</div>

		{{-- Wedding --}}
		<div class="kit-card" >
			{{-- left --}}
			<div class="card-left card-wedding">
				<a class="kit-pill" href="/kitchen/wedding">Wedding</a>

				<a href="/kitchen/wedding"><img src="/images/wedd.jpg" class="round mob-img" width="110" height="100"></img></a>

				<p>Wedding</p>
			</div>


			{{-- right --}}
			<div class="card-right">
				<h4>
					<a class="card-title" href="/kitchen/wedding">Wedding Cake</a>
				</h4>
				<p class="mob-tex">
					“To be fully seen by somebody, then, and be loved anyhow–this is a human offering that can border on miraculous.”
				</p>

				<div class="mob-pill" style="margin-top: 28px;">
					<a class=" ord-pill ord-pill-wd" href="/kitchen/wedding">Order Now
				
				</a></div>

			</div>

		</div>

	

@endsection
