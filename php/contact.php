<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["phone"];
	$content = $_POST["comments"];

    // $toEmail = "Clearbusiness.adrianvenoin@gmail.com";
    $toEmail = "khan.waqar278@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}else {
        $message = "Something Went Wrong Try again Later";
        $type = "Failure";
    }
echo $message;
exit;
?>