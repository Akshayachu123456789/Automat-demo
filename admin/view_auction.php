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
                            <strong class="card-title">Auction Details</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>#</th>
                        <th>Product</th>
                        <th>Manufature</th>
                        <th>Base Price</th>
                        <th>Bidding Price</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					 <?php
				                        require('../config.php');
			    	                    $a="select p.pid,p.name,p.manufature,a.base_price,a.aid,a.start_date,a.end_date,a.status from product p JOIN auction a on p.pid = a.pid where a.status='auction' ORDER by a.aid";
				                        $b=mysql_query($a);
				                        while($row=mysql_fetch_array($b))
    				                    { 
				                            //$imgpath="../category/".$row['c_img'];
			                        ?>
                      <tr>
                        <td><?php echo $row['aid'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['manufature'];?></td>
                        <td><?php echo $row['base_price'];?></td>
						<?php
						$oldamt=0;
						$win_user="";
											
											$qrycur="select MAX(amount) from bidding where aid=".$row['aid'];
											$rescur=mysql_query($qrycur);
											while($rowcur=mysql_fetch_array($rescur))
											{ 
												$oldamt=$rowcur[0];
											}
											
											
											$qrywin="select userid from bidding where aid=".$row['aid']." and amount='$oldamt'";
											$reswin=mysql_query($qrywin);
											while($rowwin=mysql_fetch_array($reswin))
											{ 
												
												$win_user=$rowwin[0];
											}
											
											
						?>
						<td><?php echo $oldamt;?></td>
						<td><?php echo $row['start_date'];?></td>
						<td><?php echo $row['end_date'];?></td>
						<td>
						
						 <?php
                                    $dnow=date("Y-m-d");
										if(strtotime($dnow)<strtotime($row['start_date']))
										{
                                      ?>
									  <h4><font color="blue">Not Started Yet..!</font></h4>
                                  
                                  
                                  <?php
                                     }
										elseif(strtotime($dnow)==strtotime($row['start_date'])||strtotime($dnow)<strtotime($row['end_date']))
										{
    				                        
    				                    ?>
										<h4><font color="green">Open</font></h4>
                                  
                                  
                                  <?php
    				                   }
										else
										{
    				                    ?>
										<h4><a href="auction_close.php?aid=<?php echo $row['aid'];?>&pid=<?php echo $row['pid'];?>&amt=<?php echo $oldamt; ?>&usr=<?php echo $win_user; ?>"><font color="red">Close Now..</font></a></h4>
										
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
