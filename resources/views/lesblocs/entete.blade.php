<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Acceuil | Boutique - Vente en ligne</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
	<link rel="apple-touch-icon" href="{{asset('images/icon.png')}}">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

	<!-- Stylesheets asset(-->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/plugins.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/messtyles.css')}}">
	<!-- Cusom css -->
   <link rel="stylesheet" href="{{asset('css/custom.css')}}">

	<!-- Modernizer js -->
	<script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="index.blade.html">
								<img src="{{asset('images/logo/logo.png')}}" alt="logo images">
							</a>
						</div> 
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="{{route('acceuil.nouveauproduit')}}">Acceuil</a></li>
								<li class="drop"><a href="#">Boutique</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title"> Boutique</li>
											<li><a href="{{route('produit.liste')}}">Produits</a></li>
											<li><a href="{{route('lepanier')}}">Panier</a></li>
											<li><a href="#">Compte</a></li>
											
											<!--<li><a href="single-product.html">Single Product</a></li> -->
										</ul>
										<!--<ul class="item item03">
											<li class="title">Shop Page</li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="cart.html">Cart Page</a></li>
											<li><a href="checkout.html">Checkout Page</a></li>
											<li><a href="wishlist.html">Wishlist Page</a></li>
											<li><a href="error404.html">404 Page</a></li>
											<li><a href="faq.html">Faq Page</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Bargain Books</li>
											<li><a href="shop-grid.html">Bargain Bestsellers</a></li>
											<li><a href="shop-grid.html">Activity Kits</a></li>
											<li><a href="shop-grid.html">B&N Classics</a></li>
											<li><a href="shop-grid.html">Books Under $5</a></li>
											<li><a href="shop-grid.html">Bargain Books</a></li>
										</ul> -->
									</div>
								</li>
								<li class="drop"><a href="{{route('produit.liste')}}">Accès Rapide</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Categories</li>
											<li><a href="shop-grid.html">Pair de Chaussures </a></li>
											<li><a href="shop-grid.html">BuProduits de beauté </a></li>
											<li><a href="shop-grid.html">Pagnes et Vêtements </a></li>
											<li><a href="shop-grid.html">Sacs et Valises </a></li>
											<li><a href="shop-grid.html">Mèche Brasilienne Machline </a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Categories suite</li>
											<li><a href="shop-grid.html">Emiliene Hair</a></li>
											<li><a href="shop-grid.html">Emiliene Hairn</a></li>
											<li><a href="shop-grid.html">Emiliene Hair</a></li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Categories suite ..</li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
										</ul>
									</div>
								</li>
								<!--<li class="drop"><a href="shop-grid.html">Kids</a>
									<div class="megamenu mega02">
										<ul class="item item02">
											<li class="title">Top Collections</li>
											<li><a href="shop-grid.html">American Girl</a></li>
											<li><a href="shop-grid.html">Diary Wimpy Kid</a></li>
											<li><a href="shop-grid.html">Finding Dory</a></li>
											<li><a href="shop-grid.html">Harry Potter</a></li>
											<li><a href="shop-grid.html">Land of Stories</a></li>
										</ul>
										<ul class="item item02">
											<li class="title">More For Kids</li>
											<li><a href="shop-grid.html">B&N Educators</a></li>
											<li><a href="shop-grid.html">B&N Kids' Club</a></li>
											<li><a href="shop-grid.html">Kids' Music</a></li>
											<li><a href="shop-grid.html">Toys & Games</a></li>
											<li><a href="shop-grid.html">Hoodies</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="#">Pages</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
											<li><a href="about.html">About Page</a></li>
											<li class="label2"><a href="portfolio.html">Portfolio</a>
												<ul>
													<li><a href="portfolio.html">Portfolio</a></li>
													<li><a href="portfolio-details.html">Portfolio Details</a></li>
												</ul>
											</li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="cart.html">Cart Page</a></li>
											<li><a href="checkout.html">Checkout Page</a></li>
											<li><a href="wishlist.html">Wishlist Page</a></li>
											<li><a href="error404.html">404 Page</a></li>
											<li><a href="faq.html">Faq Page</a></li>
											<li><a href="team.html">Team Page</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="blog.html">Blog</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
											<li><a href="blog.html">Blog Page</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</div>
								</li>-->
								<li><a href="{{route('contact')}}">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							
							<?php
$nbrproduit = App\Cart::where('session_id', Session::get('session_id'))->count();
                                                     
if ($nbrproduit!=NULL){
	?>
	<li class="shopcart"><a  href="{{route('lepanier')}}" title="Voir et modifier le panier"><span class="product_qun">{{$nbrproduit}}</span></a></li>
		
<?php 
}else{
	?>
	<li class="shopcart" ><a  href="{{route('lepanier')}}" title="Voir et modifier le panier"><span class="product_qun">0</span></a></li>
		
<?php } ?>

							
									<!-- Start Shopping Cart -->
							<!--	<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>close</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>3 items</span>
											<span>Cart Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span>$66.00</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="{{route('lepanier')}}">Go to Checkout</a>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="product-details.html"><img src="{{asset('images/product/sm-img/1.jpg')}}" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
														<span class="prize">$30.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 01</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="{{asset('images/product/sm-img/3.jpg')}}" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Impulse Duffle</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="{{asset('images/product/sm-img/2.jpg')}}" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Compete Track Tote</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mini_action cart">
											<a class="cart__btn" href="{{route('produit.panier')}}">Voir et Modifier le panier</a>
										</div>
									</div>
								</div>
								 End Shopping Cart -->
							</li>
							<!--<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Currency</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">USD - US Dollar</span>
													<ul class="switcher-dropdown">
														<li>GBP - British Pound Sterling</li>
														<li>EUR - Euro</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Language</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">English01</span>
													<ul class="switcher-dropdown">
														<li>English02</li>
														<li>English03</li>
														<li>English04</li>
														<li>English05</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Select Store</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">Fashion Store</span>
													<ul class="switcher-dropdown">
														<li>Furniture</li>
														<li>Shoes</li>
														<li>Speaker Store</li>
														<li>Furniture</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>My Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Compare Product</a></span>
														<span><a href="#">My Account</a></span>
														<span><a href="#">My Wishlist</a></span>
														<span><a href="#">Sign In</a></span>
														<span><a href="#">Create An Account</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li> -->
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="index.html">Acceuil</a></li>
								
								<li><a href="#">Boutique</a>
									<ul>
									<li><a href="{{route('produit.liste')}}">Produits</a></li>
											<li><a href="{{route('lepanier')}}">Panier</a></li>
											<li><a href="#">Compte</a></li>
									</ul>
								</li>
								<li class="drop"><a href="{{route('produit.liste')}}">Accès Rapide</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Categories</li>
											<li><a href="shop-grid.html">Pair de Chaussures </a></li>
											<li><a href="shop-grid.html">BuProduits de beauté </a></li>
											<li><a href="shop-grid.html">Pagnes et Vêtements </a></li>
											<li><a href="shop-grid.html">Sacs et Valises </a></li>
											<li><a href="shop-grid.html">Mèche Brasilienne Machline </a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Categories suite</li>
											<li><a href="shop-grid.html">Emiliene Hair</a></li>
											<li><a href="shop-grid.html">Emiliene Hairn</a></li>
											<li><a href="shop-grid.html">Emiliene Hair</a></li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Categories suite ..</li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
											<li><a href="shop-grid.html">Caro Beauté</a></li>
										</ul>
									</div>
								</li>
								<li><a href="{{route('contact')}}">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->	
			</div>	
			
		</header>
	
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		