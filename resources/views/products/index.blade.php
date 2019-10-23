@extends('layouts.shop')

@section('content')
@if (session('statusFailed'))
    <div class="alert alert-danger">
        <strong>{{ session('statusFailed') }}<strong>
    </div>
@elseif (session('statusSuccess'))
    <div class="alert alert-success">
        <strong>{{ session('statusSuccess') }}<strong>
    </div>
@endif
<body class="shop">
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<!-- header-area-start -->
<header>
	<!-- header-top-area-start -->
	<div class="header-top-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="language-area">
						<ul>
							<li><img src="/theme/img/flag/1.jpg" alt="flag" /><a href="#">English<i class="fa fa-angle-down"></i></a>
								<div class="header-sub">
									<ul>
										<li><a href="#"><img src="/theme/img/flag/2.jpg" alt="flag" />france</a></li>
										<li><a href="#"><img src="/theme/img/flag/3.jpg" alt="flag" />croatia</a></li>
									</ul>
								</div>
							</li>
							<li><a href="#">USD $<i class="fa fa-angle-down"></i></a>
								<div class="header-sub dolor">
									<ul>
										<li><a href="#">EUR €</a></li>
										<li><a href="#">USD $</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="account-area text-right">
						<ul>
							<li><a href="register.html">My Account</a></li>
							<li><a href="checkout.html">Checkout</a></li>
							<li><a href="login.html">Sign in</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header-top-area-end -->
	<!-- header-mid-area-start -->
	<div class="header-mid-area ptb-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
					<div class="header-search">
						<form action="#">
							<input type="text" placeholder="Search entire store here..." />
							<a href="#"><i class="fa fa-search"></i></a>
						</form>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
					<div class="logo-area text-center logo-xs-mrg">
						<a href="index.html"><img src="/theme/img/logo/logo.png" alt="logo" /></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="my-cart">
						<ul>
							<li><a href="#"><i class="fa fa-shopping-cart"></i>My Cart</a>
								<span>2</span>
								<div class="mini-cart-sub">
									<div class="cart-product">
										<div class="single-cart">
											<div class="cart-img">
												<a href="#"><img src="/theme/img/product/1.jpg" alt="book" /></a>
											</div>
											<div class="cart-info">
												<h5><a href="#">Joust Duffle Bag</a></h5>
												<p>1 x £60.00</p>
											</div>
											<div class="cart-icon">
											    <a href="#"><i class="fa fa-remove"></i></a>
											</div>
										</div>
										<div class="single-cart">
											<div class="cart-img">
												<a href="#"><img src="/theme/img/product/3.jpg" alt="book" /></a>
											</div>
											<div class="cart-info">
												<h5><a href="#">Chaz Kangeroo Hoodie</a></h5>
												<p>1 x £52.00</p>
											</div>
											<div class="cart-icon">
                                                <a href="#"><i class="fa fa-remove"></i></a>
                                            </div>
										</div>
									</div>
									<div class="cart-totals">
										<h5>Total <span>£12.00</span></h5>
									</div>
									<div class="cart-bottom">
										<a class="view-cart" href="cart.html">view cart</a>
										<a href="checkout.html">Check out</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header-mid-area-end -->
	<!-- main-menu-area-start -->
	<div class="main-menu-area hidden-sm hidden-xs sticky-header-1" id="header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="menu-area">
						<nav>
							<ul>
								<li class="active"><a href="index.html">Home<i class="fa fa-angle-down"></i></a>
									<div class="sub-menu">
										<ul>
											<li><a href="index-2.html">Home-2</a></li>
											<li><a href="index-3.html">Home-3</a></li>
											<li><a href="index-4.html">Home-4</a></li>
											<li><a href="index-5.html">Home-5</a></li>
											<li><a href="index-6.html">Home-6</a></li>
										</ul>
									</div>
								</li>
								<li><a href="product-details.html">Book<i class="fa fa-angle-down"></i></a>
									<div class="mega-menu">
										<span>
											<a href="#" class="title">Jackets</a>
											<a href="shop.html">Tops & Tees</a>
											<a href="shop.html">Polo Short Sleeve</a>
											<a href="shop.html">Graphic T-Shirts</a>
											<a href="shop.html">Jackets & Coats</a>
											<a href="shop.html">Fashion Jackets</a>
										</span>
										<span>
											<a href="#" class="title">weaters</a>
											<a href="shop.html">Crochet</a>
											<a href="shop.html">Sleeveless</a>
											<a href="shop.html">Stripes</a>
											<a href="shop.html">Sweaters</a>
											<a href="shop.html">hoodies</a>
										</span>
										<span>
											<a href="#" class="title">Bottoms</a>
											<a href="shop.html">Heeled sandals</a>
											<a href="shop.html">Polo Short Sleeve</a>
											<a href="shop.html">Flat sandals</a>
											<a href="shop.html">Short Sleeve</a>
											<a href="shop.html">Long Sleeve</a>
										</span>
										<span>
											<a href="#" class="title">Jeans Pants</a>
											<a href="shop.html">Polo Short Sleeve</a>
											<a href="shop.html">Sleeveless</a>
											<a href="shop.html">Graphic T-Shirts</a>
											<a href="shop.html">Hoodies</a>
											<a href="shop.html">Jackets</a>
										</span>
									</div>
								</li>
								<li><a href="product-details.html">Audio books<i class="fa fa-angle-down"></i></a>
									<div class="mega-menu">
										<span>
											<a href="#" class="title">Shirts</a>
											<a href="shop.html">Tops & Tees</a>
											<a href="shop.html">Sweaters </a>
											<a href="shop.html">Hoodies</a>
											<a href="shop.html">Jackets & Coats</a>
										</span>
										<span>
											<a href="#" class="title">Tops & Tees</a>
											<a href="shop.html">Long Sleeve </a>
											<a href="shop.html">Short Sleeve</a>
											<a href="shop.html">Polo Short Sleeve</a>
											<a href="shop.html">Sleeveless</a>
										</span>
										<span>
											<a href="#" class="title">Jackets</a>
											<a href="shop.html">Sweaters</a>
											<a href="shop.html">Hoodies</a>
											<a href="shop.html">Wedges</a>
											<a href="shop.html">Vests</a>
										</span>
										<span>
											<a href="#" class="title">Jeans Pants</a>
											<a href="shop.html">Polo Short Sleeve</a>
											<a href="shop.html">Sleeveless</a>
											<a href="shop.html">Graphic T-Shirts</a>
											<a href="shop.html">Hoodies</a>
										</span>
									</div>
								</li>
								<li><a href="product-details.html">children’s books<i class="fa fa-angle-down"></i></a>
									<div class="mega-menu mega-menu-2">
										<span>
											<a href="#" class="title">Tops</a>
											<a href="shop.html">Shirts</a>
											<a href="shop.html">Florals</a>
											<a href="shop.html">Crochet</a>
											<a href="shop.html">Stripes</a>
										</span>
										<span>
											<a href="#" class="title">Bottoms</a>
											<a href="shop.html">Shorts</a>
											<a href="shop.html">Dresses</a>
											<a href="shop.html">Trousers</a>
											<a href="shop.html">Jeans</a>
										</span>
										<span>
											<a href="#" class="title">Shoes</a>
											<a href="shop.html">Heeled sandals</a>
											<a href="shop.html">Flat sandals</a>
											<a href="shop.html">Wedges</a>
											<a href="shop.html">Ankle boots</a>
										</span>
									</div>
								</li>
								<li><a href="#">blog<i class="fa fa-angle-down"></i></a>
									<div class="sub-menu sub-menu-2">
										<ul>
											<li><a href="blog.html">blog</a></li>
											<li><a href="blog-details.html">blog-details</a></li>
										</ul>
									</div>
								</li>
								<li><a href="#">pages<i class="fa fa-angle-down"></i></a>
									<div class="sub-menu sub-menu-2">
										<ul>
											<li><a href="shop.html">shop</a></li>
											<li><a href="product-details.html">product-details</a></li>
											<li><a href="blog.html">blog</a></li>
											<li><a href="blog-details.html">blog-details</a></li>
											<li><a href="contact.html">contact</a></li>
											<li><a href="about.html">about</a></li>
											<li><a href="login.html">login</a></li>
											<li><a href="register.html">register</a></li>
											<li><a href="cart.html">cart</a></li>
											<li><a href="checkout.html">checkout</a></li>
											<li><a href="wishlist.html">wishlist</a></li>
											<li><a href="404.html">404 Page</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</div>
					<div class="safe-area">
						<a href="product-details.html">sales off</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- main-menu-area-end -->
	<!-- mobile-menu-area-start -->
	<div class="mobile-menu-area hidden-md hidden-lg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="mobile-menu">
						<nav id="mobile-menu-active">
							<ul id="nav">
								<li><a href="index.html">Home</a>
									<ul>
										<li><a href="index-2.html">Home-2</a></li>
										<li><a href="index-3.html">Home-3</a></li>
										<li><a href="index-4.html">Home-4</a></li>
										<li><a href="index-5.html">Home-5</a></li>
										<li><a href="index-6.html">Home-6</a></li>
									</ul>
								</li>
								<li><a href="product-details.html">Book</a>
									<ul>
										<li><a href="shop.html">Tops & Tees</a></li>
										<li><a href="shop.html">Polo Short Sleeve</a></li>
										<li><a href="shop.html">Graphic T-Shirts</a></li>
										<li><a href="shop.html">Jackets & Coats</a></li>
										<li><a href="shop.html">Fashion Jackets</a></li>
										<li><a href="shop.html">Crochet</a></li>
										<li><a href="shop.html">Sleeveless</a></li>
										<li><a href="shop.html">Stripes</a></li>
										<li><a href="shop.html">Sweaters</a></li>
										<li><a href="shop.html">hoodies</a></li>
										<li><a href="shop.html">Heeled sandals</a></li>
										<li><a href="shop.html">Polo Short Sleeve</a></li>
										<li><a href="shop.html">Flat sandals</a></li>
										<li><a href="shop.html">Short Sleeve</a></li>
										<li><a href="shop.html">Long Sleeve</a></li>
										<li><a href="shop.html">Polo Short Sleeve</a></li>
										<li><a href="shop.html">Sleeveless</a></li>
										<li><a href="shop.html">Graphic T-Shirts</a></li>
										<li><a href="shop.html">Hoodies</a></li>
										<li><a href="shop.html">Jackets</a></li>
									</ul>
								</li>
								<li><a href="product-details.html">Audio books</a>
									<ul>
										<li><a href="shop.html">Tops & Tees</a></li>
										<li><a href="shop.html">Sweaters</a></li>
										<li><a href="shop.html">Hoodies</a></li>
										<li><a href="shop.html">Jackets & Coats</a></li>
										<li><a href="shop.html">Long Sleeve</a></li>
										<li><a href="shop.html">Short Sleeve</a></li>
										<li><a href="shop.html">Polo Short Sleeve</a></li>
										<li><a href="shop.html">Sleeveless</a></li>
										<li><a href="shop.html">Sweaters</a></li>
										<li><a href="shop.html">Hoodies</a></li>
										<li><a href="shop.html">Wedges</a></li>
										<li><a href="shop.html">Vests</a></li>
										<li><a href="shop.html">Polo Short Sleeve</a></li>
										<li><a href="shop.html">Sleeveless</a></li>
										<li><a href="shop.html">Graphic T-Shirts</a></li>
										<li><a href="shop.html">Hoodies</a></li>
									</ul>
								</li>
								<li><a href="product-details.html">children’s books</a>
									<ul>
										<li><a href="shop.html">Shirts</a></li>
										<li><a href="shop.html">Florals</a></li>
										<li><a href="shop.html">Crochet</a></li>
										<li><a href="shop.html">Stripes</a></li>
										<li><a href="shop.html">Shorts</a></li>
										<li><a href="shop.html">Dresses</a></li>
										<li><a href="shop.html">Trousers</a></li>
										<li><a href="shop.html">Jeans</a></li>
										<li><a href="shop.html">Heeled sandals</a></li>
										<li><a href="shop.html">Flat sandals</a></li>
										<li><a href="shop.html">Wedges</a></li>
										<li><a href="shop.html">Ankle boots</a></li>
									</ul>
								</li>
								<li><a href="#">blog</a>
									<ul>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-details.html">blog-details</a></li>
									</ul>
								</li>
								<li><a href="product-details.html">Page</a>
									<ul>
										<li><a href="shop.html">Shop</a></li>
										<li><a href="product-details.html">product-details</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-details.html">blog-details</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="register.html">Register</a></li>
										<li><a href="wishlist.html">Wishlist</a></li>
										<li><a href="404.html">404 Page</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- mobile-menu-area-end -->
