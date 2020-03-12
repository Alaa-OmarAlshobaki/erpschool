{{-- <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LoginForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('asset/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
	</head>
	@extends('layouts.app')

@section('content')

	<body>


		<div class="wrapper" >
			<div class="inner">
				     @isset($url)
                        <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                        @else
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @endisset
                            @csrf

					<h3>{{ __('Login') }}</h3>
					
					<div class="form-wrapper">
						<label for="">Email</label>
						<input  type="email"  class="form-control" value="{{ old('email') }}" required autocomplete="email" name="email" autofocus>
						   @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" class="form-control " name="password"  required autocomplete="current-password">
						   @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					
					<div class="checkbox">
						  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
					</div>
					<button> {{ __('Login') }}</button>
					   @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
	@endsection
</html> --}}