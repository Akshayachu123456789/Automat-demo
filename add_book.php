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
					<div class="car-details alt">
						<div class="row">
						<div class="col-sm-8">
							<div class="contact">
								<h4> Form</h4>
								<form action="act_book.php" method="post" id="contact-form">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text"  name="bk_date" placeholder="bk_date*" required="" />
											</div>
										</div>
										
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text"  name="on_date" placeholder="on_date" class="form-control" />
											</div>
										</div>  
										
										<div class="col-sm-6">
											<div class="form-group">
											
												<!-- <select name="gndr">
												<option>Select your gender</option>
												<option>Male</option>
												<option>Female</option>
												</select> -->
												
											</div>
										</div>
										
											
										
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text"  name="on_time" placeholder="on_time*" required="" />
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
                                            <input type="text"  name="drop_date" placeholder="drop_date*" required="" />
											</div>
										</div>
									
                                        <div class="col-sm-6">
											<div class="form-group">
                                            <input type="text"  name="drop_time" placeholder="drop_time*" required="" />
											</div>
										</div>
                                        <div class="col-sm-6">
											<div class="form-group">
                                            <input type="text"  name="nod" placeholder="nod*" required="" />
											</div>
										</div>
                                        <div class="col-sm-6">
											<div class="form-group">
                                            <input type="text"  name="status" placeholder="status*" required="" />
											</div>
										</div>
										<!-- <div class="col-sm-12">
											<div class="form-group">
												<textarea id="caddr" name="caddr" placeholder="Address" required="" rows="7"></textarea>
											</div>
										</div> -->
										
										<div class="col-sm-6">
											<!-- <div class="form-group">
												<input type="password" id="contact-email" name="paswd" placeholder="Password" required="" />
											</div> -->
										</div>
										
										<div class="col-sm-6">
											<!-- <div class="form-group">
												<input type="password" id="contact-phone" name="cpswd" placeholder="Confirm password" required=""/>
											</div>
										</div> -->
									</div>
									<div class="form-group">
										<button type="submit" class="button light-blue" name="btnsub">Submit</button>
									</div>
						
							<div class="col-sm-6">
								<div class="details-box">
									<div class="heading">
										<div class="price">&#8377;120 <span>/ Base Bid Amount</span></div>
										<div class="title">hre <span>[ vbnm ]</span></div>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div>
									</div> <!-- end .heading -->
									<div class="details-box-details clearfix">
										<div class="seats"><i class="icon-car-seat"></i>hj</div>
										<div class="fuel"><i class="icon-car-fuel"></i>fghnm</div>
										<div class="type"><i class="icon-car-door"></i>cvbnm,.</div>
										<div class="gear"><i class="icon-car-gear"></i>Auto</div>
										<div class="year"><i class="fa fa-certificate"></i>from </div>
									</div> <!-- end .details-box-details -->
									<div class="content">
										
										<!--COUNTDOWN START HERE-->
										
										<font color="BLUE" size="4">CURRENT BID AMOUNT:</p></font>
										<form action="#" method="post">
										<div class="buttons">
											<button type="submit" class="button solid green" name="btnbid">BID NOW.!</button>
										</div>
										</form>
										
                                        
					
	
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
						
						<div class="tabpanel border" role="tabpanel">
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#heading-tab4" aria-controls="heading-tab4" role="tab" data-toggle="tab">Vehicle Overview</a></li>
										<!--<li role="presentation"><a href="#heading-tab5" aria-controls="heading-tab5" role="tab" data-toggle="tab">Features & Options</a></li>-->
										<li role="presentation"><a href="#heading-tab6" aria-controls="heading-tab6" role="tab" data-toggle="tab">Technical Specifications</a></li>
									</ul> <!-- end .nav-tabs -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="heading-tab4">
											<p></p>
										</div> <!-- end .tab-panel -->
									<!--<div role="tabpanel" class="tab-pane fade" id="heading-tab5">
											<p>Vivamus sit amet leo at arcu placerat hendrerit. Suspendisse scelerisque, metus quis iaculis placerat, elit neque lacinia tellus, in mollis nunc sem quis ante. Mauris tincidunt libero sit amet egestas lobortis. Etiam id vulputate elit. Pellentesque commodo, nulla ac mollis interdum, eros nibh porttitor ex, fringilla suscipit urna velit sed elit. Vivamus tincidunt accumsan odio, porttitor congue felis.</p>
											<p>Cras lacinia diam neque, non iaculis ex elementum ac. Phasellus a varius libero. Nulla ut vestibulum quam. Curabitur posuere, felis sed pulvinar elementum, metus eros eleifend urna, eu volutpat lectus sem in felis. In mattis urna justo, nec cursus mauris consectetur at. Vestibulum nec fringilla erat. Pellentesque cursus fermentum nunc vitae mattis. Fusce leo diamfelis sed pulvinar elementum, metus eros eleifend urna, eu volutpat lectus sem in felis. In mattis urna justo, nec cursus mauris consectetur at. Vestibulum nec fringilla erat. Pellentesque cursus fermentum nunc vitae mattis.</p>
										</div> -->
										
										
										<div role="tabpanel" class="tab-pane fade" id="heading-tab6">
											<p></p>
											<!--<p>Cras lacinia diam neque, non iaculis ex elementum ac. Phasellus a varius libero. Nulla ut vestibulum quam. Curabitur posuere, felis sed pulvinar elementum, metus eros eleifend urna, eu volutpat lectus sem in felis. In mattis urna justo, nec cursus mauris consectetur at. Vestibulum nec fringilla erat. Pellentesque cursus fermentum nunc vitae mattis. Fusce leo diamfelis sed pulvinar elementum, metus eros eleifend urna, eu volutpat lectus sem in felis. In mattis urna justo, nec cursus mauris consectetur at. Vestibulum nec fringilla erat. Pellentesque cursus fermentum nunc vitae mattis.</p>-->
										</div> <!-- end .tab-panel -->
									
									</div> <!-- end .tab-content -->
								</div> <!-- end .tabpanel -->
					</div> <!-- end .car-details -->
					
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->

		<section class="section lighter">
			<div class="inner">
				<h1 class="main-heading">Related Cars<small>Best Car Deals</small></h1>
				<div id="featured-cars" class="owl-carousel featured-cars">
					
					<?php
					$qry1="select p.pid,p.name,p.category,p.fuel,p.seats,p.condition,p.image1,a.base_price,a.aid from product p JOIN auction a on p.pid = a.pid where a.status='auction' ORDER by a.aid";
					$res1=mysql_query($qry1);
					while($row2=mysql_fetch_array($res1))
					{ 
					$string2 = substr($row2['condition'], 0, 40)
					?>
					
					<div class="item">
						<div class="featured-car">
						<div class="image">
								<a href="car_single.php?aid=<?php echo $row2['aid']; ?>"><img src="pics/<?php echo $row2['image1']; ?>" alt="car" class="img-responsive"></a>
								
							</div>
							<div class="content">
								<div class="clearfix">
									<h5><a href="#"><?php echo $row2['name']; ?></a></h5>
									<span class="price">&#8377;<?php echo $row2['base_price']; ?></span>
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
