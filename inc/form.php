<?php
$contactMessage = '';

if(filter_has_var(INPUT_POST, 'submit')){
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);

	if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
		if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
			$contactMessage = '<p class="error-contact">Please use a valid email</p>';
		}else {
			$toEmail = "constantin.nistor9@gmail.com";
			$body = "<h3>".$subject."</h3>
			<p>".$message."</p>
			<p><b>From:</b> ".$name. " <" .$email. "></p>";

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

			$headers .= "From: " .$name. "<" .$email. ">" . "\r\n";

			if(mail($toEmail, $subject, $body, $headers)){
				$contactMessage = '<p class="contact-sent">Message sent with success</p>';
				$name = '';
				$email = '';
				$subject = '';
				$message = '';
			}else{
				$contactMessage = '<p class="error-contact">Message failed to be sent</p>';
			}
	
		}
	}else {
		$contactMessage = '<p class="error-contact">Please fill in all fields</p>';
	}
}

?>

