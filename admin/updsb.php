<?php
	include '../config.php';
    $cid=$_REQUEST['c'];
	$a="update login set status='incative' where userid='$cid'";
	$b=mysql_query($a);
    header('Location: index.php');
 
?>