<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Payments</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fascinating Checkout Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/easy-responsive-tabs.css">
<script src="js/jquery.min.js"></script>
<link href="css/font.css" rel="stylesheet">
</head>
<body>
	<div class="main">	
		<!--<h1>Fascinating Checkout Form</h1>-->
		<div class="w3_agile_main_grids">
			<div class="agile_main_top_grid">
				<!--<div class="agileits_w3layouts_main_top_grid_left">
					<a href="#"><img src="images/1.png" alt=" " /></a>
				</div>
				<div class="w3_agileits_main_top_grid_right">
					<h3>Checkout Form</h3>
				</div>-->
				<?php
				$amt=$_GET["amt"];
				$c=$_GET["c"];
				$advamt=(45*$amt)/100;
				$total=$amt+$advamt;
				?>
				<div class="clear"> </div>
				<div class="wthree_total">
					<h2>total to pay <span><?php echo $total;?><i>&#8377;</i></span></h2>
					<h4>Delivery Charge<span><?php echo $advamt;?><i>&#8377;</i></span></h4>
				</div>
			</div>
			<div class="agileinfo_main_bottom_grid">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li><img src="images/1.jpg" alt=" " /></li>
						<li><img src="images/2.jpg" alt=" " /></li>
					</ul>
					<div class="resp-tabs-container">
						<div class="agileits_w3layouts_tab1">
							<form action="#" method="post" class="creditly-card-form agileinfo_form">
								<section class="creditly-wrapper wthree, w3_agileits_wrapper">
									<div class="credit-card-wrapper">
										<div class="first-row form-group">
										
											<div class="controls">
												<label class="control-label">Account No</label>
												<input class="billing-address-name form-control" type="text" name="accno" placeholder="Account No">
											</div>
											<div class="controls">
												<label class="control-label">Name on Card</label>
												<input class="billing-address-name form-control" type="text" name="cname" placeholder="John Smith">
											</div>
											<div class="w3_agileits_card_number_grids">
												<div class="w3_agileits_card_number_grid_left">
													<div class="controls">
														<label class="control-label">Card Number</label>
														<input class="billing-address-name form-control" type="text" name="cnumber"
																	  inputmode="numeric" 
																	  placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
													</div>
												</div>
												<div class="w3_agileits_card_number_grid_right">
													<div class="controls">
														<label class="control-label">CVV</label>
														<input class="security-code form-control"Â·
																	  inputmode="numeric"
																	  type="text" name="cvv"
																	  placeholder="&#149;&#149;&#149;">
													</div>
												</div>
												<div class="clear"> </div>
											</div>
											<div class="controls">
												<label class="control-label">Expiration Date</label>
												<input class="expiration-month-and-year form-control" type="text" name="expdate" placeholder="MM / YY">
											</div>
										</div>
										<input type="submit" class="submit" name="btnpay" value="Make a payment">
									</div>
								</section>
							</form>
						</div>
						<!--<div class="agileits_w3layouts_tab2">
							<h3>Don't have a paypal Account Please <a href="#">Register</a></h3>
							<form action="#" method="post">
								<label class="agileits_label">Your Email</label>
								<input type="email" name="Email" placeholder="w3layouts@example.com" required="">
								<label class="agileits_label">Your Password</label>
								<input type="password" name="Password" placeholder="Password" required="">
								<input type="submit" value="Login">
							</form>
						</div>-->
					</div>
				</div>
			</div>
		</div>
		<div class="agileits_copyright">
			<p>© 2018 Event Venue Payment. All rights reserved | Design by <a href="#" target="_blank">Event Venue</a></p>
		</div>
	</div>
	<!-- credit-card -->
		<script type="text/javascript" src="js/creditly.js"></script>
		<script type="text/javascript">
			$(function() {
			  var creditly = Creditly.initialize(
				  '.creditly-wrapper .expiration-month-and-year',
				  '.creditly-wrapper .credit-card-number',
				  '.creditly-wrapper .security-code',
				  '.creditly-wrapper .card-type');

			  $(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
				  // Your validated credit card output
				  console.log(output);
				}
			  });
			});
		</script>
	<!-- //credit-card -->
	<!-- tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true,   // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
				}
			});
		});
	</script>
	<!-- //tabs -->
</body>
</html>
<?php
 require('../config.php');
if(isset($_POST['btnpay']))
{
	 
	
	$accno=$_POST['accno'];
	$cname=$_POST['cname'];
	$cnumber=$_POST['cnumber'];
	$cvv=$_POST['cvv'];
	$expdate=$_POST['expdate'];
	$user=$_SESSION["user"];
	$pid=$_GET["pid"];
	
	$rnd=rand(1000,10000);
	$user='user';
	//$hd=$_GET["hid"];
	//$advamt=(45*$amt)/100;
	$p="insert into payments values('$rnd','$total','$advamt','$user','$c')";
	
	$w=mysql_query($p);
	
	if(mysql_affected_rows()==1)

	{
		$rr="update purchase set payid='$rnd' where purid='$c'";
		$xx=mysql_query($rr);
		header("location:../user/mybooking.php");
		//echo '<script> alert("'."sucess".'")</script>';
	}
	else
	{
		echo '<script> alert("'."error".'")</script>';
	}
	
}

?>