<?php
/**
 * Created by PhpStorm.
 * User: cserrao
 * Date: 27/04/2018
 * Time: 19:34
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('', '');
    $mail->addAddress($_REQUEST['email'], $_REQUEST['name']);     // Add a recipient
    $mail->addReplyTo('', '');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Message from Contact Form';
    $mail->Body    = $_REQUEST['message'];

    $mail->send();

    header("Location: contacts.php?status=0");
} catch (Exception $e) {
    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    header("Location: contacts.php?status=1");
}
