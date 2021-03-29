<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$content = $_POST["comments"];

    $date = $_POST['resdate'];
    $time = $_POST['restime'];
    $resturant = $_POST['resrest'];
    $person = $_POST['numperson'];
    // $toEmail = "Clearbusiness.adrianvenoin@gmail.com";
    $toEmail = "khan.waqar278@gmail.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    $subject = "HTML email";
    $message = "
        <html>
        <head>
        </head>
        <body>
        <p>Reservation Email</p>
        <table border='1' width='100%'>
        <tr>
        <th>Name</th>
        <td>$name</td>
        </tr>
        <tr>
        <th>Email</th>
        <td>$email</td>
        </tr>
        <tr>
        <th>Phone</th>
        <td>$phone</td>
        </tr>
        <tr>
        <th>Comment</th>
        <td>$content</td>
        </tr>
        <tr>
        <th>Date</th>
        <td>$date</td>
        </tr>
        <tr>
        <th>Time</th>
        <td>$time</td>
        </tr>
        <tr>
        <th>Resturant</th>
        <td>$resturant</td>
        </tr>
        <tr>
        <th>Persons</th>
        <td>$person</td>
        </tr>
        </table>
        </body>
        </html>
        ";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";



	if(mail($toEmail, $subject, $message, $headers)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}else {
        $message = "Something Went Wrong Try again Later";
        $type = "Failure";
    }
echo $message;
exit;
?>