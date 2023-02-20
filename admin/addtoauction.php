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
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		
		

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                 

                  

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Car Auction</strong> Details
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Base Price</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="bprice" name="bprice" placeholder="Base Price" class="form-control"></div>
                          </div>
                          
						  
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Maximum Price</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="mprice" name="mprice" placeholder="Maximum Price" class="form-control"></div>
                          </div>
						  
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Staring Date</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="stdate" name="stdate" placeholder="Staring Date" class="form-control"></div>
                          </div>
						  
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ending Date</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="endate" name="endate" placeholder="Ending Date" class="form-control"></div>
                          </div>
                          
                       
                        
                       
                        
                         
                          
                          
                          
                          <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" name="btn1">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                        </form>
                      </div>
                    
                    </div>
                   
                  </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->

		
		<div class="content mt-12">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Cars Details</strong>
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
                      </tr>
                    </thead>
                    <tbody>
					 <?php
				                        require('../config.php');
										$cid=$_REQUEST['c'];
			    	                    $a="SELECT * FROM product where pid='$cid'";
				                        $b=mysql_query($a);
				                        while($row=mysql_fetch_array($b))
    				                    { 
				                            //$imgpath="../category/".$row['c_img'];
			                        ?>
                      <tr>
                        <td><?php echo $row['pid'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['manufature'];?></td>
                        <td><?php echo $row['oemail'];?></td>
						<td><?php echo $row['omob'];?></td>
						<td><?php echo $row['condition'];?></td>
						<td><?php echo $row['uprice'];?></td>
						<td><img src="../pics/<?php echo $row['image1'];?>" width="80px" class="img-rounded" alt=""></td>
						
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


</body>
</html>
<?php
 //require('../config.php');
if(isset($_POST['btn1']))
{
	 $sts='auction';
	 $base_rate=0;
	
	$bprice=$_POST['bprice'];
	$mprice=$_POST['mprice'];
	$stdate=$_POST['stdate'];
	$endate=$_POST['endate'];
	$base_rate=(15*$bprice)/100;
	$p="insert into auction values(NULL,'$cid','$mprice','$bprice','$base_rate','$stdate','$endate','$sts')";
	
	$w=mysql_query($p);
	
	if(mysql_affected_rows()==1)

	{
		echo '<script> alert("'."sucess".'")</script>';
	}
	else
	{
		echo '<script> alert("'."error".'")</script>';
	}
	
}

?>
