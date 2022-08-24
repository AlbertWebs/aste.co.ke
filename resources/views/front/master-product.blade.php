<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('meta')
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Vendor -->
	<link href="{{asset('theme/js/vendor/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('theme/js/vendor/slick/slick.css')}}" rel="stylesheet">
	<link href="{{asset('theme/js/vendor/swiper/swiper.min.css')}}" rel="stylesheet">
	<link href="{{asset('theme/js/vendor/magnificpopup/dist/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('theme/js/vendor/nouislider/nouislider.css')}}" rel="stylesheet">
	<link href="{{asset('theme/js/vendor/darktooltip/dist/darktooltip.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/animate.css')}}" rel="stylesheet">

	<!-- Custom -->
	<link href="{{asset('theme/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/megamenu.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/tools.css')}}" rel="stylesheet">

	<!-- Color Schemes -->
	<link href="{{asset('theme/css/style-color-pink.css')}}" rel="stylesheet">


	<!-- Icon Font -->
	<link href="{{asset('theme/fonts/icomoon-reg/style.css')}}" rel="stylesheet">

	<!-- Google Font -->
	<link href="{{asset('theme/fonts.googleapis.com/cssd6fb.css?family=Oswald:300,400,700|Raleway:100,100i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i')}}" rel="stylesheet">

</head>

<body class="boxed">
	<!-- Loader -->
	<div id="loader-wrapper">
		<div class="cube-wrapper">
			<div class="cube-folding">
				<span class="leaf1"></span>
				<span class="leaf2"></span>
				<span class="leaf3"></span>
				<span class="leaf4"></span>
			</div>
		</div>
	</div>
	<!-- /Loader -->
	<div class="fixed-btns demo-">

		<!-- Back To Top -->
		<a href="#" class="top-fixed-btn back-to-top"><i class="icon icon-arrow-up"></i></a>
		<!-- /Back To Top -->
	</div>
	<div id="wrapper">

		<!-- Page -->
		<div class="page-wrapper">
			<!-- Header -->
			<header class="page-header variant-2 fullboxed sticky smart">
				<div class="navbar">
					<div class="container">
						<!-- Menu Toggle -->
						<div class="menu-toggle"><a href="#" class="mobilemenu-toggle"><i class="icon icon-menu"></i></a></div>
						<!-- /Menu Toggle -->
						<!-- Header Cart -->
						<div class="header-link dropdown-link header-cart variant-1">
							<?php $Cart = \Cart::getContent(); ?>
							<a href="{{url('/')}}/shopping-cart"> <i class="icon icon-cart"></i> <span class="badge new-quantity"><?php echo $Cart->count(); ?></span> </a>
							@if($Cart->isEmpty())

                            @else
							<!-- minicart wrapper -->
							<div class="dropdown-container right">
								<!-- minicart content -->
								@include('front.header-cart')
								<!-- /minicart content -->
							</div>
							<!-- /minicart wrapper -->
							@endif
						</div>
						<!-- /Header Cart -->
						<!-- Header Links -->
						<div class="header-links">
							<!-- Header Language -->
							<div class="header-link header-select dropdown-link header-language">
								<a href="#"><img src="{{asset('theme/images/flags/eng.png')}}" alt /></a>
								<ul class="dropdown-container">
									<li class="active">
										<a href="#"><img src="{{asset('theme/images/flags/eng.png')}}" alt />English</a>
									</li>
									<li>
										<a href="#"><img src="{{asset('theme/images/flags/fr.png')}}" alt />French</a>
									</li>
									<li>
										<a href="#"><img src="{{asset('theme/images/flags/den.png')}}" alt />German</a>
									</li>
								</ul>
							</div>
							<!-- /Header Language -->
							<!-- Header Currency -->
							<div class="header-link header-select dropdown-link header-currency">
								<a href="#">USD</a>
								<ul class="dropdown-container">
									<li><a href="#"><span class="symbol">€</span>EUR</a></li>
									<li class="active"><a href="#"><span class="symbol">$</span>USD</a></li>
									<li><a href="#"><span class="symbol">£</span>GBP</a></li>
								</ul>
							</div>
							<!-- /Header Currency -->
							<!-- Header Account -->
							<div class="header-link dropdown-link header-account">
								<a href="#"><i class="icon icon-user"></i></a>
								<div class="dropdown-container right">
									<div class="title">Registered Customers</div>
									<div class="top-text">If you have an account with us, please log in.</div>
									<!-- form -->
									<form action="#">
										<input type="text" class="form-control" placeholder="E-mail*">
										<input type="text" class="form-control" placeholder="Password*">
										<button type="submit" class="btn">Sign in</button>
									</form>
									<!-- /form -->
									<div class="title">OR</div>
									<div class="bottom-text">Create a <a href="account-create.html">New Account</a></div>
								</div>
							</div>
							<!-- /Header Account -->
						</div>
						<!-- /Header Links -->
						<!-- Header Search -->
						<div class="header-link header-search header-search">
							<div class="exp-search">
								<form>
									<input class="exp-search-input " placeholder="Search here ..." type="text" value="">
									<input class="exp-search-submit" type="submit" value="">
									<span class="exp-icon-search"><i class="icon icon-magnify"></i></span>
									<span class="exp-search-close"><i class="icon icon-close"></i></span>
								</form>
							</div>
						</div>
						<!-- /Header Search -->
						<!-- Logo -->
						<div class="header-logo">
							<a href="{{url('/')}}" title="Logo">
								<img width="175" src="{{url('/')}}/public/uploads/logo/{{$Settings->logo}}">
							</a>
						</div>
						<!-- /Logo -->
							<!-- Mobile Menu -->
							@include('front.mobile-menu')
							<!-- Mobile Menu -->
							<!-- Mega Menu -->
							@include('front.megamenu')
							<!-- /Mega Menu -->
