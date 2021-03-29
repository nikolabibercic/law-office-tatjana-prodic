<?php

require '../objects.php';

$email = $_POST['email'];
$name = $_POST['name'];
$text = $_POST['text'];

$from = 'office@advokat-prodic.rs';
$email = $email;
$to = 'tatjanaglusac1991@gmail.com';
$subject = 'Mejl od korisnika: '.$name.' : '.$email;
$message = $text;
$header = 'FROM: '.$from. "\r\n" . 'Reply-To: '.$email;

$check = mail($to,$subject,$message,$header);

if($check){
    header("Location: ../page-contact.php?contact=true");
}else{
    header("Location: ../page-contact.php?contact=false");
}

?>