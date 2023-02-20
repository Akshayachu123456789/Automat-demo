 <?php
	include 'itop.php';
	include 'left_panel.php';
	require('../config.php');
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
                        <strong>New Car</strong> Entry
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Car Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="cname" name="cname" placeholder="" class="form-control" required=""></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Category</label></div>
                            <div class="col-12 col-md-9">
                              <select name="ctype" id="select" class="form-control">
                                
								<option>Sedan</option> 
								<option>Hachback</option> 
								<option>SUV</option> 
                              </select>
                            </div>
                          </div>
						  
					
						  
						<div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">fuel Type</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
							  
                         
								
								
								<div class="checkbox">
                                  <label for="checkbox1" class="form-check-label ">
								  
                                    <input type="radio" id="fuel" name="fuel" value="PETROL" class="form-check-input">PETROL
									
									
                                  </label>
                                </div>
								
								<div class="checkbox">
                                  <label for="checkbox1" class="form-check-label ">
								  
                                    <input type="radio" id="fuel" name="fuel" value="DIESEL" class="form-check-input">DIESEL
									
									
                                  </label>
                                </div>
								
								<div class="checkbox">
                                  <label for="checkbox1" class="form-check-label ">
								  
                                    <input type="radio" id="fuel" name="fuel" value="GAS" class="form-check-input">GAS
									
									
                                  </label>
                                </div>
                               
                              </div>
                            </div>
                          </div>
						  
						    <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Seat Capacity</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="capacity" name="capacity" placeholder="" class="form-control" required=""></div>
                          </div>
						  
						 
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label" >Manufacture</label></div>
                            <div class="col-12 col-md-9">
                              <select name="mntype" id="select" class="form-control">
                                
								
								<?php
					
					$qry="select * from manufactures";
					$res=mysql_query($qry);
					while($row=mysql_fetch_array($res))
					{ 
					?>
	<option><?php echo $row['name']; ?></option>
					<?php } ?>
                               
                              </select>
                            </div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Color</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="color" name="color" placeholder="" class="form-control" required=""></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Reg Year</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="regyear" name="regyear" placeholder="" class="form-control" required=""></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Body Type</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="btype" name="btype" placeholder="" class="form-control" required=""></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">User Price</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="uprice" name="uprice" placeholder="" class="form-control" required=""></div>
                          </div>
						  
 
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Owner Email ID</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="oemail" name="oemail" placeholder="" class="form-control" required=""></div>
                          </div>
						  
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Owner Contact No</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="omob" name="omob" placeholder="" class="form-control" maxlength="10" required="" pattern="[0-9]{10}" ></div>
                          </div>
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">More Details</label></div>
                            <div class="col-12 col-md-9"><textarea name="hdes" id="hdes" rows="9" placeholder="Content..." class="form-control" required=""></textarea></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image Upload</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="pic" class="form-control-file"></div>
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


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
<?php
 
if(isset($_POST['btn1']))
{
	 
	
	$cname=$_POST['cname'];
	$ctype=$_POST['ctype'];
	$fuel=$_POST['fuel'];
	$capacity=$_POST['capacity'];
	$mntype=$_POST['mntype'];
	$color=$_POST['color'];
	$regyear=$_POST['regyear'];
	$btype=$_POST['btype'];
	$uprice=$_POST['uprice'];
	$oemail=$_POST['oemail'];
	$omob=$_POST['omob'];
	$hdes=$_POST['hdes'];
	//$pic=$_POST['pic'];
	$user="admin";
	$status="added";
	//$user="admin";
	
	
	
	
	//$feature1 = $_GET['features'];

 

       // echo $feature11."<br />";
		$uppic = rand(1000,100000)."-".$cname.".jpg";
//$pic = rand(1000,100000)."-".$fn.'.jpg';
    $pic_loc = $_FILES['pic']['tmp_name'];
     $folder="../pics/";

     if(move_uploaded_file($pic_loc,$folder.$uppic))
     {
		 

		
		$query="INSERT INTO product VALUES(NULL,'$cname','$ctype','$mntype','$fuel','$color','$regyear','$capacity','$btype','$uprice','$hdes','$uppic','$oemail','$omob','$status','$user')";
	mysql_query($query);
	echo '<script>'.'alert("New Car details is Added")'.'</script>';

	
		
	 }
	    else
     {
       
	                    echo '<script>'.'alert("error in insertion")'.'</script>';
     }
	
    
}



?>
