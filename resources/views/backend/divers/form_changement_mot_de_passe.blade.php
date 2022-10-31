@extends('layouts.main-layout')

@section('title')
Changement de mot de passe
@endsection

@section('content')
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Changement de mot de passe</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        @if(session()->has('erreur'))
          <div class="alert alert-danger">{!! session('erreur') !!}</div>
        @endif
        @if(session()->has('success'))
          <div class="alert alert-success">{!! session('success') !!}</div>
        @endif
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{ action('DiversController@validationChangementMDP') }}">

          @csrf
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Ancien mot de passe <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="password" id="password" required="required" class="form-control {{ $errors->has('ancien_password') ? ' is-invalid' : '' }}"  name="ancien_password" placeholder="Entrez votre mot de passe">
              @if ($errors->has('ancien_password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('ancien_password') }}</strong>
                </span>
               @endif
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nouveau mot de passe <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="password" id="password" required="required" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}" name="password" placeholder="Entrez votre nouveau mot de passe">
              @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
               @endif
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Confirmation du mot de passe <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="password" id="password_confirmation" required="required" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" value="{{ old('password_confirmation') }}" name="password_confirmation" placeholder="Confirmez votre nouveau mot de passe">
              @if ($errors->has('password_confirmation'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
               @endif
            </div>
          </div>

  
          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-12 offset-md-3 mt-2">
              <button type="submit" class="btn btn-info btn-sm btn-block"><i class="fa fa-save"></i> Enregistrer</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection 