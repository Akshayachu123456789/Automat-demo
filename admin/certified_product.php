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
                            <strong class="card-title">Automart Cerified Cars</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>#</th>
                        <th>Name</th>
                        <th>Manufature</th>
                        <th>Email</th>
                        <th>Contact</th>
						<th>Details</th>
						<th>Price</th>
						<th>Image</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					 <?php
				                        require('../config.php');
			    	                    $a="SELECT * FROM product where status='verify' ORDER BY pid";
				                        $b=mysql_query($a);
				                        while($row=mysql_fetch_array($b))
    				                    { 
									$string2 = substr($row['condition'], 0, 40)
				                            //$imgpath="../category/".$row['c_img'];
			                        ?>
                      <tr>
                        <td><?php echo $row['pid'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['manufature'];?></td>
                        <td><?php echo $row['oemail'];?></td>
						<td><?php echo $row['omob'];?></td>
						<td><?php echo $string2;?></td>
						<td><?php echo $row['uprice'];?></td>
						<td><img src="../pics/<?php echo $row['image1'];?>" width="80px" class="img-rounded" alt=""></td>
						<td>
						
						 <?php
                                      if($row['status']=="verify")
                                      {
                                          
                                      ?>
                                  <a href="addtoauction.php?c=<?php echo $row['pid'];?>"><font color="red">Add To Auction</font></a>
                                  
                                  <?php
                                      }
                                      else
    				                    {
    				                        
    				                    ?>
                                  
                                  <h4><font color="green">Confirmed..!</font></h4>
                                  <?php
    				                    }
    				                    ?></td>
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
