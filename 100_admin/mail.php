<?php

 $user_Name = 'test';
 $user_Phone = 'test';

//date_default_timezone_set('Etc/UTC');

// Edit this path if PHPMailer is in a different location.
require 'vendor/autoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

/*
 * Server Configuration
 */

$mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
$mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
$mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
$mail->Username = "matchonuser@gmail.com"; // Your Gmail address.
$mail->Password = "Cricketlover@17"; // Your Gmail login password or App Specific Password.

/*
 * Message Configuration
 */

$mail->setFrom('matchonuser@gmail.com', 'Match On User'); // Set the sender of the message.
$mail->addAddress('srp2587@gmail.com', 'Sourabh Parihar'); // Set the recipient of the message.
$mail->Subject = 'Subj'; // The subject of the message.

$mail->Body = "Имя: ".$user_Name.". Телефон: ".$user_Phone; // Set a plain text body.


if ($mail->send()) {
    echo "Your message was sent successfully!";
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>