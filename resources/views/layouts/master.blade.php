<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ Config::get('app.locale') }}"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>@yield('title')</title>


		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/bootstrap-colorpicker.min.css">
		<link rel="stylesheet" href="css/font-awesome/font-awesome.min.css">
		<link rel="stylesheet" href="css/inline-style.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
		<link rel="stylesheet" href="css/swiper.min.css">
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	</head>
	<body>
		<header class=" wd-menu3-header ">
			<div class="show-for-medium-up wd-menu3-logo">
				<h1><a title="Green energy" rel="home" href="{{url('/') }}"> <img alt="logo"
																			   src="images/logo-solar-blan.png"></a>
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
								<li id="menu-item-1273" class="active_menu">
									<a href="{{url('/') }}" class="has-icon">Acasă</a>
								</li>

								<li id="menu-item-656" >
									<a href="{{url('/about') }}" >Despre Companie</a>
								</li>

								<li id="menu-item-721" >
									<a href="{{url('/portfolio') }}">Catalog Produse</a>
								</li>
								<li id="menu-item-721" >
									<a href="{{url('/calcKcal') }}">Calculator Kcal</a>
								</li>
								<li id="menu-item-721" >
									<a href="{{url('/order') }}">Comenzi</a>
								</li>
								<li id="menu-item-13">
									<a href="{{url('/contact') }}" class="has-icon">Contact Us</a>
								</li>
							</ul>
						</div>
					</section>
				</nav>
			</div>
			<div class="show-for-large-up triongle"></div>
			<div class="show-for-large-up wd-menu3-social">
				<ul class="social-icons inline-list">
					<li>
                    <a href="{{url('lang/ro')}}">
                    <img src="images/language/rom.png"></a>
					</li>
					<li>
                    <a href="{{url('lang/ru')}}">
                    <img src="images/language/rus.png"></a>
					</li>
					<li >
					<a href="{{url('lang/en')}}">
                    <img src="images/language/uk.png"></a>
					</li>
                    <li >
					<a href="{{url('lang/it')}}">
                    <img src="images/language/it.png"></a>
					</li>
                    <li >
					<a href="{{url('lang/de')}}">
                    <img src="images/language/de.png"></a>
					</li>
				</ul>
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
								<img alt="logo" src="images/logo-solar-blann.png">
								<p>The solar is the leader of green energy in the country sed diam nonumy eirmod tempor invidunt ut labore
									and efficient strategy.</p>
								<p>We provide the energy to medium and big company, sadipscing elitr, sed diam nonumy.</p>
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
										<span><span>Phone:</span> +1 123 457 653</span>
									</li>
									<li>
										<span><span>Fax:</span> +1 496 457 654</span>
									</li>
									<li>
										<span><span>Email:</span> <a href="http://themes.webdevia.com/cdn-cgi/l/email-protection#5d38303c34311d2a383f2e342938733e3230"><span class="__cf_email__" data-cfemail="177862653a7a767e7b57726f767a677b723974787a">[email&#160;protected]</span></a></span>
									</li>
									<li>
										<span><span>Adress:</span> 121 King Street, Melbourne 3000 Australia</span>
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

		<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
		<script src="js/plugins.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script src="js/shortcode/script-shortcodes.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/bootstrap-colorpicker.min.js"></script>
		<script src="js/scripts.js"></script>

	</body>

	<!-- Mirrored from themes.webdevia.com/html-templates/green-energy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Oct 2018 11:37:26 GMT -->
</html>
