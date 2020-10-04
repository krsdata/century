<?php
/*require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "mail.investchain.org";

$mail->SMTPAuth = true;
$mail->Port = 25;
$mail->Username =  "test@investchain.org";

//echo $mail->Username;

$mail->Password = "X3pk64GkEZ3FeluO";

$mail->From =  "test@investchain.org";
$mail->FromName = "Subject Test";

$mail->IsHTML(true);

$from = 'srp2587@gmail.com';

$mail->AddAddress($from);

$mail->Subject = "Test Subject";

$mail->Send();*/

 $to = "srp2587@gmail.com";
 $subject = "This is subject";
 
 $message = "This is HTML message.";
 $message .= "This is headline.";
 
 //$header = "From:test@investchain.org \r\n";
 //$header .= "Cc:afgh@somedomain.com \r\n";
 //$header .= "MIME-Version: 1.0\r\n";
 //$header .= "Content-type: text/html\r\n";
 
 $retval = mail($to, $subject,$message,"From: info@matchonsports.com\r\nX-Mailer: PHP");;
 
 if( $retval == true ) {
    echo "Message sent successfully...";
 }else {
    echo "Message could not be sent...";
 }
?>