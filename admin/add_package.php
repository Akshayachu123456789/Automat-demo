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
                        <strong>Package</strong> Details
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Package Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="pname" name="pname" placeholder="name of package" class="form-control"></div>
                          </div>
						  
						<div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Time</label></div>
                            <div class="col col-md-9">
                              <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                  <input type="radio" id="inline-radio1" name="ptime" value="Full Time" class="form-check-input">Full Time
                                </label>
                                <label for="inline-radio2" class="form-check-label ">
                                  <input type="radio" id="inline-radio2" name="ptime" value="Half Day" class="form-check-input">Half Day
                                </label>
                               
                              </div>
                            </div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Food Type</label></div>
                            <div class="col-12 col-md-9">
                              <select name="ftype" id="select" class="form-control">
                                <option value="0">Please select</option>
                                <option value="veg">Vegitarian</option>
                                <option value="non">Non Vegitarian</option>
                                <option value="nv">Both</option>
                              </select>
                            </div>
                          </div>
						  
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Type Of Drink</label></div>
                            <div class="col-12 col-md-9">
                              <select name="dtype" id="select" class="form-control">
                                <option value="0">Please select</option>
                                <option value="non">Non Alcohol</option>
                                <option value="alco">Alcohol</option>
                                <option value="nonal">Both</option>
                              </select>
                            </div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Package Includes</label></div>
                            <div class="col-12 col-md-9"><textarea name="pdes" id="pdes" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Package Price(per person)</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="pprice" name="pprice" placeholder="amount" class="form-control"></div>
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
	 
	
	$pname=$_POST['pname'];
	$ptime=$_POST['ptime'];
	$ftype=$_POST['ftype'];
	$dtype=$_POST['dtype'];
	$pprice=$_POST['pprice'];
	$pdes=$_POST['pdes'];
	$p="insert into packages values(NULL,'$pname','$ptime','$ftype','$dtype','$pdes',$pprice)";
	
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
