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
                        <strong>Car Manufacture</strong> Details
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Manufacture Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="mname" name="mname" placeholder="Text" class="form-control" required=""></div>
                          </div>
                          
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="mdes" id="mdes" rows="9" placeholder="Content..." class="form-control" required=""></textarea></div>
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
 require('../config.php');
if(isset($_POST['btn1']))
{
	 
	
	$mname=$_POST['mname'];
	$mdes=$_POST['mdes'];
	$p="insert into manufactures values(NULL,'$mname','$mdes','active')";
	
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
