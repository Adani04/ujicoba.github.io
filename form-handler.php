<?php

$name = $_POST['name'];

$visitor_email = $_POST['email'];

$subject = $_POST['subject'];

$pesan = $_POST['pesan'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body =   "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User subject: $subject.\n".
                "User pesan: $pesan.\n";
$to = 'sangpejuangtangguhberada@gmail.com';

$headers = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");
?>