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
                        <strong>ADD NEW CATEGORY</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                      
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">CATEGORY NAME</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="cname" name="cname" placeholder="Enter Category name" class="form-control"></div>
                          </div>
					
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">DESCRIPTION</label></div>
                            <div class="col-12 col-md-9"><textarea name="des" id="des" rows="12" placeholder="Category Details..." class="form-control"></textarea></div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">CATEGORY IMAGE</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="img" name="img" class="form-control-file"></div>
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
	 
	
	$b=$_POST['cname'];
	$d=$_POST['des'];
	$randm = rand(1000,100000);
	
		if(isset($_FILES['img']))
	{
		$imgname1=$randm.".jpg";
		//$file_name=$_FILES['image']['name'];
		$file_tmp=$_FILES['img']['tmp_name'];
		//move_uploaded_file($file_tmp,"images/".$file_name);
		if(move_uploaded_file($file_tmp,"../category/".$imgname1))
		echo "sucess";
		else
		echo "not";
		
	}
	
	$p="insert into catgry(c_id,c_name,c_des,c_img,c_no) values(NULL,'$b','$d','$imgname1','$randm')";
	
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