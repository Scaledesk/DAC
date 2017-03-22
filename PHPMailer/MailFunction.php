<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$email=$_POST['email'];

$phone=$_POST['phone'];

$fname=$_POST['fname'];
$sname=$_POST['sname'];
$message=$_POST['message'];

 // fname sname email phone message

  $emailadmin="care@futureconsumer.in";
  
$subject = "Contact Us - DAC";



$message ='<html>
<body>
<div id="abcd" style="text-align:justify;font-size:18px;"> First Name:-'.$fname.'Last Name:-'.$sname.'<br>Phone:-'.$phone.'<br>Email:-'.$email.'<br>Address :-'.$message. '</div>
</body>
</html>';


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'desiattacompany@gmail.com';                 // SMTP username
$mail->Password = 'kreativstreet';                       // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;// TCP port to connect to
$mail->IsHTML(true);
$mail->setFrom('desiattacompany@gmail.com', 'DAC');
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('desiattacompany@gmail.com', 'noreply');


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
