@extends('layouts.main-layout')
@section('title')
Modifier les infos de contact
@endsection

@section('autres_css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="row">
<div class="col-md-12 col-sm-12 ">
	<div class="x_panel">
		<div class="x_title">
			<h2>Modifier le contact</h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br />
           
			
			<form data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('info_complementaire.update',$info_complementaire->id) }}" enctype="multipart/form-data">

			@csrf
			@method('PUT')

           	<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">email</label>
				<div class="col-md-8 col-sm-8 ">
				<input type="email" name="email" id="first-name" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email')??$info_complementaire->email }}" autofocus autocomplete="off">
				@if ($errors->has('email'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif
				</div>
			</div>

			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">telephone</label>
				<div class="col-md-8 col-sm-8 ">
				<input type="input" name="telephone" id="first-name" class="form-control {{ $errors->has('telephone') ? ' is-invalid' : '' }}" value="{{ old('telephone')??$info_complementaire->telephone }}" autofocus autocomplete="off">
				@if ($errors->has('telephone'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('telephone') }}</strong>
					</span>
				@endif
				</div>
			</div>

			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">adresse</label>
				<div class="col-md-8 col-sm-8 ">
				<input type="input" name="adresse" id="first-name" class="form-control {{ $errors->has('adresse') ? ' is-invalid' : '' }}" value="{{ old('adresse')??$info_complementaire->adresse }}" autofocus autocomplete="off">
				@if ($errors->has('adresse'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('adresse') }}</strong>
					</span>
				@endif
				</div>
			</div>
		
				<div class="ln_solid"></div>
				<div class="item form-group">
					<div class="col-md-8 col-sm-8 offset-md-3">
						<button type="submit" class=" btn-sm btn-block btn-success">Enregistrer</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>
</div>

@endsection

@section('autres_scripts')
 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
 <script src="{{ asset('template/vendors/summernote/lang/summernote-fr-FR.js') }}"></script>
 <script src="{{ asset('template/vendors/summernote/initialisation.js') }}"></script>
@endsection