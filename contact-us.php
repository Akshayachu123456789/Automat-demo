<?php
	include 'header.php'; 
	?>
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<div class="page-title" style="background-image: url('images/background01.jpg');">
			<div class="inner">
				<div class="container">
					<div class="title">Contact us</div> <!-- end .title -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		<div id="map" class="map"></div>

		<section class="section white">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<div class="contact">
								<h4>Contact Form</h4>
								<form action="http://premiumlayers.net/demo/html/automan/scripts/contact.php" method="post" id="contact-form">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" id="contact-name" name="contact-name" placeholder="Name*" required />
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="email" id="contact-email" name="contact-email" placeholder="Email*" required />
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="tel" id="contact-phone" name="contact-phone" placeholder="Phone" />
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" id="contact-subject" name="contact-subject" placeholder="Subject" />
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<textarea name="contact-message" id="contact-message" placeholder="Comment*" required rows="7"></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="button light-blue">Submit</button>
									</div>
									<div id="contact-loading" class="alert alert-info form-alert">
										<span class="icon"><i class="fa fa-info"></i></span>
										<span class="message">Loading...</span>
									</div>
									<div id="contact-success" class="alert alert-success form-alert">
										<span class="icon"><i class="fa fa-check"></i></span>
										<span class="message">Success!</span>
									</div>
									<div id="contact-error" class="alert alert-danger form-alert">
										<span class="icon"><i class="fa fa-times"></i></span>
										<span class="message">Error!</span>
									</div>
								</form>
							</div> <!-- end .contact -->
						</div> <!-- end .col-sm-8 -->
						<div class="col-sm-4">
							<div class="contact-details">
								<div class="item">
									<div class="icon"><i class="ion-ios-location-outline"></i></div>
									<div class="content">
										<h6>Address</h6>
										<span>Lorem Ipsum is simply dummy text printing and type setting industry 5562. po alpu</span>
									</div> <!-- end .content -->
								</div> <!-- end .item -->
								<div class="item">
									<div class="icon"><i class="ion-ios-telephone-outline"></i></div>
									<div class="content">
										<h6>Phone</h6>
										<span>Office: 0477-8556 55 2</span>
										<span>Mobile: +91 556 333 245</span>
									</div> <!-- end .content -->
								</div> <!-- end .item -->
								<div class="item">
									<div class="icon"><i class="ion-ios-email-outline"></i></div>
									<div class="content">
										<h6>Email</h6>
										<span>Office: info@automan.com</span>
										<span>Mobile: +91 556 333 245</span>
									</div> <!-- end .content -->
								</div> <!-- end .item -->
							</div> <!-- end .contact-details -->
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->

		<?php
	include 'footer.php'; 
	?>