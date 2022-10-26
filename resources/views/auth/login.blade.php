<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('template/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('template/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('template/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('template/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('template/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

<body class="login">
    <div>
        <h2 class="text-center mt-5 " style="font-size: 5em">{{ config('app.name') }} - <span class="text-danger">GUINEE</span></h2>
        <div class="login_wrapper">
            <div class="animate form login_form ">
                <section class="login_content ">
           
                    <h1 class="text-danger">Se connecter</h1>
                    <div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Votre email" />
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div>
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Mot de passe" required="" />
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- Remember Me -->
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                                    </label>
                                </div>
                                {{-- <div class="col-md-6"> @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
                                    @endif
                                </div> --}}
                            </div>

                            <div class="mt-3" >
                            
                                    <button type="submit" class="btn btn-danger btn-block">
                                        {{ __('Se connecter') }}
                                    </button>
                            </div>

                        </form>
                    </div>
              

                    <div class="clearfix"></div>

                    <div class="separator">
                        {{-- <p class="change_link">New to site?
                        <a href="#signup" class="to_register"> Create Account </a>
                        </p> --}}

                        <div class="clearfix"></div>
                        <br />

                        {{-- <div>
                        <h1><i class="fa fa-pfaw"></i>  </h1>
                        <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div> --}}
                    </div>
     
                 </section>
            </div>
        </div>
    </div>
  </body>
</html>

