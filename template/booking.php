<?php
	
	$date = trim($_POST['date']);
	$time = $_POST['time'];
	$person = $_POST['person'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	
	$site_owners_email = 'YOUR_MAIL'; // Replace this with your own email address
	$site_owners_name = 'YOUR_PASSWORD'; // replace with your name

	$error = "";
	
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Please enter a valid email address";	
	}

	if (!$error) {
		
		require_once('phpMailer/class.phpmailer.php');
		$mail = new PHPMailer();
		
		$mail->From = $email;
		$mail->FromName = 'Reservation Form';
		$mail->Subject = 'Reservation';
		$mail->AddAddress($site_owners_email, $site_owners_name);
		$mail->Body = "Date: ".$date."\r\n"; 
		$mail->Body .= "Time: ".$time."\r\n"; 
		$mail->Body .= "Person: ".$person."\r\n"; 
		$mail->Body .= "Phone: ".$tel."\r\n"; 
		
		// BEGIN GMAIL STUFF
		$mail->Mailer = "smtp";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587;
		$mail->SMTPSecure = "tls"; 
		
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->Username = "YOUR_MAIL"; // SMTP username
		$mail->Password = "YOUR_PASSWORD"; // SMTP password
		// END GMAIL STUFF
		
		$mail->Send();
		
		echo "<div class='alert alert-success'>Congratulations! We've received your email. We'll be in touch as soon as we possibly can! </div>";
		
	} # end if no error
	else {

		$response .= (isset($error['email'])) ? "<div class='alert alert-error'>" . $error['email'] . "</div> \n" : null;
		
		echo $response;
	} # end if there was an error sending

?>