<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$email=$_POST['email'];

$phone=$_POST['phone'];

$fname=$_POST['fname'];
$sname=$_POST['sname'];
$message=$_POST['message'];

 // fname sname email phone message

  $emailadmin="nkscoder@gmail.com";
  
$subject = "Contact Us - DAC";



$message ='<html>
<body>
<div id="abcd" style="text-align:justify;font-size:18px;"> First Name:-'.$fname.'Last Name:-'.$sname.'<br>Phone:-'.$phone.'<br>Email:-'.$email.'<br>Address :-'.$message. '</div>
</body>
</html>';


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'sub5.mail.dreamhost.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hello@interiopro.com';                 // SMTP username
$mail->Password = 'qazplmq1w2e3r4';                       // SMTP password
//$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;// TCP port to connect to
$mail->IsHTML(true);
$mail->setFrom('hello@interiopro.com', 'Interio Pro');
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('hello@interiopro.com', 'noreply');


// $mail->addAddress($email, $name);     // Add a recipient


$mail->addAddress($emailadmin);     // Add a recipient

$mail->Subject = $subject;
$mail->Body    = $message;

  




   
if($mail->send())
 {

   // echo "";
     header("location: ../contact.php?msg='<p class='success'>Thanks for contacting us. We will contact you DAC!</p>'");

} else {
   
   
      // echo "";
      header("location: ../contact.php?msg='<p class='error'>Some error occurred!</p>'");

      }
