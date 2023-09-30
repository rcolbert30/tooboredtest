<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

 require 'phpmailer/src/Exception.php';
 require 'phpmailer/src/PHPMailer.php';
 require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
   
	$mail = new PHPMailer(true);
	

  
    //Collect form data
    $club = $_POST["club"];
    $apeNumber = $_POST["ape-number"];
    $ownerName = $_POST["owner-name"];
    $characterName = $_POST["character-name"];
    $email = $_POST["email"];
    $twitter = $_POST["twitter"];
    $characterDescription = $_POST["character-description"];*/

  // Create email content
    $message = "Club: $club\n";
    $message .= "Ape Number: $apeNumber\n";
    $message .= "Owner Name/Alias: $ownerName\n";
    $message .= "Desired Character Name: $characterName\n";
    $message .= "Email Address: $email\n";
    $message .= "Twitter Handle: $twitter\n";
    $message .= "Character Description: $characterDescription\n";*/


        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        
        $mail->Username ='colbertrashaad@gmail.com';
        $mail->Password = 'wgiyhokzgydgobie';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;
;

        // Set sender and recipient addresses
        $mail->setFrom('colbertrashaad@gmail.com');
        $mail->addAddress($_POST["email"]);
	
	     $mail->isHTML(true);

        // Set email subject and body
        $mail->Subject = $_POST["subject"];
        $mail->Body = $_POST["body"];
	
	    $mail->send();
	
	    echo
			"
			<script>
			alert('Submission Successful');
			document.location.href='contact1.html';
			
			
			</script>
			";

        /*// Send the email
        if ($phpmailer->send()) {
            // Send confirmation email to submitter
            $confirmationSubject = "Confirmation of Casting Call Submission for “Too Bored” - Apetoon Studios";
            $confirmationMessage = "Your confirmation message here...";

            $phpmailer->clearAddresses();
            $phpmailer->addAddress($email);
            $phpmailer->Subject = $confirmationSubject;
            $phpmailer->Body = $confirmationMessage;
            $phpmailer->send();

            // Redirect back to the form page with a success message
            header("Location: contact1.html?success=1");
            exit();
        } else {
            echo "Message could not be sent.";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";*/
    }
?>
