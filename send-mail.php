<?php

error_reporting(E_ALL);
ini_set("display_errors", 0);

$name = '' ;
$email = '' ;
$phone = 'N/A' ;
$website = 'N/A' ;
$userMessage = 'N/A' ;

if(isset($_POST['name'])){
    $name = $_POST['name'] ;
}

if(isset($_POST['email'])){
    $email = $_POST['email'] ;
}

if(isset($_POST['phone'])){
    $phone = $_POST['phone'] ;
}

if(isset($_POST['services'])){
    $website = $_POST['services'] ;
}

if(isset($_POST['message'])){
    $userMessage = $_POST['message'] ;
}



if($name == '' || $name == null || $email == '' || $email == null ) {
    echo "fail" ;
    exit();
}


$to = 'info@codepilot.in';
$cc = 'bedanta@codepilot.in';
$subject = 'Message from codepilot website';
$from = $email;
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".'Cc: '.$cc."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi Admin!</h1>';
$message .= '<p style="color:#080;font-size:18px;">New message from codepilot contact form</p>';
$message .= '<table>';
$message .= '<tr><td>Name</td><td>'.$name.'</td></tr>';
$message .= '<tr><td>Email</td><td>'.$email.'</td></tr>';
$message .= '<tr><td>Mobile</td><td>'.$phone.'</td></tr>';
$message .= '<tr><td>Service</td><td>'.$website.'</td></tr>';
$message .= '<tr><td>Message</td><td>'.$userMessage.'</td></tr>';
$message .= '</table>';
$message .= '</body></html>';


if(mail($to, $subject, $message, $headers)){
    echo "success" ;
} else {
    echo "fail" ;
}


?>