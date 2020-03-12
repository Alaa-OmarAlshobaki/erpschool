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

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>LOgin</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Utilizer Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="{{asset('asset/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
    <!-- //Fonts -->
</head>

<body>
    <!-- main -->
    <div class="main-top-intro">
        <div class="bg-layer">
            <!-- header -->
            <div class="wrapper">
                <header>
                    <div class="header-w3layouts">
                        <h1>
                            <a class="navbar-brand logo" href="index.html">
                              <img src="{{asset('onepage/img/logo_18.png')}}"> 
                            </a>
                        </h1>
                    </div>
                    <div class="nav_w3pvt">
                        <nav>
                            <label for="drop" class="toggle mt-lg-0 mt-2"><span class="fa fa-bars" aria-hidden="true"></span></label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu">
                            <li class="active"><a href="{{route ('Home') }}">Home</a></li>
                                <li class=""><a href="#">About</a></li>
                                <li class=""><a href="#">Services</a></li>
                                <li class="p-0">
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle">Pages <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                    <a href="#">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="inner-dropdown">
                                        <li><a href="#">Error Page</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="buttons mt-lg-0 mt-3 ml-auto">
                        <div class="form-w3layouts-grid">
						
                            <form action="#" method="post" class="newsletter">
                                <input class="search" type="search" placeholder="" required="">
                                <button class="form-control btn" value=""><span class="fa fa-search"></span></button>
                                <div class="clear"></div>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>


                </header>
                <!-- //header -->
                <div class="content-inner-info">
                    <h2>@lang('dashboard.dashboard.Login_form')</h2>
                    <div class="content-w3layouts-main">

                        <div class="form-w3ls-left-info">
                            <form action="#" method="post">
                                @isset($url)
                                <form method="POST"  action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                                @else
                                <form method="POST"  action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                @endisset
                                    @csrf


                                <input type="email"  value="{{ old('email') }}"  placeholder="Email Address" required autocomplete="email" name="email" autofocus />
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
						     	@enderror


                                <input type="password" placeholder="Password"  name="password"  required autocomplete="current-password"/>
								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							   @enderror
                                <div class="links">
                                    <p><a href="#">Forgot Password?</a></p>

                                </div>
                                <div class="bottom">
                                    
                                    <button class="btn" type="submit"> {{ __('Login') }}</button>
									<button class="btn reg" type="reset">Reset</button>
								
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
                <!-- copyright -->
                <div class="copy-w3layouts-inf">
                    <p>© 2019
                        Utilizer Login. All rights reserved | Design by
                        <a href="http://w3layouts.com"> W3layouts.</a>
                    </p>
                    <ul class="list-unstyled w3layouts-icons">
                        <li>
                            <a href="#" class="face-b">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twit">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dribble">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="vk">
                                <span class="fa fa-vk"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <!-- //copyright -->
            </div>
        </div>
    </div>
    <!-- //main -->

</body>

</html>
