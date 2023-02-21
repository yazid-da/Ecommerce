@extends('layouts.header')

@section('content')
<head>
    <!-- Css Login Styles -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="auth/css/style.css">
</head>
<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						<a href="{{asset('http://127.0.0.1:8000')}}"><img class="logo" src="auth\images\logo.png" ></img></a>
						<div class="row justify-content-center">
							<div class="col-md-6 text-center mb-5">
								<h2 class="heading-section">{{ __('Créer un compte') }}</h2>
							</div>
						</div>
						<form method="POST" action="{{ route('register') }}">
							@csrf

								<!-- nom et prenom INPUT -->
								<div class="form-group">
									<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom complet') }}</label>
									
									<input id="name" type="text" class="form-control rounded-left" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Votre nom et prénom" autofocus>
									@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror
								</div>

								<!-- email INPUT -->
								<div class="form-group">
									<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-mail') }}</label>
									
									<input id="email" type="email" class="form-control rounded-left" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="nom@domaine.com">
									@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror
								</div>

								<!-- telephone INPUT -->
								<div class="form-group">
									<label for="tel" class="col-md-4 col-form-label text-md-end">{{ __('Télephone') }}</label>
									
									<input id="tel" type="tel" class="form-control rounded-left" name="tele" value="{{ old('tel') }}" placeholder="06XXXXXXXX">
									@error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror
								</div>

                                <!-- Adresse INPUT -->
                                <div class="form-group">
									<label for="adresse" class="col-md-4 col-form-label text-md-end">{{ __('Adresse') }}</label>
									
									<input id="adresse" type="adresse" class="form-control rounded-left" name="adresse" value="{{ old('adresse') }}" placeholder="Votre Adresse">
									@error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror
								</div>
								<!-- Password INPUT -->	
								<label for="password" >{{ __('Mot De passe') }}</label>
								<div class="form-group d-flex">
								
								<input id="password" type="password" class="form-control rounded-left" name="password" required autocomplete="new-password" placeholder="Choisissez un mot de passe">
									@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror
								</div>


								<!-- Password Confirm INPUT -->	
								<label for="password" >{{ __('Confirmer le mot de passe') }}</label>
								<div class="form-group d-flex">
									<input id="password-confirm" type="password" class="form-control rounded-left" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer le mot de passe">
								</div>


								<!-- submit BUTTON -->
								<div class="form-group">
									<button type="submit" class="btn btn-primary rounded submit p-3 px-5">{{ __('CREER UN COMPTE') }}</button>
								</div>
	          			</form>
					</div>
				</div>
			</div>
		</div>

        <!-- Js Plugins -->
<script src="auth/js/jquery.min.js"></script>
<script src="auth/js/popper.js"></script>
<script src="auth/js/bootstrap.min.js"></script>
<script src="auth/js/main.js"></script>
@endsection
