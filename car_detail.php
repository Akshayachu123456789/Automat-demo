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
					<div class="title">Car Details</div> <!-- end .title -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		<section class="section white">
			<div class="inner">
				<div class="container">
				<?php
				$pid=$_REQUEST['pid'];
					require('config.php');
					$pid=$_REQUEST['pid'];
					$qry1="select * from product where pid='$pid'";
					$res1=mysql_query($qry1);
					while($row2=mysql_fetch_array($res1))
					{ 
					$string2 = substr($row2['condition'], 0, 120)
					?>
					<div class="car-details alt">
						<div class="row">
						
							<div class="col-sm-6">
								<div id="car-details-slider" class="image">
									<div class="item"><img src="pics/<?php echo $row2['image1']; ?>" alt="listing" class="img-responsive"></div>
									<div class="item"><img src="pics/<?php echo $row2['image1']; ?>" alt="listing" class="img-responsive"></div>
									<div class="item"><img src="pics/<?php echo $row2['image1']; ?>" alt="listing" class="img-responsive"></div>
								</div> <!-- end .image -->
							</div> <!-- end .col-sm-6 -->
							<div class="col-sm-6">
								<div class="details-box">
									<div class="heading">
										<div class="uprice">&#8377;<?php echo $row2['uprice']; ?> <span>/ Base Bid Amount</span></div>
										<div class="title"><?php echo $row2['name']; ?> <span>[ <?php echo $row2['manufature']; ?> ]</span></div>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div>
									</div> <!-- end .heading -->
									<div class="details-box-details clearfix">
										<div class="seats"><i class="icon-car-seat"></i><?php echo $row2['seats']; ?></div>
										<div class="fuel"><i class="icon-car-fuel"></i><?php echo $row2['fuel']; ?></div>
										<div class="type"><i class="icon-car-door"></i><?php echo $row2['category']; ?></div>
										<div class="gear"><i class="icon-car-gear"></i>Auto</div>
										<div class="year"><i class="fa fa-certificate"></i>from <?php echo $row2['regyear']; ?></div>
									</div> <!-- end .details-box-details -->
									<div class="content">
										<!--<p align="justify"><?php echo $string2; ?></p>-->
										<button type="button"><a href="car_book.php">Book Now</a></button>
    
	
	<!--COUNTDOWN END HERE-->
									<!--<div class="buttons">
											<a href="#" class="button border dark">Save To Watchlist</a>
											<a href="#" class="button border dark">Download Manual</a>
											<a href="#" class="button border blue">Bid Now..!</a>
										</div>  -->
									</div> <!-- end .content -->
								</div> <!-- end .details-box -->
							</div> <!-- end .col-sm-6 -->
						</div> <!-- end .row -->
						<div class="specifications clearfix">
							<h2>Specifications</h2>
							<img src="images/details.png" alt="background" class="bg">
							<div class="content">
								<div class="row">
									<div class="col-sm-4">
										<div class="item clearfix">
											<div class="option">Type</div>
											<div class="option-content"><?php echo $row2['category']; ?></div>
										</div> <!-- end .item -->
										<div class="item clearfix">
											<div class="option">No Of Seats</div>
											<div class="option-content"><?php echo $row2['seats']; ?></div>
										</div> <!-- end .item -->
										<div class="item clearfix">
											<div class="option">Fuel</div>
											<div class="option-content"><?php echo $row2['fuel']; ?></div>
										</div> <!-- end .item -->
									</div> <!-- end .col-sm-4 -->
									<div class="col-sm-4">
										<div class="item clearfix">
											<div class="option">Model</div>
											<div class="option-content"><?php echo $row2['manufature']; ?>, <?php echo $row2['name']; ?></div>
										</div> <!-- end .item -->
										<div class="item clearfix">
											<div class="option">Body Type</div>
											<div class="option-content"><?php echo $row2['pbody']; ?></div>
										</div> <!-- end .item -->
										<div class="item clearfix">
											<div class="option">Color</div>
											<div class="option-content"><?php echo $row2['color']; ?></div>
										</div> <!-- end .item -->
									</div> <!-- end .col-sm-4 -->
									<div class="col-sm-4">
										<div class="item clearfix">
											<div class="option">Gearbox</div>
											<div class="option-content">Automatic</div>
										</div> <!-- end .item -->
										<!--<div class="item clearfix">
											<div class="option">CO2 emissions</div>
											<div class="option-content">EURO 5</div>
										</div> -->
									</div> <!-- end .col-sm-4 -->
								</div> <!-- end .row -->
							</div> <!-- end .content -->
						</div> <!-- end .specifications -->
						<div class="tabpanel border" role="tabpanel">
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#heading-tab4" aria-controls="heading-tab4" role="tab" data-toggle="tab">Vehicle Overview</a></li>
										<!--<li role="presentation"><a href="#heading-tab5" aria-controls="heading-tab5" role="tab" data-toggle="tab">Features & Options</a></li>-->
										<li role="presentation"><a href="#heading-tab6" aria-controls="heading-tab6" role="tab" data-toggle="tab">Technical Specifications</a></li>
									</ul> <!-- end .nav-tabs -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="heading-tab4">
											<p><?php echo $row2['condition']; ?>.</p>
										</div> <!-- end .tab-panel -->
									<!--<div role="tabpanel" class="tab-pane fade" id="heading-tab5">
											<p>Vivamus sit amet leo at arcu placerat hendrerit. Suspendisse scelerisque, metus quis iaculis placerat, elit neque lacinia tellus, in mollis nunc sem quis ante. Mauris tincidunt libero sit amet egestas lobortis. Etiam id vulputate elit. Pellentesque commodo, nulla ac mollis interdum, eros nibh porttitor ex, fringilla suscipit urna velit sed elit. Vivamus tincidunt accumsan odio, porttitor congue felis.</p>
											<p>Cras lacinia diam neque, non iaculis ex elementum ac. Phasellus a varius libero. Nulla ut vestibulum quam. Curabitur posuere, felis sed pulvinar elementum, metus eros eleifend urna, eu volutpat lectus sem in felis. In mattis urna justo, nec cursus mauris consectetur at. Vestibulum nec fringilla erat. Pellentesque cursus fermentum nunc vitae mattis. Fusce leo diamfelis sed pulvinar elementum, metus eros eleifend urna, eu volutpat lectus sem in felis. In mattis urna justo, nec cursus mauris consectetur at. Vestibulum nec fringilla erat. Pellentesque cursus fermentum nunc vitae mattis.</p>
										</div> -->
										
										<?php
										$mnfname=$row2['manufature'];
										$qry2="select des from manufactures where name='$mnfname'";
										$res2=mysql_query($qry2);
										while($row3=mysql_fetch_array($res2))
										{ 
										?>
										<div role="tabpanel" class="tab-pane fade" id="heading-tab6">
											<p><?php echo $row3['des']; ?></p>
											<!--<p>Cras lacinia diam neque, non iaculis ex elementum ac. Phasellus a varius libero. Nulla ut vestibulum quam. Curabitur posuere, felis sed pulvinar elementum, metus eros eleifend urna, eu volutpat lectus sem in felis. In mattis urna justo, nec cursus mauris consectetur at. Vestibulum nec fringilla erat. Pellentesque cursus fermentum nunc vitae mattis. Fusce leo diamfelis sed pulvinar elementum, metus eros eleifend urna, eu volutpat lectus sem in felis. In mattis urna justo, nec cursus mauris consectetur at. Vestibulum nec fringilla erat. Pellentesque cursus fermentum nunc vitae mattis.</p>-->
										</div> <!-- end .tab-panel -->
										<?php
										}
										?>
									</div> <!-- end .tab-content -->
								</div> <!-- end .tabpanel -->
					</div> <!-- end .car-details -->
					<?php
					}
					?>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->

		<section class="section lighter">
			<div class="inner">
				<h1 class="main-heading">Related Cars<small>Best Car Deals</small></h1>
				<div id="featured-cars" class="owl-carousel featured-cars">
					
					<?php
					$qry1="select * from product";
					$res1=mysql_query($qry1);
					while($row2=mysql_fetch_array($res1))
					{ 
					$string2 = substr($row2['condition'], 0, 40)
					?>
					
					<div class="item">
						<div class="featured-car">
						<div class="image">
								<a href="car_detail.php?pid=<?php echo $row2['pid']; ?>"><img src="pics/<?php echo $row2['image1']; ?>" alt="car" class="img-responsive"></a>
								
							</div>
							<div class="content">
								<div class="clearfix">
									<h5><a href="#"><?php echo $row2['name']; ?></a></h5>
									<span class="price">&#8377;<?php echo $row2['uprice']; ?></span>
								</div> <!-- end .clearfix -->
								<div class="line"></div>
								<p><?php echo $string2; ?>...</p>
							</div> <!-- end .content -->
							<div class="details clearfix">
								<div class="seats"><i class="icon-car-seat"></i><?php echo $row2['seats']; ?></div>
								<div class="fuel"><i class="icon-car-fuel"></i><?php echo $row2['fuel']; ?></div>
								<div class="type"><i class="icon-car-door"></i><?php echo $row2['category']; ?></div>
							</div> <!-- end .details -->
						</div> <!-- end .featured-car -->
					</div> <!-- end .item -->
				<?php
					}
				?>
					
				
					
				</div> <!-- end .featured-cars -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->

				<?php
	include 'footer.php'; 
	?>
	<?php
// require('../config.php');
if(isset($_POST['btnbid']))
{
	 header('Location: login.php');
}

?>
