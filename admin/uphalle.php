<?php
	include '../config.php';
    $cid=$_REQUEST['c'];
	$a="update haill set status='enable' where hid='$cid'";
	$b=mysql_query($a);
    header('Location: view_halls.php');
 
?>