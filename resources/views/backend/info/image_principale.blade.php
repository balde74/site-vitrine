@extends('layouts.main-layout')
@section('title')
Modifier un info_complementaire
@endsection
@section('autres_css')
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
@section('content')

<div class="row">
<div class="col-md-12 col-sm-12 ">
	<div class="x_panel">
		<div class="x_title">
			<h2>Modifier un info_complementaire</h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br />

			 <div class="col-md-2">
                @if($info_complementaire->image)
                <img src="{{ asset('documents/'.$info_complementaire->image) }}" alt="image de presentation" width="100%">
               		
                @endif
            </div>

			<form data-parsley-validate class="form-horizontal form-label-left col-md-10" method="POST" action="{{ route('info_complementaire.update',$info_complementaire->id) }}" enctype="multipart/form-data" >

			@csrf
			@method('PUT')

				

             	

				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Texte </label>
					<div class="col-md-8 col-sm-8 ">
					<input type="text" name="texte" id="first-name" class="form-control {{ $errors->has('texte') ? ' is-invalid' : '' }}" value="{{ old('texte')??$info_complementaire->texte }}" autocomplete="off">
					@if ($errors->has('texte'))
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $errors->first('texte') }}</strong>
	                    </span>
	                @endif
					</div>
				</div>

				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Image de l'article</label>
					<div class="col-md-8 col-sm-8 ">
					<div class="custom-file">
						<input type="file" name="image" class="custom-file-input {{ $errors->has('image') ? ' is-invalid' : '' }}" id="validatedCustomFile" value="{{old('image')}}??$article->image" >
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
 <script src="{{ asset('template/vendors/summernote/lang/summernote-fr-FR.js') }}"></script>
 <script src="{{ asset('template/vendors/summernote/initialisation.js') }}"></script>
@endsection

