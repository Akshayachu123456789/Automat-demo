<?php
	include '../config.php';
    $cid=$_REQUEST['c'];
	$a="update books set status='decline' where bk_id='$cid'";
	$b=mysql_query($a);
    header('Location: view_book.php');
 
?>