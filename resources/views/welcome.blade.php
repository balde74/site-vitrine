@extends('layouts/main-layout-frontend')
@section('title')
    Bienvenue
@endsection

@section('content')
    
<!-- Slider Start -->
<section class="slider" style="background: url({{'documents/'.$info->image}}) ; background-size:cover">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-10">
				<div class="block">
					{{-- <span class="d-block mb-3 text-white text-capitalize">Emab</span> --}}
					<h1 class="animated fadeInUp mb-5 text-justify">{{$info->texte}}</h1>
					<a href="#contact"  class="btn btn-main animated fadeInUp btn-round-full" aria-label="Get started">Demander un devis<i class="btn-icon fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		</div>
		
	</div>
</section>

<!-- Section Intro Start -->

<section class="section intro">
	<div class="container">
		
		<div class="row justify-content-center">
			@foreach ($slogans as $slogan)
				
				<div class="col-lg-4 col-md-6 col-12">
					<div class="intro-item mb-5 mb-lg-0">
						<i class="{{$slogan->icone}} color-one"></i>
						{{-- <h4 class="mt-4 mb-3">Modern & Responsive design</h4> --}}
						<p class="text-justify">{!!$slogan->texte!!}</p>
					</div>
				</div>
			@endforeach
			
		</div>
	</div>
</section>

<!-- Section Intro END -->


<br>

<section class="section about position-relative">
	{{-- <div class="bg-about"></div> --}}
	<div class="container-fluid" >
		<div class="row"  >
			<div class="col-md-6 " >
				<img src="{{asset('documents/'.$info->mot_directeur_image)}}" alt="" style="width: 100%	">
			</div>
			<div class="col-md-6 " >
					<h2 class="content-title text-color text-center" style="margin-bottom: 0px">MOT DU DIRECTEUR</h2>
					<div class="about-contennt">
						{{-- <h4 class="mb-3 position-relative">We are Perfect Solution</h4> --}}
						<p class="mb-5 text-justify" > {!!$info->mot_directeur!!}</p>

						<div class="text-center">

							<a href="#contact" class="btn btn-main btn-round-full ">Nous contacter</a>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>
{{-- @include('includes/frontend/_compteur') --}}

@include('includes/frontend/_filiale')

<!-- section portfolio start -->
<section class="section portfolio pb-0" id="portofolio">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					{{-- <span class="h6 text-color">Nos services </span> --}}
					<h2 class="mt-3 content-title text-color">GALERIE</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row portfolio-gallery">
			@foreach ($images as $image)
				<div class="col-md-6 col-lg-3">
					<div class="portflio-item position-relative mb-4">
						<a href="{{asset('documents/'.$image->image)}}" class="popup-gallery">
							<img src="{{asset('documents/'.$image->image)}}" alt="portfolio" class="img-fluid w-100"  style="max-height: 350px; height:350px">

							<i class="ti-plus overlay-item"></i>
							{{-- <div class="portfolio-item-content">
								<h3 class="mb-0 text-white">{{config('app.name')}}</h3>
								<p class="text-white-50">TEXT</p>
							</div> --}}
						</a>
					</div>
				</div>
			@endforeach


		</div>
	</div>
</section>
<!-- section portfolio END -->
@endsection