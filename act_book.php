<?php
require('config.php');
if(isset($_POST['btnsub']))
{
	
    $bk_date=$_POST['bk_date'];
    $on_date=$_POST['on_date'];
	$on_time=$_POST['on_time'];
	$drop_date=$_POST['drop_date'];
    $drop_time=$_POST['drop_time'];
    $nod=$_POST['nod'];
    $status=$_POST['status'];
    //$img=$_POST['img'];
    //$img2=$_POST['img2'];
    



	    $p="insert into  books values('3','$bk_date','$on_date','$on_time','$drop_date','$drop_time','$nod','$status')";
        $w=mysql_query( $p);
        echo $p;
		
   
	
	//echo $p;
	
	$msg=0;
	if(mysql_affected_rows()==1)

	{
		//echo '<script> alert("'."sucess".'")</script>';
		$msg=1;
				
			header("location:add_book.php?msg=".$msg);
	}
	else
	{
		//echo '<script> alert("'."error".'")</script>';
		
			header("location:add_book.php?msg=".$msg);
	}
	
}

?>