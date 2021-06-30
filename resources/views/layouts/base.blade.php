<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Desarroyo</title>	
	<link rel="shortcut icon" type="image/x-icon" href="{{asset ('assets/images/developer-1.ico')}}">
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css.map">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css" integrity="sha512-40vN6DdyQoxRJCw0klEUwZfTTlcwkOLKpP8K8125hy9iF4fi8gPpWZp60qKC6MYAFaond8yQds7cTMVU8eMbgA==" crossorigin="anonymous" />

	@stack('style')

	@livewireStyles
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Pesos (MXN)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li>
								@if(Route::has('login'))
									@auth 
										@if(Auth::user()->utype === 'ADM')
										<li class="menu-item menu-item-has-children parent" >
											<a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="submenu curency" >
												<li class="menu-item" >
													<a title="Dashboard" href="{{route('admin.dashboard')}}">Dashboard</a>
												</li>
												<li class="menu-item">
													<a title="Categories" href="{{route('admin.categories')}}">Categories</a>
												</li>
												<li class="menu-item">
													<a title="Products" href="{{route('admin.products')}}">All Products</a>
												</li>
												<li class="menu-item">
													<a title="Manage home slider" href="{{route('admin.homeslider')}}">Manage home slider</a>
												</li>
												<li class="menu-item">
													<a title="Manage home Categories" href="{{route('admin.homecategories')}}">Manage home Categories</a>
												</li>
												<li class="menu-item">
													<a title="Sale Setting" href="{{route('admin.sale')}}">Sale Setting</a>
												</li>
												<li class="menu-item">
													<a title="All Coupon" href="{{route('admin.coupons')}}">All Coupon</a>
												</li>
												<li class="menu-item">
													<a title="All Orders" href="{{route('admin.orders')}}">All Order</a>
												</li>
												<li class="menu-item">
													<a title="Contact Messages" href="{{route('admin.contact')}}">Contact Messages</a>
												</li>
												<li class="menu-item">
													<a title="Settings" href="{{route('admin.settings')}}">Settings</a>
												</li>
												<li class="menu-item">
													<a title="All Orders" href="{{route('admin.logo')}}">Home Logo</a>
												</li>
												<li class="menu-item" >
													<a title="Dashboard" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
												</li>
												<form id="logout-form" method="POST" action="{{route('logout')}}">
													@csrf
													
												</form>
											</ul>
										</li>
										@else	
										<li class="menu-item menu-item-has-children parent" >
											<a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="submenu curency" >
												<li class="menu-item" >
													<a title="Saldo" href="#">Saldo {{Auth::user()->usd}}$</a>
												</li>
												<li class="menu-item" >
													<a title="profile" href="{{ route('profile.show') }}">Profile</a>
												</li>
												<li class="menu-item" >
													<a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a>
												</li>
												<li class="menu-item" >
													<a title="My Orders" href="{{route('user.orders')}}">My Orders</a>
												</li>
												<li class="menu-item" >
													<a title="Change Password" href="{{route('user.changepassword')}}">Change Password</a>
												</li>
												<li class="menu-item" >
													<a title="Dashboard" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
												</li>
												<form id="logout-form" method="POST" action="{{route('logout')}}">
													@csrf
													
												</form>
											</ul>
										</li>
										@endif	
									@else 
										<li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Login</a></li>
										<li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Register</a></li>
									@endif

								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						@livewire('logo-component')	

						@livewire('header-search-component')
							<!-- esta es la parte del carrito e item de productos -->
						<div class="wrap-icon right-section">
							<!-- agregamos el componente de wishlist --->
							@livewire('wishlist-count-component')
							<!-- agregamos el componente de cart --->
							@livewire('cart-count-component')
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="header-nav-section hidden">  <!-- los ocultamos mientra le damos una utilidad -->
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
							</ul>
						</div>
					</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="{{route('about')}}" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="/contact-us" class="link-term mercado-item-title">Contact Us</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	{{$slot}}

	@livewire('footer-component')
	
	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js')}}"></script>
	{{-- <script src="{{ asset('assets/js/chosen.jquery.min.js')}}"></script> --}}
	<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('assets/js/functions.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js" integrity="sha512-jWNpWAWx86B/GZV4Qsce63q5jxx/rpWnw812vh0RE+SBIo/mmepwOSQkY2eVQnMuE28pzUEO7ux0a5sJX91g8A==" crossorigin="anonymous"></script>
	<script src="https://cdn.tiny.cloud/1/bpnevz47wcpmdx4x7bjgq0vlvm45t42wqaipy1ypn9bu4jh4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	
	

	@livewireScripts

	@stack('scripts')
</body>
</html>