@extends('layouts.main-layout')
@section('title')
ajouter une image
@endsection

@section('content')

<div class="row">
<div class="col-md-12 col-sm-12 ">
	<div class="x_panel">
		<div class="x_title">
			<h2>Ajouter des images</h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br />
			<form data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('galerie.store') }}" enctype="multipart/form-data">

			@csrf

				<div class="item form-group">
			   			 <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Image</label>
		   			 	<div class="col-md-8 col-sm-8 ">
					        <div class="custom-file">
					            <input type="file" name="image[]" multiple accept="image/*" required class="custom-file-input {{ $errors->has('image') ? ' is-invalid' : '' }}" id="validatedCustomFile" value="{{old('image')}}" >
					            <label class="custom-file-label" for="validatedCustomFile">Choisissez une image representatrice...</label>
					            @if ($errors->has('image'))
					                <span class="invalid-feedback" role="alert">
					                    <strong>{{ $errors->first('image') }}</strong>
					                </span>
					            @endif
				          	</div>
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
 <script src="{{ asset('backend/vendors/summernote/lang/summernote-fr-FR.js') }}"></script>
 <script src="{{ asset('backend/vendors/summernote/initialisation.js') }}"></script>
@endsection