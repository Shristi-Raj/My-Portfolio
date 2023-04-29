<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["submit"])){
    $mail=new PHPMailer(true);
    $mail ->isSMTP();
    $mail ->Host = 'smtp.gmail.com';
    $mail ->SMTPAuth = true;
    $mail ->Username ='shristiraj2407@gmail.com';
    $mail ->Password = 'ankiraj2507';
    $mail ->SMTPSecure = 'ssl';
    $mail ->Port = 465;

    $mail ->setFrom('ahriatiraj2407@gmail.com');

    $mail ->addAddress($_POST["email"]);
    $mail ->isHTML(true);

    $mail ->password =$_POST["password"];

    $mail ->submit();

    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'index.php';
    </script>
    ";
}
?>