<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])) {
    
	$mail = new PHPMailer(true);
	$adminMail = new PHPMailer(true); 

	$adminMail->isSMTP();
	$adminMail->Host = 'smtp.office365.com';
    $adminMail->SMTPAuth = true;
    $adminMail->Username = 'westbreddiamond@outlook.com';
    $adminMail->Password = 'R@nyia7076524467';
    $adminMail->SMTPSecure = 'tls';
    $adminMail->Port = 587;

	$adminMail->setFrom('westbreddiamond@outlook.com');
	$adminMail->addAddress('westbreddiamond@outlook.com');
	$adminMail->isHTML(true);


	$collection = $_POST["club"];
	$token = $_POST["ape-number"];
    $owner = $_POST["owner-name"];
	$alias = $_POST["character-name"];
	$useremail = $_POST["email"];
	$twitter = $_POST["x"];
	$des = $_POST["character-description"];

	$mail->isSMTP();
    $mail->Host = 'smtp.office365.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'westbreddiamond@outlook.com';
    $mail->Password = 'R@nyia7076524467';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('westbreddiamond@outlook.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);
	
    $mail->Subject = ' Confirmation of Casting Call Submission for "Too Bored - Apetoon Studios"';
    $mail->Body = "Dear $alias,
	<br>
	<br>
	Thank you for taking the time to submit your casting application for our upcoming show “Too Bored.” We appreciate your interest in being a part of our project.
	<br>
	<br> 
	This email is to confirm that we have successfully received your submission. Our team will carefully review each application and take the time to consider all potential candidates. We value the effort you’ve put into your submission and your interest in joining our production.
	<br>
	<br>
	
	If you have any questions or need further assistance, please dont hesitate to reach out to our casting team at Serena@ApetoonStudios.com.
	<br>
	<br>
	
	Once again, thank you for your interest in working with Apetoon Studios on “Too Bored.” We look forward to having you on bored.<br>
	<br>
	Best regards,
	<br>
	Willy Bullish
	<br>
	
	Apetoon Studios";
	
	/*$mail->SMTPDebug = 2; // Set debugging level
    $mail->Debugoutput = function($str, $level) {
    // Output debug messages
    echo "Debug level $level; message: $str\n";*/
/*};*/
   

	$formDataMessage = "Form Data:<br>
    <br>
    Collection: $collection<br>
    <br>
    Ape Number: $token<br>
    <br>
    Owner: $owner<br>
    <br> 
    Desired Character Name: $alias<br>
    <br>
    Email: $useremail<br>
    <br>
    Twitter Handle: $twitter<br>
    <br>
    Character Description: $des";

	$adminMail->Subject = "$alias";
    $adminMail->Body = $formDataMessage;


	try {
        $mail->send();
        $adminMail->send();

        echo "
        <script>
        alert('Sent Form'); 
        document.location.href = 'contact1.html';
        </script>
        ";
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}


?>