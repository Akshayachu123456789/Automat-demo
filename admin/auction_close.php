<?php
 require('../config.php');

	 
	
	$aid=$_REQUEST['aid'];
	$pid=$_REQUEST['pid'];
	$amt=$_REQUEST['amt'];
	$usr=$_REQUEST['usr'];
	
	$addr="address";
	$status="win";
	$pay="000";
	//$user="admin";
	
		
		$query="INSERT INTO  purchase VALUES(NULL,'$usr','$pid','$aid','$amt','$pay','$addr','$status')";
	mysql_query($query);
	
	
		$query1="UPDATE auction SET status='closed' where aid='$aid'";
	mysql_query($query1);
	
	
	header('Location: closed_auctions.php');

	





?>