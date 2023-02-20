<?php
	include '../config.php';
    $cid=$_REQUEST['c'];
	$a="update product set status='verify' where pid='$cid'";
	$b=mysql_query($a);
    header('Location: view_products.php');
 
?>