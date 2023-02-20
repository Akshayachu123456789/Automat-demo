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
					<div class="title">Winning Auctions</div> <!-- end .title -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		<section class="section small-top-padding white">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="content mt-12">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>#</th>
                        <th>Product</th>
                        <th>Manufacture</th>
                        <th>Image</th>
                        <th>Amount</th>
						<th>Delivery Address</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					 <?php
					 
				                       // require('../config.php');
									  // $user=$_SESSION["user"];
									   $user=$_SESSION["user"];
			    	                    $a="select p.pid,p.name,p.manufature,p.image1,pr.winning_price,pr.deilivey_addr,pr.status,pr.purid from purchase pr JOIN product p on pr.pid = p.pid where pr.userid='$user'";
				                        $b=mysql_query($a);
				                        while($row=mysql_fetch_array($b))
    				                    { 
				                            //$imgpath="../category/".$row['c_img'];
			                        ?>
                      <tr>
                        <td><?php echo $row['purid'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['manufature'];?></td>
                        <td><img src="../pics/<?php echo $row['image1'];?>" width="80px" class="img-rounded" alt=""></td>
						<td><?php echo $row['winning_price'];?></td>
						<td><?php echo $row['deilivey_addr'];?></td>
						<td>
						
						 <?php
                                      if($row['status']=="win")
                                      {
                                          
                                      ?>
                                  <a href="Add_address.php?c=<?php echo $row['purid'];?>"><h5><font color="blue">Add Address</font></h5></a>
                                  
                                  <?php
                                      }
                                      else if($row['status']=="address")
    				                    {
    				                        
    				                    ?>
                                   <a href="../payment/pay.php?c=<?php echo $row['purid'];?>&amt=<?php echo $row['winning_price'];?>"><h5><font color="red">Pay Now</font></h5></a>
                                 
                                  <?php
    				                    }
										else
										{
    				                    ?>
										<h5><font color="green">Confirmed</font></h5>
										<?php
										}
										?>
									
										</td>
					  </tr>
					  <?php
										}
					  ?>
                      
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->
		
		<?php
	include 'footer.php'; 
	?>