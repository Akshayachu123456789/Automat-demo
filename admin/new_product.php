    <?php
	include '../config.php';
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
                        <strong>ADD NEW PRODUCT</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <?php
						  $randm = rand(1000,100000);
						  ?>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">PRODUCT CODE</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="pcode" name="pcode" placeholder="Text" class="form-control" value="<?php echo $randm ?>"readonly></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">PRODUCT NAME</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="pname" name="pname" placeholder="Enter product name" class="form-control"></div>
                          </div>
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">PRODUCT CATEGORY</label></div>
                            <div class="col-12 col-md-9">
                              <select name="category" id="category" class="form-control">
							  
							  		<?php
					
					$qry="select * from catgry";
					$res=mysql_query($qry);
					while($row=mysql_fetch_array($res))
					{ 
					?>
	<option value="<?php echo $row['c_name']; ?>"><?php echo $row['c_name']; ?></option>
					<?php } ?>
					
                               
                              </select>
                            </div>
                          </div>
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">DESCRIPTION</label></div>
                            <div class="col-12 col-md-9"><textarea name="des" id="des" rows="12" placeholder="Product Details..." class="form-control"></textarea></div>
                          </div>
                        
                        
                        
                         
                      
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">PRODUCT IMAGE-1</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="img1" name="img1" class="form-control-file"></div>
                          </div>
						  
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">PRODUCT IMAGE-2</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="img2" name="img2" class="form-control-file"></div>
                          </div>
                         
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">PRODUCT IMAGE-3</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="img3" name="img3" class="form-control-file"></div>
                          </div>
                         
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">PRODUCT IMAGE-4</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="img4" name="img4" class="form-control-file"></div>
                          </div>
                         
						
                         
                        
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="btnsub" id="btnsub" class="btn btn-primary btn-sm">
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
if(isset($_POST['btnsub']))
{
	 
	$a=$_POST['pcode'];
	$b=$_POST['pname'];
	$c=$_POST['category'];
	$d=$_POST['des'];

	
	
	

	if(isset($_FILES['img1']))
	{
		$imgname1=$a."-1".".jpg";
		//$file_name=$_FILES['image']['name'];
		$file_tmp=$_FILES['img1']['tmp_name'];
		//move_uploaded_file($file_tmp,"images/".$file_name);
		if(move_uploaded_file($file_tmp,"../pic/".$imgname1))
		echo "sucess";
		else
		echo "not";
		
	}	
	
	
	if(isset($_FILES['img2']))
	{
		$imgname2=$a."-2".".jpg";
		//$file_name=$_FILES['image']['name'];
		$file_tmp=$_FILES['img2']['tmp_name'];
		//move_uploaded_file($file_tmp,"images/".$file_name);
		if(move_uploaded_file($file_tmp,"../pic/".$imgname2))
		echo "sucess";
		else
		echo "not";
		
	}	
	
	else
	{
	}
	
	
	if(isset($_FILES['img3']))
	{
		$imgname3=$a."-3".".jpg";
		//$file_name=$_FILES['image']['name'];
		$file_tmp=$_FILES['img3']['tmp_name'];
		//move_uploaded_file($file_tmp,"images/".$file_name);
		if(move_uploaded_file($file_tmp,"../pic/".$imgname3))
		echo "sucess";
		else
		echo "not";
		
	}	
	else
	{
	}
	
	
	if(isset($_FILES['img4']))
	{
		$imgname4=$a."-4".".jpg";
		//$file_name=$_FILES['image']['name'];
		$file_tmp=$_FILES['img4']['tmp_name'];
		//move_uploaded_file($file_tmp,"images/".$file_name);
		if(move_uploaded_file($file_tmp,"../pic/".$imgname4))
		echo "sucess";
		else
		echo "not";
		
	}
	
	else
	{
	}	
	
	
	$p="insert into product(p_id,p_code,p_category,p_name,p_description,p_img1,p_img2,p_img3,p_img4) values(NULL,'$a','$c','$b','$d','$imgname1','$imgname2','$imgname3','$imgname4')";
	
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