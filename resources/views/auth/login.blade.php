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
								<h2 class="heading-section">{{ __('Se Connecter') }}</h2>
							</div>
						</div>
						<form method="POST" action="{{ route('login') }}">
							@csrf
								<!-- Email INPUT -->
								<div class="form-group">
									<input type="email" class="form-control rounded-left" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
									
									@error('email')
									<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
									@enderror
								</div>
								<!-- Password INPUT -->	
								<div class="form-group d-flex">
									<input type="password" class="form-control rounded-left" placeholder="Mot de passe" name="password" required autocomplete="current-password">
									@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               		@enderror
								</div>
								<!-- Memoriser Moi CHECKBOX -->
								<div class="form-group d-md-flex">
									<div class="w-50">
										<label class="checkbox-wrap checkbox-primary">Mémoriser Moi
													<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
													<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
									@if (Route::has('password.request'))
										<a href="{{ route('password.request') }}">Mot de passe oublier?</a>
									@endif
									</div>
								</div>
								Pas encore inscrit ? <a href="{{ route('register') }}"> S'inscrire gratuitement.</a>
								<!-- submit BUTTON -->
								<div class="form-group">
									<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Connexion</button>
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
