<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from premiumlayers.net/demo/html/automan/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Nov 2018 09:12:52 GMT -->
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AutoMart</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- Ionicons -->
		<link href="fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
        <!-- Cars -->
		<link href="fonts/cars/style.css" rel="stylesheet">
		<!-- FlexSlider -->
		<link href="scripts/FlexSlider/flexslider.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.css" rel="stylesheet">
		<!-- noUiSlider -->
		<link href="css/jquery.nouislider.min.css" rel="stylesheet">
		<!-- Style.css -->
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<header class="header">
			<div class="container">
				<div class="navigation clearfix">
					<div class="logo"><a href="index-2.html"><img src="images/logo.png" alt="Automan" class="img-responsive"></a></div> <!-- end .logo -->
					<div class="login"><a href="#"><i class="ion-ios-person"></i></a></div> <!-- end .login -->
					<div class="contact">
						<div class="line"></div>
						<a href="contact-us.html"><i class="fa fa-phone"></i></a>
					</div> <!-- end .contact -->
					<nav class="main-nav">
						<ul class="list-unstyled">
							<li class="active">
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="about-us.php">About US</a>
							</li>
							<li>
								<a href="auction_cars.php">Cars</a>
							</li>
							<li>
								<a href="mypurchase.php">My Purchase</a>
							</li>
							<li>
								<a href="myoder.php">My Order</a>
							</li>
							<li>
								<a href="#">Auctions</a>
								<ul>
									<li><a href="available.php">Available Auctions</a></li>
									<li><a href="closed.php">Closed Auctions</a></li>
									<li><a href="upcoming.php">Upcoming Auctions</a></li>
								</ul>
							</li>
							<li><a href="contact-us.php">Contact Us</a></li>
							<li><a href="contact-us.php">Logout</a></li>
						</ul>
					</nav> <!-- end .main-nav -->
					<a href="#" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
				</div> <!-- end .navigation -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<div class="flexslider welcome">
			<div class="slides">
				<div class="slide" style="background-image: url('images/background01.jpg');">
					<div class="inner">
						<div class="container">
							<div class="banner-wrapper">
								<div class="banner">
									<div class="before">$480000</div>
									Top Cars: Mercedes S Class
								</div> <!-- end .banner -->
							</div> <!-- end .banner-wrapper -->
							<a href="details.html" class="button border white xsmall">Know More</a>
						</div> <!-- end .container -->
					</div> <!-- end .inner -->
				</div> <!-- end .slide -->
				
			
			</div> <!-- end .slides -->
		</div> <!-- end .welcome -->

		<section class="section dark tiny">
			<div class="inner">
				<div class="container">
					<div class="tabpanel border section-tab" role="tabpanel">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#search-cars" aria-controls="search-cars" role="tab" data-toggle="tab">Search Cars</a></li>
							<li role="presentation"><a href="#sell-car" aria-controls="sell-car" role="tab" data-toggle="tab">Sell Car</a></li>
						</ul> <!-- end .nav-tabs -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="search-cars">
								<form action="#" method="post" class="banner-form">
									<div class="item">
										<div class="select-wrapper">
											<select class="selectpicker">
												<option>Select Brand</option>
												<option>Brand 1</option>
												<option>Brand 2</option>
											</select>
											
										</div> <!-- end .select-wrapper -->
									</div> <!-- end .item -->
									<div class="item">
										<div class="select-wrapper">
											<select class="selectpicker">
												<option>Select Model</option>
												<option>Model 1</option>
												<option>Model 2</option>
											</select>
											
										</div> <!-- end .select-wrapper -->
									</div> <!-- end .item -->
									<div class="item">
										<div class="select-wrapper">
											<select class="selectpicker">
												<option>Year of Model</option>
												<option>Year 1</option>
												<option>Year 2</option>
											</select>
											
										</div> <!-- end .select-wrapper -->
									</div> <!-- end .item -->
									<div class="item">
										<span class="price-slider-value">Price (Lt) <span id="price-min"></span> - <span id="price-max"></span></span>
										<div id="price-slider"></div>
									</div> <!-- end .item -->
									<div class="item">
										<button type="submit" class="button solid light-blue">Search</button>
									</div> <!-- end .item -->
								</form> <!-- end .banner-form -->
							</div> <!-- end .tab-panel -->
							<div role="tabpanel" class="tab-pane fade" id="sell-car">
								<form action="#" method="post" class="banner-form">
									<div class="item">
										<input type="text" placeholder="Brand">
									</div> <!-- end .item -->
									<div class="item">
										<input type="text" placeholder="Model">
									</div> <!-- end .item -->
									<div class="item">
										<input type="text" placeholder="Year">
									</div> <!-- end .item -->
									<div class="item">
										<input type="text" placeholder="Price">
									</div> <!-- end .item -->
									<div class="item">
										<button type="submit" class="button solid light-blue">Submit</button>
									</div> <!-- end .item -->
								</form> <!-- end .banner-form -->
							</div> <!-- end .tab-panel -->
						</div> <!-- end .tab-content -->
					</div> <!-- end .tabpanel -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->

		<section class="section white no-padding-bottom text-center">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<h1 class="main-heading">Welcome to Car Dealership WP Theme</h1>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem eriam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<img src="images/car1.png" alt="car" class="img-responsive center-block featured-image">
						</div> <!-- end .col-sm-8 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->

		<section class="section light">
			<div class="inner">
				<div class="container">
					<h1 class="main-heading">What are you looking for?<small>Best Car Deals</small></h1>
					<div class="services clearfix">
						<div class="service yellow">
							<div class="icon">
								<i class="icon-minicar"></i>
								<div class="sub-icon">$</div> <!-- end .sub-icon -->
							</div> <!-- end .icon -->
							<div class="line"></div> <!-- end .line -->
							<h5>Car Sale</h5>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
						</div> <!-- end .service -->
						<div class="service orange">
							<div class="icon">
								<i class="icon-sports-car"></i>
								<div class="sub-icon"><i class="ion-key"></i></div> <!-- end .sub-icon -->
							</div> <!-- end .icon -->
							<div class="line"></div> <!-- end .line -->
							<h5>Car Buy</h5>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
						</div> <!-- end .service -->
						<div class="service green">
							<div class="icon">
								<i class="icon-monster-truck"></i>
								<div class="sub-icon">R</div> <!-- end .sub-icon -->
							</div> <!-- end .icon -->
							<div class="line"></div> <!-- end .line -->
							<h5>Car On Rent</h5>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
						</div> <!-- end .service -->
					</div> <!-- end .services -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->

		<section class="section white">
			<div class="inner">
				<h1 class="main-heading">Featured Car Deals<small>Best Car Deals</small></h1>
				<div id="featured-cars" class="owl-carousel featured-cars">
					<div class="item">
						<div class="featured-car">
							<div class="image">
								<a href="#"><img src="images/featured-car01.jpg" alt="car" class="img-responsive"></a>
								<span class="sale-tag">For Sale</span>
							</div> <!-- end .image -->
							<div class="content">
								<div class="clearfix">
									<h5><a href="#">Range Rover</a></h5>
									<span class="price">$80,000</span>
								</div> <!-- end .clearfix -->
								<div class="line"></div>
								<p>Nam liber tempor cum soluta nobis eleife option congue nihil...</p>
							</div> <!-- end .content -->
							<div class="details clearfix">
								<div class="seats"><i class="icon-car-seat"></i>4</div>
								<div class="fuel"><i class="icon-car-fuel"></i>Petrol</div>
								<div class="type"><i class="icon-car-door"></i>Sport</div>
							</div> <!-- end .details -->
						</div> <!-- end .featured-car -->
					</div> <!-- end .item -->
					<div class="item">
						<div class="featured-car">
							<div class="image">
								<a href="#"><img src="images/featured-car02.jpg" alt="car" class="img-responsive"></a>
								<span class="sale-tag">For Sale</span>
							</div> <!-- end .image -->
							<div class="content">
								<div class="clearfix">
									<h5><a href="#">Porsche</a></h5>
									<span class="price">$80,000</span>
								</div> <!-- end .clearfix -->
								<div class="line"></div>
								<p>Nam liber tempor cum soluta nobis eleife option congue nihil...</p>
							</div> <!-- end .content -->
							<div class="details clearfix">
								<div class="seats"><i class="icon-car-seat"></i>4</div>
								<div class="fuel"><i class="icon-car-fuel"></i>Petrol</div>
								<div class="type"><i class="icon-car-door"></i>Sport</div>
							</div> <!-- end .details -->
						</div> <!-- end .featured-car -->
					</div> <!-- end .item -->
					<div class="item">
						<div class="featured-car">
							<div class="image">
								<a href="#"><img src="images/featured-car03.jpg" alt="car" class="img-responsive"></a>
								<span class="sale-tag green">For Rent</span>
							</div> <!-- end .image -->
							<div class="content">
								<div class="clearfix">
									<h5><a href="#">Mercediz Benz</a></h5>
									<span class="price">$10 / km</span>
								</div> <!-- end .clearfix -->
								<div class="line"></div>
								<p>Nam liber tempor cum soluta nobis eleife option congue nihil...</p>
							</div> <!-- end .content -->
							<div class="details clearfix">
								<div class="seats"><i class="icon-car-seat"></i>4</div>
								<div class="fuel"><i class="icon-car-fuel"></i>Petrol</div>
								<div class="type"><i class="icon-car-door"></i>Sport</div>
							</div> <!-- end .details -->
						</div> <!-- end .featured-car -->
					</div> <!-- end .item -->
					<div class="item">
						<div class="featured-car">
							<div class="image">
								<a href="#"><img src="images/featured-car01.jpg" alt="car" class="img-responsive"></a>
								<span class="sale-tag">For Sale</span>
							</div> <!-- end .image -->
							<div class="content">
								<div class="clearfix">
									<h5><a href="#">Range Rover</a></h5>
									<span class="price">$80,000</span>
								</div> <!-- end .clearfix -->
								<div class="line"></div>
								<p>Nam liber tempor cum soluta nobis eleife option congue nihil...</p>
							</div> <!-- end .content -->
							<div class="details clearfix">
								<div class="seats"><i class="icon-car-seat"></i>4</div>
								<div class="fuel"><i class="icon-car-fuel"></i>Petrol</div>
								<div class="type"><i class="icon-car-door"></i>Sport</div>
							</div> <!-- end .details -->
						</div> <!-- end .featured-car -->
					</div> <!-- end .item -->
					<div class="item">
						<div class="featured-car">
							<div class="image">
								<a href="#"><img src="images/featured-car02.jpg" alt="car" class="img-responsive"></a>
								<span class="sale-tag">For Sale</span>
							</div> <!-- end .image -->
							<div class="content">
								<div class="clearfix">
									<h5><a href="#">Porsche</a></h5>
									<span class="price">$80,000</span>
								</div> <!-- end .clearfix -->
								<div class="line"></div>
								<p>Nam liber tempor cum soluta nobis eleife option congue nihil...</p>
							</div> <!-- end .content -->
							<div class="details clearfix">
								<div class="seats"><i class="icon-car-seat"></i>4</div>
								<div class="fuel"><i class="icon-car-fuel"></i>Petrol</div>
								<div class="type"><i class="icon-car-door"></i>Sport</div>
							</div> <!-- end .details -->
						</div> <!-- end .featured-car -->
					</div> <!-- end .item -->
				</div> <!-- end .featured-cars -->
				<div class="container">
					<div class="call-to-action clearfix">
						<div class="image" style="background-image: url('images/cta.jpg');"></div>
						<div class="content">
							<h2>Sell your Car</h2>
							<p>Submit detail and sell it Nam liber tempor cum soluta nobis eleife  option congue nihil...</p>
						</div>
						<div class="cta-button">
							<a href="add-car-details.html" class="button border white">Submit Car</a>
						</div>
					</div>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->

		<section class="section lighter">
			<div class="inner">
				<div class="container">
					<h1 class="main-heading">Latest From The Blog<small>Best Car Deals</small></h1>
					<div id="blog-masonry" class="blog-masonry">
						<div class="blog-masonry-sizer"></div>
						<div class="blog-post wide">
							<a href="blog-post.html"><div class="blog-post-image" style="background-image: url('images/blog-post-image01.jpg');"></div></a>
							<div class="content">
								<div class="avatar"><img src="images/avatar01.jpg" alt="author name"></div>
								<div class="meta"><span class="author">by John Doe</span><span class="date">Tue, Aug 14, 12</span></div>
								<h4><a href="blog-post.html">Porche Release New Model</a></h4>
								<p class="excerpt">Praesent vel metus ac enim vulputate semper. Quisque consequat tempor nibh a mollis. Sed quis neque non ipsum scelerisque ornare at sit amet lacus... <a href="blog-post.html">Read more</a></p>
							</div> <!-- end .content -->
						</div> <!-- end .blog-post -->
						<div class="blog-post">
							<a href="blog-post.html"><div class="blog-post-image" style="background-image: url('images/blog-post-image02.jpg');"></div></a>
							<div class="content">
								<div class="avatar"><img src="images/avatar02.jpg" alt="author name"></div>
								<div class="meta"><span class="author">by John Doe</span><span class="date">Tue, Aug 14, 12</span></div>
								<h4><a href="blog-post.html">The Grand Car Road Show 2014</a></h4>
								<p class="excerpt">Nam liber tempor cum soluta nobis eleife option congue nihil... <a href="blog-post.html">Read more</a></p>
							</div> <!-- end .content -->
						</div> <!-- end .blog-post -->
						<div class="blog-post short">
							<a href="blog-post.html"><div class="blog-post-image" style="background-image: url('images/blog-post-image03.jpg');"></div></a>
							<div class="content">
								<div class="avatar"><img src="images/avatar03.jpg" alt="author name"></div>
								<div class="meta"><span class="author">by John Doe</span><span class="date">Tue, Aug 14, 12</span></div>
								<h4><a href="blog-post.html">Bentley At WorldExpo</a></h4>
								<p class="excerpt">Nam liber tempor cum soluta nobis eleife option congue nihil... <a href="blog-post.html">Read more</a></p>
							</div> <!-- end .content -->
						</div> <!-- end .blog-post -->
						<div class="blog-post audio">
							<div class="audio-player">
								<audio controls>
									<source src="images/redwing.mp3" type="audio/mpeg">
								</audio>
							</div> <!-- end .audio-player -->
							<div class="content">
								<div class="avatar"><img src="images/avatar04.jpg" alt="author name"></div>
								<div class="meta"><span class="author">by John Doe</span><span class="date">Tue, Aug 14, 12</span></div>
								<h4><a href="blog-post.html">Audio Post</a></h4>
								<p class="excerpt">Nam liber tempor cum soluta nobis eleife option congue nihil... <a href="blog-post.html">Read more</a></p>
							</div> <!-- end .content -->
						</div> <!-- end .blog-post -->
						<div class="blog-post video">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" width="434" height="244" src="https://www.youtube.com/embed/iNJdPyoqt8U?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							</div> <!-- end .embed-responsive -->
							<div class="content">
								<div class="avatar"><img src="images/avatar05.jpg" alt="author name"></div>
								<div class="meta"><span class="author">by John Doe</span><span class="date">Tue, Aug 14, 12</span></div>
								<h4><a href="blog-post.html">BMW Unveils New Car</a></h4>
								<p class="excerpt">Praesent vel metus ac enim vulputate semper. Quisque consequat tempor nibh a mollis. Sed quis neque non ipsum scelerisque ornare at sit amet lacus... <a href="blog-post.html">Read more</a></p>
							</div> <!-- end .content -->
						</div> <!-- end .blog-post -->
						<div class="blog-post quote">
							<div class="content">
								<div class="avatar"><img src="images/avatar06.jpg" alt="author name"></div>
								<div class="meta"><span class="author">by John Doe</span><span class="date">Tue, Aug 14, 12</span></div>
								<span class="quotes"><i class="fa fa-quote-left"></i></span>
								<p class="excerpt">Nam liber tempor cum soluta nobis eleife option congue nihil... <a href="blog-post.html">Read more</a></p>
							</div> <!-- end .content -->
						</div> <!-- end .blog-post -->
						<div class="blog-post quote">
							<div class="content">
								<div class="avatar"><img src="images/avatar06.jpg" alt="author name"></div>
								<div class="meta"><span class="author">by John Doe</span><span class="date">Tue, Aug 14, 12</span></div>
								<span class="quotes"><i class="fa fa-quote-left"></i></span>
								<p class="excerpt">Nam liber tempor cum soluta nobis eleife option congue nihil... <a href="blog-post.html">Read more</a></p>
							</div> <!-- end .content -->
						</div> <!-- end .blog-post -->
					</div> <!-- end .blog-masonry -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->

		<footer class="footer">
			<div class="top">
				<div class="container">
					<div class="twitter">
						<div class="icon"><i class="fa fa-twitter"></i><span></span></div>
						<div id="tweets" class="flexslider"></div>
					</div> <!-- end .twitter -->
					<div class="row">
						<div class="col-sm-4">
							<h5>About Us</h5>
							<p>Lorem ipsum dolor sit amet, consectetur  some dymm adipiscing elit. Nam turpis quam, sodales in text she ante sagittis, varius efficitur mauris.</p>
							<hr />
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-map-marker"></i></div> <!-- end .icon -->
								<div class="content"><p>3015 Grand Ave, Coconut Grove, Merrick Way, FL 12345</p></div> <!-- end .content -->
							</div> <!-- end .iconbox-left -->
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-envelope"></i></div> <!-- end .icon -->
								<div class="content"><p>info@wheels-control.com</p></div> <!-- end .content -->
							</div> <!-- end .iconbox-left -->
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-phone"></i></div> <!-- end .icon -->
								<div class="content"><p>123-456-7890</p></div> <!-- end .content -->
							</div> <!-- end .iconbox-left -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<h5>Featured Deals</h5>
							<div class="featured-deals">
								<a href="details.html" class="clearfix">
									<h5>Porsche</h5>
									<span class="price">$80,000</span>
								</a>
								<p>Nam liber tempor cum soluta nobis eleife wheelers as option congue nihil…</p>
							</div> <!-- end .featured-deals -->
							<div class="featured-deals">
								<a href="details.html" class="clearfix">
									<h5>Benz</h5>
									<span class="price">$94,000</span>
								</a>
								<p>Nam liber tempor cum soluta nobis eleife wheelers as option congue nihil…</p>
							</div> <!-- end .featured-deals -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<h5>Get in Touch</h5>
							<form action="http://premiumlayers.net/demo/html/automan/scripts/contact.php" method="post" id="footer-contact-form" target="_blank">
								<div class="form-group">
									<input type="text" class="contact-name" name="contact-name" placeholder="Name" />
								</div> <!-- end .form-group -->
								<div class="form-group">
									<input type="email" class="contact-email" name="contact-email" placeholder="Email" />
								</div> <!-- end .form-group -->
								<div class="form-group">
									<textarea name="contact-message" class="contact-message" rows="3" placeholder="Message"></textarea>
								</div> <!-- end .form-group -->
								<div class="form-group">
									<button type="submit" class="button solid block light-blue">Send Message</button>
								</div> <!-- end .form-group -->
								<div class="contact-loading alert alert-info form-alert alert-small" role="alert">
									<span class="icon"><i class="fa fa-refresh fa-spin"></i></span>
									<span class="message">Loading...</span>
								</div>
								<div class="contact-success alert alert-success form-alert alert-small" role="alert">
									<span class="icon"><i class="fa fa-check"></i></span>
									<span class="message">Success!</span>
								</div>
								<div class="contact-error alert alert-danger form-alert alert-small" role="alert">
									<span class="icon"><i class="fa fa-exclamation-circle"></i></span>
									<span class="message">Error!</span>
								</div>
							</form> <!-- end contact-form -->
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .top -->
			<div class="bottom">
				<span class="copyright">Copyright 2015. All Rights Reserved by Automan. Designed by Theme Designer.</span>
			</div> <!-- end .bottom -->
		</footer> <!-- end .footer -->

		<!-- jQuery -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Inview -->
		<script src="js/jquery.inview.min.js"></script>
		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<!-- Tweetie -->
		<script src="scripts/Tweetie/tweetie.min.js"></script>
		<!-- FlexSlider -->
		<script src="scripts/FlexSlider/jquery.flexslider-min.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Isotope -->
		<script src="js/isotope.pkgd.min.js"></script>
        
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<!-- noUiSlider -->
		<script src="js/jquery.nouislider.all.min.js"></script>
		<!-- Scripts.js -->
		<script src="js/scripts.js"></script>

	</body>

<!-- Mirrored from premiumlayers.net/demo/html/automan/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Nov 2018 09:14:27 GMT -->
</html>