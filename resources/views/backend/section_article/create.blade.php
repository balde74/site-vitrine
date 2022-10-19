@extends('layouts.main-layout')
@section('title')
ajouter une section
@endsection
@section('autres_css')
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
@section('content')

<div class="row">
<div class="col-md-12 col-sm-12 ">
	<div class="x_panel">
		<div class="x_title">
			<h2>Ajouter une section dans l'article</h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br />

			
			<form data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('section.store') }}" enctype="multipart/form-data">

			@csrf

				
				<div class="item form-group">
			   			 <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Image de section</label>
		   			 	<div class="col-md-8 col-sm-8 ">
					        <div class="custom-file">
					            <input type="file" name="image" class="custom-file-input {{ $errors->has('image') ? ' is-invalid' : '' }}" id="validatedCustomFile" value="{{old('image')}}" >
					            <label class="custom-file-label" for="validatedCustomFile">Choisissez une image representatrice...</label>
					            @if ($errors->has('image'))
					                <span class="invalid-feedback" role="alert">
					                    <strong>{{ $errors->first('image') }}</strong>
					                </span>
					            @endif
				          	</div>
			          	</div>
				</div>

				<div class="form-group item">
					<label class="col-form-label col-md-3 col-sm-3 label-align">Numero de la section</label>
					<div class="col-md-8 col-sm-8 ">
						<select class="select2_single form-control" tabindex="-1" name="numero_section">
							<option></option>
							@for ($i = 1; $i <= 20; $i++)
								<option value="{{$i}}"
									@foreach ($article->sections as $section)
										@if ($section->numero_section == $i)
											disabled 
										@endif
									@endforeach
								>{{ $i }}</option>
							@endfor
						</select>
					</div>
				</div>

				<input type="number" name="article_id" value="{{ $article->id }}" style="display: none">

				
                <div class="item form-group">
                    <div class="col-md-6 col-sm-8 mx-auto mt-2">
                                <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm mx-auto" data-toggle="modal" data-target="#exampleModalCenter">
                         Supprimer les styles du texte
                        </button>
                    </div>
                </div>
				
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Contenu</label>
					<div class="col-md-8 col-sm-8 ">
					<textarea name="contenu" required="required" class="form-control summernote {{ $errors->has('contenu') ? ' is-invalid' : '' }}" cols="30" rows="10">
							{{ old('contenu') }}
						</textarea>
					@if ($errors->has('contenu'))
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $errors->first('contenu') }}</strong>
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