</header>
<!-- header-area-end -->
<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumbs-menu">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#" class="active">shop</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs-area-end -->
<!-- shop-main-area-start -->
<div class="shop-main-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="shop-left">
					<div class="section-title-5 mb-30">
						<h2>Shopping Options</h2>
					</div>
					<div class="left-title mb-20">
						<h4>Category</h4>
					</div>
					<div class="left-menu mb-30">
						<ul>
							<li><a href="#">Jackets<span>(15)</span></a></li>
							<li><a href="#">weaters<span>(9)</span></a></li>
							<li><a href="#">Bottoms<span>(12)</span></a></li>
							<li><a href="#">Jeans Pants<span>(6)</span></a></li>
						</ul>
					</div>
					<div class="left-title mb-20">
						<h4>Color</h4>
					</div>
					<div class="color-menu mb-30">
						<ul class="color">
							<li><a href="#"></a></li>
							<li><a href="#" class="bg-2"></a></li>
							<li><a href="#" class="bg-3"></a></li>
							<li><a href="#" class="bg-4"></a></li>
						</ul>
					</div>
					<div class="left-title mb-20">
						<h4>Manufacturer</h4>
					</div>
					<div class="left-menu mb-30">
						<ul>
							<li><a href="#">Adidas<span>(4)</span></a></li>
							<li><a href="#">Chanel<span>(7)</span></a></li>
							<li><a href="#">DKNY <span>(3)</span></a></li>
							<li><a href="#">Dolce<span>(3)</span></a></li>
							<li><a href="#">Gabbana<span>(2)</span></a></li>
							<li><a href="#">Nike<span>(3)</span></a></li>
							<li><a href="#">Other <span>(1)</span></a></li>
						</ul>
					</div>
					<div class="left-title mb-20">
						<h4>Price</h4>
					</div>
					<div class="left-menu mb-30">
						<ul>
							<li><a href="#">$0.00-$9.99<span>(1)</span></a></li>
							<li><a href="#">$30.00-$39.99<span>(11)</span></a></li>
							<li><a href="#">$40.00-$49.99<span>(2)</span></a></li>
							<li><a href="#">$50.00-$59.99<span>(3)</span></a></li>
							<li><a href="#">$70.00-and above<span>(1)</span></a></li>
						</ul>
					</div>
					<div class="left-title mb-20">
						<h4>Random</h4>
					</div>
					<div class="random-area mb-30">
						<div class="product-active-2 owl-carousel">
							<div class="product-total-2">
								<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="#"><img src="/theme/img/product/20.jpg" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">Endeavor Daytrip</a></h4>
										<div class="product-price">
											<ul>
												<li>$30.00</li>
												<li class="old-price">$33.00</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="#"><img src="/theme/img/product/21.jpg" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">Savvy Shoulder Tote</a></h4>
										<div class="product-price">
											<ul>
												<li>$30.00</li>
												<li class="old-price">$35.00</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-most-product">
									<div class="most-product-img">
										<a href="#"><img src="/theme/img/product/22.jpg" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">Compete Track Tote</a></h4>
										<div class="product-price">
											<ul>
												<li>$35.00</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="product-total-2">
								<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="#"><img src="/theme/img/product/23.jpg" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">Voyage Yoga Bag</a></h4>
										<div class="product-price">
											<ul>
												<li>$30.00</li>
												<li class="old-price">$33.00</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="#"><img src="/theme/img/product/24.jpg" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">Impulse Duffle</a></h4>
										<div class="product-price">
											<ul>
												<li>$70.00</li>
												<li class="old-price">$74.00</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-most-product">
									<div class="most-product-img">
										<a href="#"><img src="/theme/img/product/22.jpg" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">Fusion Backpack</a></h4>
										<div class="product-price">
											<ul>
												<li>$59.00</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="banner-area mb-30">
						<div class="banner-img-2">
							<a href="#"><img src="/theme/img/banner/31.jpg" alt="banner" /></a>
						</div>
					</div>
					<div class="left-title-2 mb-30">
						<h2>Compare Products</h2>
						<p>You have no items to compare.</p>
					</div>
					<div class="left-title-2">
						<h2>My Wish List</h2>
						<p>You have no items in your wish list.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<div class="category-image mb-30">
					<a href="#"><img src="/theme/img/banner/32.jpg" alt="banner" /></a>
				</div>
				<div class="section-title-5 mb-30">
					<h2>Book</h2>
				</div>
				<div class="toolbar mb-30">
					<div class="shop-tab">
						<div class="tab-3">
							<ul>
								<li class="active"><a href="#th" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>
								<li><a href="#list" data-toggle="tab"><i class="fa fa-bars"></i>List</a></li>
							</ul>
						</div>
						<div class="list-page">
							<p>Items 1-9 of 11</p>
						</div>
					</div>
					<div class="field-limiter">
						<div class="control">
							<span>Show</span>
							<!-- chosen-start -->
							<select data-placeholder="Default Sorting" style="width:50px;" class="chosen-select" tabindex="1">
								 <option value="Sorting">1</option>
								 <option value="popularity">2</option>
								 <option value="rating">3</option>
								 <option value="date">4</option>
							</select>
							<!-- chosen-end -->
						</div>
					</div>
					<div class="toolbar-sorter">
						<span>Sort By</span>
						<select id="sorter" class="sorter-options" data-role="sorter">
							<option selected="selected" value="position"> Position </option>
							<option value="name"> Product Name </option>
							<option value="price"> Price </option>
						</select>
						<a href="#"><i class="fa fa-arrow-up"></i></a>
					</div>
				</div>				<!-- tab-area-start -->
				<div class="tab-content">
					<div class="tab-pane active" id="th">
					    <div class="row">
							@foreach ($products as $product)
					        <div class="col-lg-3 col-md-4 col-sm-6">
								<!-- single-product-start -->
                                <div class="product-wrapper mb-40">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="/theme/img/product/1.jpg" alt="book" class="primary" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="action-view" href="{{ route('products.show', $product->id) }}" data-target="#productModal" data-toggle="modal" title="Quick View">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span></li>
                                                <li><span class="discount-percentage">-5%</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details text-center">
                                        <div class="product-rating">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4><a href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a></h4>
                                        <div class="product-price">
                                            <ul>
                                                <li>{{ $product->price }} VNĐ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-link">
                                        <div class="product-button">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
							</div>
							@endforeach
					        </div>
					    </div>
					</div>
				</div>
				<!-- tab-area-end -->
				<!-- pagination-area-start -->
				<div class="pagination-area mt-50">
					<div class="list-page-2">
						<p>Items 1-9 of 11</p>
					</div>
					<div class="page-number">
						<ul>
						{{ $products->links('vendor.pagination.default') }}
						</ul>
					</div>
				</div>
				<!-- pagination-area-end -->
			</div>
		</div>
	</div>
</div>
@endsection
