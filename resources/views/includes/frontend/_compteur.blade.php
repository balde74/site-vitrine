<!-- Section About Start -->

<section class="section about position-relative">
	<div class="bg-aboutj">
		<img src="{{asset('frontend/images/bg/home-8.jpg')}}" alt="" width="45%" style="position:absolute;">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6 offset-md-0">
				<div class="about-item ">
					{{-- <span class="h6 text-color">Qui sommes nous</span> --}}
					<h2 class="mt-3 mb-4 position-relative content-title text-color">Mot du directeur</h2>
					
					<div class="about-content">
						{{-- <h4 class="mb-3 position-relative">Mot du directeur</h4> --}}
						<p class="mb-5">{{$info->mot_directeur}}</p>

						<a href="#" class="btn btn-main btn-round-full">Nous contacter</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section About End -->
<!-- section Counter Start -->
<section class="section counter mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<h3 class="mb-0"><span class="counter-stat font-weight-bold">1730</span> +</h3>
					<p class="text-color">Project Done</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<h3 class="mb-0"><span class="counter-stat font-weight-bold">125 </span>M </h3>
					<p class="text-muted">User Worldwide</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<h3 class="mb-0"><span class="counter-stat font-weight-bold">39</span></h3>
					<p class="text-muted">Availble Country</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center">
					<h3 class="mb-0"><span class="counter-stat font-weight-bold">14</span></h3>
					<p class="text-muted">Award Winner </p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section Counter End  -->