<?php
	include 'header.php';
	include 'config.php';	
	?>
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<div class="page-title" style="background-image: url('images/background01.jpg');">
			<div class="inner">
				<div class="container">
					<div class="title">Sign up</div> <!-- end .title -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		

		<section class="section white">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<div class="contact">
								<h4>Register Form</h4>
								<form action="#" method="post" id="contact-form">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" id="contact-name" name="fname" placeholder="First Name*" required="" />
											</div>
										</div>
										
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" id="contact-name" name="lname" placeholder="Last Name*" required="" />
											</div>
										</div>
										
										<div class="col-sm-6">
											<div class="form-group">
											
												<select name="gndr">
												<option>Select your gender</option>
												<option>Male</option>
												<option>Female</option>
												</select>
												
											</div>
										</div>
										
											
										
										<div class="col-sm-6">
											<div class="form-group">
												<input type="email" id="contact-email" name="cemail" placeholder="Email*" required="" />
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" id="contact-phone" name="cphone" placeholder="Phone" maxlength="10" required="" pattern="[0-9]{10}" />
											</div>
										</div>
									
										<div class="col-sm-12">
											<div class="form-group">
												<textarea id="caddr" name="caddr" placeholder="Address" required="" rows="7"></textarea>
											</div>
										</div>
										
										<div class="col-sm-6">
											<div class="form-group">
												<input type="password" id="contact-email" name="paswd" placeholder="Password" required="" />
											</div>
										</div>
										
										<div class="col-sm-6">
											<div class="form-group">
												<input type="password" id="contact-phone" name="cpswd" placeholder="Confirm password" required=""/>
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
if(isset($_POST['btnsub']))
{
	 
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gndr=$_POST['gndr'];
	$cemail=$_POST['cemail'];
	$cphone=$_POST['cphone'];
	$caddr=$_POST['caddr'];
	$paswd=$_POST['paswd'];
	$cpswd=$_POST['cpswd'];
	
	$role="customer";
	$user=substr($fname,0,4).substr($cphone,0,4);
	$p="insert into customer values(NULL,'$fname','$lname','$cemail','$cphone','$gndr','$caddr','$user','inactive')";
	
	$w=mysql_query($p);
	
	$r="insert into login values(NULL,'$user','$paswd','$role','inactive')";
	$v=mysql_query($r);

	if(mysql_affected_rows()==1)

	{
		echo '<script> alert("'."sucess".'")</script>';
	}
	else
	{
		echo '<script> alert("'."error".'")</script>';
	}
	
}

?>