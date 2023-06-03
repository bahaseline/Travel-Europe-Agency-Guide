<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$place = $_POST['place'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com'

$email_place = 'New Form Submission'

$email_body = 'User Name : $name./n' .
              'User Email : $visitor_email./n' .
              'Place : $place./n' .
              'User Message : $message./n' ;


$to = 'sbaha21b@amcstudent.edu.gr' ;

$headers ="From : $email_form \r\n";

$headers . = "Reply-To:$visitor_email r\n";

mail($to, $email_place,$email_body,$headers);

header("Location: contact.html ");

?>