</div>
				</div>
			</header>
			<!-- /Header -->
			
			<!-- Page Content -->
		    @yield('content')
			<!-- /Page Content -->
			<!-- Footer -->
			@include('front.footer')
			<!-- /Footer -->


		</div>
		<!-- /Page -->
	</div>
	<!-- ProductStack -->
	@include('front.myCart')
	<!-- /ProductStack -->
	<!-- Modal Quick View -->
	<div class="modal quick-view zoom" id="quickView">
		<div class="modal-dialog">
			<div class="modalLoader-wrapper">
				<div class="modalLoader bg-striped"></div>
			</div>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">&#10006;</button>
			</div>
			<div class="modal-content">
				<iframe></iframe>
			</div>
		</div>
	</div>
	<!-- /Modal Quick View -->

	<!-- jQuery Scripts  -->
	<script src="{{asset('theme/js/vendor/jquery/jquery.js')}}"></script>
	<script src="{{asset('theme/js/vendor/bootstrap/bootstrap.min.js')}}"></script>
	<script src="{{asset('theme/js/vendor/swiper/swiper.min.js')}}"></script>
	<script src="{{asset('theme/js/vendor/slick/slick.min.js')}}"></script>
	<script src="{{asset('theme/js/vendor/parallax/parallax.js')}}"></script>
	<script src="{{asset('theme/js/vendor/isotope/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('theme/js/vendor/magnificpopup/dist/jquery.magnific-popup.js')}}"></script>
	<script src="{{asset('theme/js/vendor/countdown/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('theme/js/vendor/nouislider/nouislider.min.js')}}"></script>
	<script src="{{asset('theme/js/vendor/ez-plus/jquery.ez-plus.js')}}"></script>
	<script src="{{asset('theme/js/vendor/tocca/tocca.min.js')}}"></script>
	<script src="{{asset('theme/js/vendor/bootstrap-tabcollapse/bootstrap-tabcollapse.js')}}"></script>
	<script src="{{asset('theme/js/vendor/scrollLock/jquery-scrollLock.min.js')}}"></script>
	<script src="{{asset('theme/js/vendor/darktooltip/dist/jquery.darktooltip.js')}}"></script>
	<script src="{{asset('theme/js/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('theme/js/vendor/instafeed/instafeed.min.js')}}"></script>
	<script src="{{asset('theme/js/megamenu.min.js')}}"></script>
	<script src="{{asset('theme/js/tools.min.js')}}"></script>
	<script src="{{asset('theme/js/app.js')}}"></script>
	
	@include('front.hide')
	@include('front.cart');

</body>


</html>