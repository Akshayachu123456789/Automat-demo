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
                            <strong class="card-title">CAR  Booking Details</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>bk_date</th>
                        <th>on_date</th>
                        <th>on_time</th>
						<th>drop_date</th>
                        <th>drop_time</th>
                        <th>nod</th>
                        <th>status</th>

                      </tr>
                    </thead>
                    <tbody>
					 <?php
				                        require('../config.php');
			    	                    $a="SELECT * FROM  books";
				                        $b=mysql_query($a);
				                        while($row=mysql_fetch_array($b))
    				                    { 
				                            //$imgpath="../category/".$row['c_img'];
			                        ?>
                      <tr>
                        <td><?php echo $row['bk_date'];?></td>
                        <td><?php echo $row['on_date'];?></td>
                        <td><?php echo $row['on_time'];?></td>
                        <td><?php echo $row['drop_date'];?></td>
						<td><?php echo $row['drop_time'];?></td>
                        <td><?php echo $row['nod'];?></td>
                        <td>
                        <?php 
								$cprs=$row['status']; 
								if($cprs=="accept")
								{
									?>
									<h6><span class="badge badge-success"><?php echo $row['status'];?></span></h6>
								<?php
								}
								else
								{
									?>
									<h6><span class="badge badge-danger"><?php echo $row['status'];?></span></h6>
								<?php
								}
						
						
						
						?>
                    </td>
                        <td><a href="acept_book.php?c=<?php echo $row['bk_id'];?>"><span class="badge badge-success">Accept</span></a>
									   <a href="Decline.php?c=<?php echo $row['bk_id'];?>"><span class="badge badge-danger">Decline</span></a>
						       
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
