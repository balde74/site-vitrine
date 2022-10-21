@extends('layouts/main-layout-frontend')
@section('title')
    Bienvenue
@endsection

@section('content')
    
<!-- Slider Start -->
<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-10">
				<div class="block">
					<span class="d-block mb-3 text-white text-capitalize">Prepare for new future</span>
					<h1 class="animated fadeInUp mb-5">Our work is <br>presentation of our <br>capabilities.</h1>
					<a href="#"  class="btn btn-main animated fadeInUp btn-round-full" aria-label="Get started">Get started<i class="btn-icon fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		</div>
		
	</div>
</section>
<h2>Ici d'autre contenu </h2>
<br>
@include('includes/frontend/_compteur')

<h2>Les actualités</h2>

<!-- section portfolio start -->
<section class="section portfolio pb-0" id="portofolio">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<span class="h6 text-color">Nos services </span>
					<h2 class="mt-3 content-title">PRESENTATION</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row portfolio-gallery">
			@foreach ($images as $image)
				<div class="col-md-3">
					<div class="portflio-item position-relative mb-4">
						<a href="{{asset('documents/'.$image->image)}}" class="popup-gallery">
							<img src="{{asset('documents/'.$image->image)}}" alt="portfolio" class="img-fluid w-100">

							<i class="ti-plus overlay-item"></i>
							<div class="portfolio-item-content">
								<h3 class="mb-0 text-white">{{config('app.name')}}</h3>
								<p class="text-white-50">Slogan</p>
							</div>
						</a>
					</div>
				</div>
			@endforeach


		</div>
	</div>
</section>
<!-- section portfolio END -->
@endsection