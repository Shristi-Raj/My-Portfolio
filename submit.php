<?php include 'include/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_Post["submit"])){
    $mail=new PHPMailer(true);

    $mail->isSMTP();
    $mail->HOST = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Password = 'fqttybteerwyelnh';
    $mail->SMTPSecure ='ssl';
    $mail->Port = 465;

    $mail->setFrom('shristiraj2407@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->submit();

    echo
    "
    <script>
    alert('sent successfully');
    document.location.href = 'index.php';
    </script>
    "
}

















/*if(isset($_POST['submit']))
{ 
    $mail = $_POST['email'];
    $password =$_POST['password'];
    $result= mysqli_query($con, "SELECT * FROM contact WHERE email='$mail'");
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) >0){
      if($password==$row["password"]){
       $_SESSION["login"]=true;
       $_SESSION["id"]=$row["id"];
       header("Location:step.php");
    }
    else{
        echo'<script>alert("Wrong password");</script>';
    }
    }
    else{
        echo'<script>alert("Users Not Loged In");</script>';
    }
    }
?>
*/

