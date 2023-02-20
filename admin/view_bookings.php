     <?php
	include 'itop.php';
	include 'left_panel.php';
	?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Bookings</a></li>
                            
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
                            <strong class="card-title">Hall Booking Details</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Check In</th>
						<th>Check Out</th>
                        <th>Time</th>
						<th>Status</th>
						
                      </tr>
                    </thead>
                    <tbody>
					 <?php
				                        require('../config.php');
			    	                    $a="SELECT * FROM booking where status='book' or status='active';";
				                        $b=mysql_query($a);
				                        while($row=mysql_fetch_array($b))
    				                    { 
				                            //$imgpath="../category/".$row['c_img'];
			                        ?>
                      <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['checkin'];?></td>
                        <td><?php echo $row['heckout'];?></td>
						<td><?php echo $row['btyme'];?></td>
						<td>
						 
                                     
                                      <?php
                                      if($row['status']=="book")
                                      {
                                          
                                      ?>
									  <h6><font color="orange">Waiting for hall owner replay</font></h6>
                                  
                                  <?php
                                      }
									  else if($row['status']=="active")
									  {
										  ?>
										  
										  <a href="upbook.php?c=<?php echo $row['bid'];?>"> <h6><font color="red">Confirm Booking Now</h6></a>
										  
										  <?php
									  }
                                      else
    				                    {
    				                        
    				                    ?>
                                  
                                  <h4><font color="green">Already Confirmed..!</font></h4>
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
