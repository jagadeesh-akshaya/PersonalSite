<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $email_from = 'aashika.jagadeesh@gmail.com';
    $subject = "Message from a site visitor " . $name;
    $email_body = $name '\n' $email '\n' $message;
    $mail_to = 'jagadeesh.akshaya@gmail.com';
    $headers = "From: " $email_form;
    $headers .= "Reply-To: " $email;
    mail($mail_to,$subject,$email_body,$headers);
    header("Location: index.html");
    ?>
