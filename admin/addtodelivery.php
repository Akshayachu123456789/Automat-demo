<?php
	include '../config.php';
	require '../PHPMailer/PHPMailerAutoload.php';
	$email="";
	$passwd="";
    $purid=$_REQUEST['purid'];
	$a="update purchase set status='delivery' where purid='$purid'";
	$b=mysql_query($a);

	/*$d="SELECT * FROM customer where userid='$cid'";
				                        $e=mysql_query($d);
				                        while($row=mysql_fetch_array($e))
    				                    { 
    				                    	$email=$row['email'];
    				                    }


    				                    $d="SELECT * FROM login where userid=' $cid'";
				                        $e=mysql_query($d);
				                        while($row=mysql_fetch_array($e))
    				                    { 
    				                    	$passwd=$row['pswd'];
    				                    }




$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'cloudservicemail@gmail.com';          // SMTP username
$mail->Password = 'cloudmail'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('cloudservicemail@gmail.com', 'ServiceMail');
$mail->addReplyTo('cloudservicemail@gmail.com', 'ServiceMail');
$mail->addAddress($email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>AtuoMart Confirmation Mail</h1>';
$bodyContent .= '<p><h4>Welcome to world Auctions.Congratulation you successfully activated your account</b><br><br><h2>Username : '.$cid.'</h2> And <h2> Password : '.$passwd.'</h2></h4></p>';

$mail->Subject = 'AutoMart Mail';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	header('location:index.php');
    //echo 'Message has been sent';
}

*/
   header('Location: view_deliveries.php');
 
?>