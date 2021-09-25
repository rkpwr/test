<?php 
    $name = $_POST['name'];
    $visitor = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'panthularavi.rk@gmail.com';
    $email_subject = "New submission";
    $email_body = "User Name: $name .\n"."User Mail: $visitor .\n"."User Message: $message .\n";

    $to = "panthularavi.rk@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To:$visitor \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>