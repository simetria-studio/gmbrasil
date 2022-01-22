<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>GM BRASIL VD - SHOP</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('loja/css/bootstrap.css') }}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('loja/css/magnific-popup.min.css') }}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('loja/css/font-awesome.css') }}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('loja/css/jquery.fancybox.min.css') }}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('loja/css/themify-icons.css') }}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('loja/css/niceselect.css') }}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('loja/css/animate.css') }}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('loja/css/flex-slider.min.css') }}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('loja/css/owl-carousel.css') }}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('loja/css/slicknav.min.css') }}">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{ asset('loja/css/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('loja/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('loja/css/responsive.css') }}">



</head>
<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->


	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->

		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12 center-search">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="{{ asset('assets/img/logo-dourada-nova.png') }}" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12 center-search">
						<div class="search-bar-top">
							<div class="search-bar">

								<form>
									<input name="search" placeholder="Buscar produtos aqui..." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12 center-search">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="{{ route('home') }}" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">0</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>2 Items</span>
										<a href="#">Ver Carrinho</a>
									</div>
									<ul class="shopping-list">

									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">R$0</span>
										</div>
										<a href="checkout.html" class="btn animate">Finalizar</a>
									</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">

						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">
										<div class="nav-inner">
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="#">Home</a></li>
													<li><a href="#">Produtos</a></li>
                                                    @forelse (getCategories() as $category)
                                                    <li>
                                                        <a class="nav-link" href="{{asset('categoria/'.$category->slug)}}">{{$category->name}} @if ($category->subCategories->count() > 0)<i class="ti-angle-down"></i>@endif</a>

                                                        @if ($category->subCategories->count() > 0)
                                                            <ul class="dropdown">
                                                                @forelse ($category->subCategories as $subCategory)
                                                                    <li>
                                                                        <a class="nav-link" href="{{asset('categoria/'.$subCategory->slug)}}">{{$subCategory->name}}</a>
                                                                    </li>
                                                                @empty
                                                                @endforelse
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @empty
                                                @endforelse



												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
        @yield('content')
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->

		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © {{date("Y")}} <a href="cubeti.dev.br" target="_blank">CUBETI</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="{{ asset('loja/images/payments.png') }}" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->

	<!-- Jquery -->
    <script src="{{ asset('loja/js/jquery.min.js') }}"></script>
    <script src="{{ asset('loja/js/jquery-migrate-3.0.0.js') }}"></script>
	<script src="{{ asset('loja/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('loja/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('loja/js/bootstrap.min.js') }}"></script>
	<!-- Color JS -->
	<script src="{{ asset('loja/js/colors.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('loja/js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('loja/js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('loja/js/magnific-popup.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('loja/js/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('loja/js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('loja/js/nicesellect.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('loja/js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('loja/js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('loja/js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('loja/js/easing.js') }}"></script>
	<!-- Active JS -->
	<script src="{{ asset('loja/js/active.js') }}"></script>
</body>
</html>
