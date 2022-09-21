<?php
$to = "uchchash2517@gmail.com";
$subject = "Test Subject";
$message = "Message";
$headers = "From: mahmudur.tbs@gmail.com \r\n";
$headers .= "Content-type: html/text";
if(mail($to, $subject, $message, $headers)){
    echo "Mail Send Successfully";
} else{
    echo "Mail not Send";
}
?>