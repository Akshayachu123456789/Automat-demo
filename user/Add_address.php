<?php
	include 'header.php';
	//include 'config.php';	
	?>
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<div class="page-title" style="background-image: url('images/background01.jpg');">
			<div class="inner">
				<div class="container">
					<div class="title">Delivey Address</div> <!-- end .title -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		

		<section class="section white">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<div class="contact">
								<h4>Add Delivery Address</h4>
								<form action="#" method="post" id="contact-form">
									<div class="row">
									
										<div class="col-sm-12">
											<div class="form-group">
												<textarea id="caddr" name="caddr" placeholder="Address" required rows="7"></textarea>
											</div>
										</div>
										
									</div>
									<div class="form-group">
										<button type="submit" class="button light-blue" name="btnsub">Submit</button>
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
	
	<?php
	$c=$_REQUEST['c'];
if(isset($_POST['btnsub']))
{
	$caddr=$_POST['caddr'];

	
	$role="customer";
	//$user=substr($fname,0,4).substr($cphone,0,4);
	$p="UPDATE purchase SET deilivey_addr='$caddr',status='address' where purid='$c'";
	
	$w=mysql_query($p);
	 header('Location: mypurchase.php');
	
}

?>