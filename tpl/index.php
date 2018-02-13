<?php

require_once("vendor/autoload.php")

use Rain\Tpl;
// config
$config = array(
    "tpl_dir"   => "templates/",
    "cache_dir" => "cache/"
);

Tpl::configure( $config );

$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Obi Wan Kenobi" );
$tpl->assign( "version", PHP_VERSION );
// assign an array
// draw the template
$html = $tpl->draw( "index.html", true);

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "riksongleison@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "88152375cannibalcorpse";
//Set who the message is to be sent from
$mail->setFrom('riksongleison@gmail.com', 'Rick Vei');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('riksongleison471@gmail.com', 'Rick Novo');
//Set the subject line
$mail->Subject = 'Testando o PHPMailer';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($html);
//Replace the plain text body with one created manually
$mail->AltBody = 'Corpo alternativo';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    if (save_mail($mail)) {
        echo "<br>Message saved!";
    }
}


 ?>
