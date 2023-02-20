<?php
require('config.php');
if(isset($_POST['btnsub']))
{
	

    $Pickup=$_POST['Pickup'];
	$dob=$_POST['dob'];
	$Reason=$_POST['Reason'];
    $Drop=$_POST['Drop'];
    $Address=$_POST['caddr'];
    $car_id=$_POST['car_id'];
    //$img=$_POST['img'];
    //$img2=$_POST['img2'];
    



	    $p="insert into  form values(Null,'$Pickup','$dob','$Reason','$Drop','$Address','1')";
        $w=mysql_query( $p);
        echo $p;
		
   
	
	//echo $p;
	
	$msg=0;
	if(mysql_affected_rows()==1)

	{
		//echo '<script> alert("'."sucess".'")</script>';
		$msg=1;
				
				header("location:car_book.php?msg=".$msg);
	}
	else
	{
		//echo '<script> alert("'."error".'")</script>';
		
				header("location:car_book.php?msg=".$msg);
	}
	
}

?>