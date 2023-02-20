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
					<div class="title">Sign In</div> <!-- end .title -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		

		<section class="section white">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<div class="contact">
								<h4>Login Form</h4>
								<form action="#" method="post" id="contact-form">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" id="contact-name" name="username" placeholder="User Name*" required />
											</div>
										</div>
										
										<div class="col-sm-6">
											<div class="form-group">
												<input type="password" id="contact-name" name="password" placeholder="Password" required />
											</div>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="button light-blue" name="btnsub">Sign In</button>
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
if(isset($_POST['btnsub'])==true)
{
	session_start();
$una=$_POST['username'];
$pass=$_POST['password'];
$q="select * from login where userid='$una' and password='$pass'";
$a=mysql_query($q)or die("Error in $q");
$f=0;
while($row=mysql_fetch_array($a))
{
	$b=$row['role'];
	$f=1;
	$sts=$row['status'];
	$_SESSION["user"] = $row['userid'];
}
if($f==1)
{
	if($sts=="active")
	{
		if($b=="admin")
		{
			header("location:admin/index.php");
		}
		else if($b=="customer")
		{
			header("location:user/index.php");
		}
		else 
		{
			header("location:index.php");
		}
	}
	else
	{
		echo '<script>'.'alert("User Not Activated Yet..!")'.'</script>';
	}
}
else
{
	echo '<script>'.'alert("Not a valid user")'.'</script>';
}

}

?>