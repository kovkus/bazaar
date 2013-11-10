<?php

	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$eventtype = $_POST['eventtype'];
	$date = trim($_POST['date']);
	$person = $_POST['person'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	
	$site_owners_email = 'YOUR_MAIL'; // Replace this with your own email address
	$site_owners_name = 'YOUR_PASSWORD'; // replace with your name

	$error = "";

	if (strlen($name) < 2) {
		$error['name'] = "Please enter your name";	
	}
	
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Please enter a valid email address";	
	}

	if (!$error) {
		
		require_once('phpMailer/class.phpmailer.php');
		$mail = new PHPMailer();
		
		$mail->From = $email;
		$mail->FromName = $name;
		$mail->FromName .= " ".$surname;
		$mail->Subject = 'Catering';
		$mail->AddAddress($site_owners_email, $site_owners_name);
		$mail->Body = "Event: ".$eventtype."\r\n"; 
		$mail->Body .= "Date: ".$date."\r\n"; 
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

		$response = (isset($error['name'])) ? "<div class='alert alert-error'>" . $error['name'] . "</div> \n" : null;
		$response .= (isset($error['email'])) ? "<div class='alert alert-error'>" . $error['email'] . "</div> \n" : null;
		
		echo $response;
	} # end if there was an error sending

?>