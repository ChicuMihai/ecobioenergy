<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ Config::get('app.locale') }}"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>@yield('title')</title>


		<link rel="stylesheet" href="{!!asset('css/app.css')!!}">
		<link rel="stylesheet" href="{!!asset('css/animate.css')!!}">
		<link rel="stylesheet" href="{!!asset('css/bootstrap-colorpicker.min.css')!!}">
		<link rel="stylesheet" href="{!!asset('css/font-awesome/font-awesome.min.css')!!}">
		<link rel="stylesheet" href="{!!asset('css/inline-style.css')!!}">
		<link rel="stylesheet" href="{!!asset('css/owl.carousel.css')!!}">
		<link rel="stylesheet" href="{!!asset('css/owl.theme.css')!!}">
		<link rel="stylesheet" href="{!!asset('css/owl.transitions.css')!!}">
		<link rel="stylesheet" href="{!!asset('css/swiper.min.css')!!}">
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	</head>
	<body>
		<header class=" wd-menu3-header ">
			<div class="show-for-medium-up wd-menu3-logo">
				<h1><a title="Green energy" rel="home" href="{{url('/') }}">
					<img alt="logo" src="{{asset('images/logo.png')}}" width="140px"height="45px"></a>
				</h1>
			</div>
			<div class=" wd-menu3-nav">
				<nav class="top-bar" data-topbar="" >
					<ul class="title-area">
						<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
					</ul>

					<section class="top-bar-section">
						<div class="menu-main-menu-container">
							<ul id="menu-main-menu" class="menu">
								<li id="menu-item-1273" class="{{Request::path() == '/' ? 'active_menu' : '' }}">
									<a href="{{url('/') }}" class="has-icon">{{ __('home.home') }}</a>
								</li>

								<li id="menu-item-656" class="{{Request::path() == 'about' ? 'active_menu' : '' }}" >
									<a href="{{route('about.index') }}" >{{ __('home.about') }}</a>
								</li>

								<li id="menu-item-721" class="{{Request::path() == 'portfolio' ? 'active_menu' : '' }}" >
									<a href="{{url('/portfolio') }}">{{ __('home.catalog') }}</a>
								</li>
								<li id="menu-item-721" class="{{Request::path() == 'calcKcal' ? 'active_menu' : '' }}">
									<a href="{{url('/calcKcal') }}">{{ __('home.calc') }}</a>
								</li>
								<li id="menu-item-721" class="{{Request::path() == 'order/create' ? 'active_menu' : '' }}">
									<a href="{{route('order.create') }}">{{ __('home.order') }}</a>
								</li>
								<li id="menu-item-13" class="{{Request::path() == 'contact' ? 'active_menu' : '' }}">
									<a href="{{url('/contact') }}" class="has-icon">{{ __('home.contact') }}</a>
								</li>
							</ul>
						</div>
					</section>
				</nav>
			</div>
			
			<div class="show-for-large-up triongle"></div>
			<div class="show-for-large-up wd-menu3-social">
			<div class="dropdown">
			
			<button class="dropbtn"><img src="{{asset('images/language/'.Config::get('app.locale').'.png')}}"></button>
  			<div class="dropdown-content">
			@foreach (Config::get('languages') as $lang => $language)
			@if ($lang != App::getLocale())
			  <a href="{{url('lang/'.$lang)}}">
					<img src="{{asset('images/language/'.$lang.'.png')}}">{{$language}}</a>
			@endif
			@endforeach
					
  			</div>
			</div>
			</div>
		</header>



		@yield('content')
		
	
		

		<section class="wd-footer">
			<div class="row animation-parent" data-animation-delay="180">


				<ul class="block large-4 medium-4 columns clearfix animated" data-animated="fadeInRight"
					style="opacity: 1; animation-delay: 0ms;">
					<li>
						<div class="textwidget">
							<div class="widget-logo">
								<h2>ECOBIOENERGY</h2>
							<p>{{__('home.home_info')}}</p>
								
							</div>
						</div>
					</li>
				</ul>

				<ul class="block large-4 medium-4 columns clearfix animated" data-animated="fadeInRight"
					style="opacity: 1; animation-delay: 180ms;">
					<li><h2 class="block-title">Get in Touch</h2>
						<div class="textwidget">
							<section class="widget-info">

								<ul>
									<li>
									<span><span>Phone:</span><a href="tel:{{isset($info)? $info->telefon:''}}">{{isset($info)? $info->telefon:''}}</a></span>
									</li>
									<li>
									<span><span>Email:</span> <a href="mailto:{{isset($info)? $info->email:''}}"><span>{{isset($info)? $info->email:''}}</span></a></span>
									</li>
									<li>
									<span><span>Adress:</span>{{isset($info)? $info->adresa:''}}</span>
									</li>
								</ul>
							</section>
						</div>
					</li>
				</ul>

				<ul class="block large-4 medium-4 columns clearfix animated " data-animated="fadeInRight"
					style="opacity: 1; animation-delay: 360ms;">
					<li><h2 class="block-title">Newsletter</h2>
						<div class="textwidget">
							<div class="wd-newsletter">
								Sign up your newsletter

								<div>
									<input class="email-adress" placeholder="EMAIL ADRESS" size="20" value="" name="email-adress" type="text">
									<input class="newslettersubmit" value="GO" type="submit">
									<ul class="inline-list">
										<li class="flickr">
											<a href="#"><i class="fa fa-flickr"></i></a>
										</li>
										<li class="facebook">
											<a href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li class="twitter">
											<a href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li class="vimeo">
											<a href="#"><i class="fa fa-vimeo-square"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
				</ul>

			</div>
		</section>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/calculator.js"></script>

		<script src="js/jquery.js"></script>
		<script src="js/plugins.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script src="js/shortcode/script-shortcodes.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/bootstrap-colorpicker.min.js"></script>
		<script src="js/scripts.js"></script>

	</body>

	<!-- Mirrored from themes.webdevia.com/html-templates/green-energy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Oct 2018 11:37:26 GMT -->
</html>
