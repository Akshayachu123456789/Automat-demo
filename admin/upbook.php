<?php
	include '../config.php';
    $cid=$_REQUEST['c'];
	$a="update booking set status='confirm' where bid='$cid'";
	$b=mysql_query($a);
    header('Location: view_bookings.php');
 
?>
