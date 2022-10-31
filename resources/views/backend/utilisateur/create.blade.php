@extends('layouts.main-layout')

@section('content')
<div class="row">
<div class="col-md-12 col-sm-12 ">
	<div class="x_panel">
		<div class="x_title">
			<h2>Ajouter un utilisateur</h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br />
			<form data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('user.store') }}">

			@csrf

				
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nom</label>
					<div class="col-md-6 col-sm-6 ">
							<input type="text" name="last_name" id="first-name" required="required" class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}" value="{{ old('last_name') }}">
					@if ($errors->has('last_name'))
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $errors->first('last_name') }}</strong>
	                    </span>
	                @endif
					</div>
				</div>

				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Prénom</label>
					<div class="col-md-6 col-sm-6 ">
							<input type="text" name="first_name" id="first-name" required="required" class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" value="{{ old('first_name') }}">
					@if ($errors->has('first_name'))
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $errors->first('first_name') }}</strong>
	                    </span>
	                @endif
					</div>
				</div>

				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align">email</label>

					<div class="col-md-6 col-sm-6 ">
							<input type="email" name="email" id="first-name" required="required" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}">
					@if ($errors->has('email'))
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $errors->first('email') }}</strong>
	                    </span>
	                @endif
					</div>
				</div>

				

				<div class="item form-group">
					<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mot de passe</label>
				<div class="col-md-6 col-sm-6 ">
						<input type="password" name="password" required="required" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}">
					@if ($errors->has('password'))
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $errors->first('password') }}</strong>
	                    </span>
	                @endif
				</div>
				</div>

				<div class="item form-group">
					<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Confirmer le mot de passe</label>
					<div class="col-md-6 col-sm-6 ">
						<input id="middle-name" class="form-control" type="password" name="password_confirmation" required>
					</div>

				</div>

				<div class="ln_solid"></div>
				<div class="item form-group">
					<div class="col-md-6 col-sm-6 offset-md-3">
						<button type="submit" class=" btn-sm btn-block btn-success">Enregistrer</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>
</div>
@endsection