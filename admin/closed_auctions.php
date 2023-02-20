     <?php
	include 'itop.php';
	include 'left_panel.php';
	?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Admin Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Owner</a></li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-12">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Purchase Details</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>Auction No</th>
                        <th>Product</th>
                        <th>Winning User</th>
                        <th>Amount</th>
                        <th>Address</th>
						<th>Payment</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					 <?php
				                        require('../config.php');
			    	                    $a="select p.name,pr.aid,pr.purid,pr.winning_price,pr.userid,pr.deilivey_addr,pr.status,pr.payid from product p JOIN purchase pr on p.pid = pr.pid ORDER by pr.purid";
				                        $b=mysql_query($a);
				                        while($row=mysql_fetch_array($b))
    				                    { 
				                            //$imgpath="../category/".$row['c_img'];
			                        ?>
                      <tr>
                        <td><?php echo $row['aid'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['userid'];?></td>
                        <td><?php echo $row['winning_price'];?></td>
						<?php
						$addrss=$row['deilivey_addr'];
						if($addrss=='address')
						{
						
						?>
						
						<td><h4><font color="orange">Not Assigned</font></h4></td>
						<?php
						}
						else
						{
							?>
						<td><?php echo $row['deilivey_addr'];?></td>
						<?php
						}
						?>
						
						<?php
						$payid=$row['payid'];
						if($payid=='000')
						{
						
						?>
						
						<td><h4><font color="red">Not Completed</font></h4></td>
						<?php
						}
						else
						{
							?>
						<td><h4><font color="green">Completed</font></h4></td>
						<?php
						}
						?>
						
						
						<?php
						$status=$row['status'];
						if($status=='payed')
						{
						
						?>
						
						<td><h4><a href="addtodelivery.php?purid=<?php echo $row['purid'];?>"><font color="blue">Add To Delivery</font></a></h4></td>
						<?php
						}
						elseif($status=='delivered')
						{
							?>
						<td><h4><font color="green">Delivery Completed</font></h4></td>
						<?php
						}
						else
						{
						?>
						<td><h4><font color="red">Waiting</font></h4></td>
						<?php
						}
						?>
						
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


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
