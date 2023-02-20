<?php
	include 'header.php';
	//include 'config.php';	
	?>


	<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->
		<div class="page-title" style="background-image: url('images/background01.jpg');">
			<div class="inner">
				<div class="container">
					<div class="title">Submit Your Car</div> <!-- end .title -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		<section class="section lighter">
			<div class="inner">
				<div class="container">
					<h6 class="add-car-heading">Add Your Car Details</h6>
					<div class="add-car-form">
						<form action="#" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label>Enter Car Name<span class="required">*</span></label>
										<input type="text" placeholder="Enter Your Car Name" name="cname" required="">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<label>Select Car Type<span class="required">*</span></label>
										<div class="select-wrapper">
											<select class="selectpicker" name="ctype">
								<option>Sedan</option> 
								<option>Hachback</option> 
								<option>SUV</option> 

											</select>
											
										</div> <!-- end .select-wrapper -->
									</div> <!-- end .form-group -->
									<div class="form-group">
										<label>Select Fuel Type<span class="required">*</span></label>
										<div class="select-wrapper">
											<select class="selectpicker" name="fuel">
												<option>PETROL</option>
												<option>DIESEL</option>
												<option>GAS</option>
											</select>
											
										</div> <!-- end .select-wrapper -->
									</div> <!-- end .form-group -->
									
									<div class="form-group">
										<label>Enter Seat Capacity of your car<span class="required">*</span></label>
										<input type="text" placeholder="Seat Capacity" name="capacity" required="">
									</div>
									
									<div class="form-group">
										<label>Manufacture<span class="required">*</span></label>
										<div class="select-wrapper">
											<select class="selectpicker" name="mntype">
												<?php
					
					$qry="select * from manufactures";
					$res=mysql_query($qry);
					while($row=mysql_fetch_array($res))
					{ 
					?>
	<option><?php echo $row['name']; ?></option>
					<?php } ?>
											</select>
											
										</div> <!-- end .select-wrapper -->
									</div> <!-- end .form-group -->
									
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Color of your car<span class="required">*</span></label>
										<input type="text" placeholder="color" name="color" required="">
									</div> <!-- end .form-group -->
									
									<div class="form-group">
										<label>Registration year your car<span class="required">*</span></label>
										<input type="text" placeholder="Registration year" name="regyear" required="">
									</div> <!-- end .form-group -->
									
									<div class="form-group">
										<label>Body Type of your car<span class="required">*</span></label>
										<input type="text" placeholder="Body Type" name="btype" required="">
									</div> <!-- end .form-group -->
									
									<div class="form-group">
										<label>Car Price<span class="required">*</span></label>
										<input type="text" placeholder="User Price" name="uprice" required="">
									</div> <!-- end .form-group -->
									
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
								
									<div class="form-group">
										<label>Owner Mail ID<span class="required">*</span></label>
										<input type="text" placeholder="Mail Id" name="oemail" required="">
									</div> <!-- end .form-group -->
									
									
									<div class="form-group">
										<label>Owner Contact No<span class="required">*</span></label>
										<input type="text" placeholder="Phone No" name="omob" required="">
									</div> <!-- end .form-group -->
									
									
									<div class="form-group">
										<label>More Details About Car<span class="required">*</span></label>
										<textarea name="hdes" id="hdes" rows="9" placeholder="Content..." class="form-control" required=""></textarea>
									</div> <!-- end .form-group -->
									
									
									<div class="form-group">
										<label>Image Upload<span class="required">*</span></label>
									<input type="file" id="file-input" name="pic" class="form-control-file">
									</div> <!-- end .form-group -->
									
									
									
									
								</div> <!-- end .col-sm-4 -->
							</div> <!-- end .row -->
							<button type="submit" class="button solid green" name="btn1">Save and Continue</button>
						</form>
					</div> <!-- end .add-car -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->
		
				<?php
	include 'footer.php'; 
	?>
	
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
	$user=$_SESSION["user"];
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
	$v=mysql_query($query);

	//$v=mysql_query($r);
//echo $query;
	if(mysql_affected_rows()==1)

	{
		echo '<script> alert("'."sucess".'")</script>';
	}
	else
	{
		echo '<script> alert("'."error".'")</script>';
	}
	 }
		
}

?>
