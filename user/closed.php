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
					<div class="title">Closed Auction Listing</div> <!-- end .title -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		<section class="section small-top-padding white">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="listings">
								<div class="heading clearfix">
									<h5>Auction Cars</h5>
									<!--<div class="view">
										<a href="listing-list-view.html"><i class="fa fa-th-list"></i></a>
										<a href="listing-grid-view.html" class="active"><i class="fa fa-th"></i></a>
									</div>
									<div class="select-wrapper sort">
										<select class="selectpicker">
											<option>Sort By</option>
											<option>Option 1</option>
											<option>Option 2</option>
										</select>
										
									</div>--> <!-- end .select-wrapper -->
								</div> <!-- end .heading -->
								<div class="listings-grid clearfix">
								<?php
					
					$qry1="select p.pid,p.name,p.category,p.manufature,p.fuel,p.color,p.condition,p.image1,a.base_price,a.aid from product p JOIN auction a on p.pid = a.pid where a.status='closed' ORDER by a.aid";
					$res1=mysql_query($qry1);
					while($row2=mysql_fetch_array($res1))
					{ 
					$string2 = substr($row2['condition'], 0, 110)
					?>
								
									<div class="listing">
										<div class="image"><a href="car_single.php?aid=<?php echo $row2['aid']; ?>"><img src="../pics/<?php echo $row2['image1']; ?>" alt="listing" class="img-responsive"></a></div>
										<div class="content">
											<div class="title"><a href="car_single.php?aid=<?php echo $row2['aid']; ?>"><?php echo $row2['name']; ?> <span>[ <?php echo $row2['manufature']; ?> ]</span></a></div>
											<p align="justify"><?php echo $string2; ?>.</p>
											<div class="price">Base Bid Amount <span><b>&#8377;<?php echo $row2['base_price']; ?></b></span></div>
										</div>
									</div> <!-- end .listing -->
									<?php
					}
					?>
								</div> <!-- end .listing-grid -->
							</div> <!-- end .listings -->
						</div> <!-- end .col-sm-9 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->
		
		<?php
	include 'footer.php'; 
	?>