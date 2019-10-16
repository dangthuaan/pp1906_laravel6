@extends('layouts.shop')

@section('content')

<h1>Product show page</h1>
<h3>Book id: {{ $product->id }}</h3>
<h3>Book title: {{ $product->title }}</h3>
<h3>Book author: {{ $product->author }}</h3>
<h3>Book publisher: {{ $product->publisher }}</h3>
<h3>Book publish date: {{ $product->publish_date }}</h3>
<h3>Book language: {{ $product->language }}</h3>
<h3>Book price: {{ $product->price }}</h3>

<h3></h3>

<body class="product-details">
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
						<li><a href="#" class="active">product-details</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs-area-end -->
<!-- product-main-area-start -->
<div class="product-main-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<!-- product-main-area-start -->
				<div class="product-main-area">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
							<div class="flexslider">
								<ul class="slides">
									<li data-thumb="/theme/img/thum-2/1.jpg">
									  <img src="/theme/img/flex/1.jpg" alt="woman" />
									</li>
									<li data-thumb="/theme/img/thum-2/4.jpg">
									  <img src="/theme/img/flex/5.jpg" alt="woman" />
									</li>
									<li data-thumb="/theme/img/thum-2/2.jpg">
									  <img src="/theme/img/flex/2.jpg" alt="woman" />
									</li>
									<li data-thumb="/theme/img/thum-2/5.jpg">
									  <img src="/theme/img/flex/5.jpg" alt="woman" />
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
							<div class="product-info-main">
								<div class="page-title">
									<h1>Savvy Shoulder Tote</h1>
								</div>
								<div class="product-info-stock-sku">
									<span>In stock</span>
									<div class="product-attribute">
										<span>SKU</span>
										<span class="value">24-WB05</span>
									</div>
								</div>
								<div class="product-reviews-summary">
									<div class="rating-summary">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="reviews-actions">
										<a href="#">3 Reviews</a>
										<a href="#" class="view">Add Your Review</a>
									</div>
								</div>
								<div class="product-info-price">
									<div class="price-final">
										<span>$34.00</span>
										<span class="old-price">$40.00</span>
									</div>
								</div>
								<div class="product-add-form">
									<form action="#">
										<div class="quality-button">
											<input class="qty" type="number" value="1">
										</div>
										<a href="#">Add to cart</a>
									</form>
								</div>
								<div class="product-social-links">
									<div class="product-addto-links">
										<a href="#"><i class="fa fa-heart"></i></a>
										<a href="#"><i class="fa fa-pie-chart"></i></a>
										<a href="#"><i class="fa fa-envelope-o"></i></a>
									</div>
									<div class="product-addto-links-text">
										<p>Powerwalking to the gym or strolling to the local coffeehouse, the Savvy Shoulder Tote lets you stash your essentials in sporty style! A top-loading compartment provides quick and easy access to larger items, while zippered pockets on the front and side hold cash, credit cards and phone.</p>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
				<!-- product-main-area-end -->
				<!-- product-info-area-start -->
				<div class="product-info-area mt-80">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="active"><a href="#Details" data-toggle="tab">Details</a></li>
						<li><a href="#Reviews" data-toggle="tab">Reviews 3</a></li>
					</ul>
					<div class="tab-content">
                        <div class="tab-pane active" id="Details">
                            <div class="valu">
                              <p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare, it's ideal for athletes with places to go.</p>
                              <ul>
                                <li><i class="fa fa-circle"></i>Dual top handles.</li>
                                <li><i class="fa fa-circle"></i>Adjustable shoulder strap.</li>
                                <li><i class="fa fa-circle"></i>Full-length zipper.</li>
                                <li><i class="fa fa-circle"></i>L 29" x W 13" x H 11".</li>
                              </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="Reviews">
                            <div class="valu valu-2">
                                <div class="section-title mb-60 mt-60">
                                    <h2>Customer Reviews</h2>
                                </div>
                                <ul>
                                    <li>
                                        <div class="review-title">
                                            <h3>themes</h3>
                                        </div>
                                        <div class="review-left">
                                            <div class="review-rating">
                                                <span>Price</span>
                                                <div class="rating-result">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="review-rating">
                                                <span>Value</span>
                                                <div class="rating-result">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="review-rating">
                                                <span>Quality</span>
                                                <div class="rating-result">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-right">
                                            <div class="review-content">
                                                <h4>themes </h4>
                                            </div>
                                            <div class="review-details">
                                                <p class="review-author">Review by<a href="#">plaza</a></p>
                                                <p class="review-date">Posted on <span>12/9/16</span></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="review-add">
                                    <h3>You're reviewing:</h3>
                                    <h4>Joust Duffle Bag</h4>
                                </div>
                                <div class="review-field-ratings">
                                    <span>Your Rating <sup>*</sup></span>
                                    <div class="control">
                                        <div class="single-control">
                                            <span>Value</span>
                                            <div class="review-control-vote">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-control">
                                            <span>Quality</span>
                                            <div class="review-control-vote">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-control">
                                            <span>Price</span>
                                            <div class="review-control-vote">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-form">
                                    <div class="single-form">
                                        <label>Nickname <sup>*</sup></label>
                                        <form action="#">
                                            <input type="text" />
                                        </form>
                                    </div>
                                    <div class="single-form single-form-2">
                                        <label>Summary <sup>*</sup></label>
                                        <form action="#">
                                            <input type="text" />
                                        </form>
                                    </div>
                                    <div class="single-form">
                                        <label>Review <sup>*</sup></label>
                                        <form action="#">
                                            <textarea name="massage" cols="10" rows="4"></textarea>
                                        </form>
                                    </div>
                                </div>
                                <div class="review-form-button">
                                    <a href="#">Submit Review</a>
                                </div>
                            </div>
                        </div>
                    </div>	
				</div>
				<!-- product-info-area-end -->
				<!-- new-book-area-start -->
				<div class="new-book-area mt-60">
					<div class="section-title text-center mb-30">
						<h3>upsell products</h3>
					</div>
					<div class="tab-active-2 owl-carousel">
						<!-- single-product-start -->
						<div class="product-wrapper">
							<div class="product-img">
								<a href="#">
									<img src="/theme/img/product/1.jpg" alt="book" class="primary" />
								</a>
								<div class="quick-view">
                                    <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
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
								<h4><a href="#">Joust Duffle Bag</a></h4>
								<div class="product-price">
									<ul>
										<li>$60.00</li>
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
						<!-- single-product-start -->
						<div class="product-wrapper">
							<div class="product-img">
								<a href="#">
									<img src="/theme/img/product/3.jpg" alt="book" class="primary" />
								</a>
								<div class="quick-view">
                                    <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
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
								<h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
								<div class="product-price">
									<ul>
										<li>$52.00</li>
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
						<!-- single-product-start -->
						<div class="product-wrapper">
							<div class="product-img">
								<a href="#">
									<img src="/theme/img/product/5.jpg" alt="book" class="primary" />
								</a>
								<div class="quick-view">
                                    <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
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
								<h4><a href="#">Set of Sprite Yoga Straps</a></h4>
								<div class="product-price">
									<ul>
										<li> <span>Starting at</span>$34.00</li>
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
						<!-- single-product-start -->
						<div class="product-wrapper">
							<div class="product-img">
								<a href="#">
									<img src="/theme/img/product/7.jpg" alt="book" class="primary" />
								</a>
								<div class="quick-view">
                                    <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
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
								<h4><a href="#">Strive Shoulder Pack</a></h4>
								<div class="product-price">
									<ul>
										<li>$30.00</li>
										<li class="old-price">$32.00</li>
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
				</div>
				<!-- new-book-area-start -->
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="shop-left">
					<div class="left-title mb-20">
						<h4>Related Products</h4>
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
							<a href="#"><img src="/theme/img/banner/33.jpg" alt="banner" /></a>
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
		</div>
	</div>
</div>
<!-- product-main-area-end -->
@endsection