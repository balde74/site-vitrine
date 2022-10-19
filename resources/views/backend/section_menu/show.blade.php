@extends('layouts.main-layout')
@section('title')
	section-menu {{ $sectionMenu->numero_section }}
@endsection
@section('content')

<div class="row">
	<div class="col-md-8 mx-auto col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Détails de la section N° {{ $sectionMenu->numero_section }}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content mx-auto">
					<div style="font-size: 18px;text-align: justify;">
						
						{!! $sectionMenu->section !!}
						<hr>

						@if ($sectionMenu->section_image)
						<img src="{{ asset('documents/'.$sectionMenu->section_image) }}" class="" alt="image de l'section" width="100%" >
						@endif
					</div>
					<br>

					 <a href="{{ route('section-menu.edit',$sectionMenu->id) }}" class="btn btn-sm btn-success">Modifier</a>
					 <hr>
			</div>
		</div>
	</div>
</div> 


@endsection