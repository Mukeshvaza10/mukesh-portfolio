<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

	require '../assets/vendor/phpmailer/src/Exception.php';
	require '../assets/vendor/phpmailer/src/PHPMailer.php';
  	require '../assets/vendor/phpmailer/src/SMTP.php';

  	// Create a new PHPMailer instance
  	$mail = new PHPMailer();

  	// SMTP configuration (example with Gmail)
  	$mail->isSMTP();
  	$mail->Host = 'smtp.gmail.com';
  	$mail->SMTPAuth = true;
  	$mail->Username = 'example@gmail.com';
  	$mail->Password = 'test@123';
  	$mail->SMTPSecure = 'ssl';
  	$mail->Port = 465; // Adjust the port if required  	

  	if($_POST['name'] != null && $_POST['email'] != null && $_POST['subject'] != null && $_POST['message'] != null) {
  		// Email content
	  	$mail->setFrom('vaza.ms.52@gmail.com', 'Mukesh Vaza');
	  	$mail->addAddress($_POST['email'], $_POST['name']);
	  	$mail->Subject = $_POST['subject'];
	  	$mail->Body = $_POST['message'];
	  	// Send the email
	  	if ($mail->send()) {
	      	echo 'OK';
	  	} else {
	      	echo 'Error: ' . $mail->ErrorInfo;
	  	}
  	} else {
  		echo "All field are required";
  	}


?>
