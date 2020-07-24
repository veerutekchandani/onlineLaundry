<?php 
$ToEmail = 'veerutekchandani.57@gmail.com'; 
$EmailSubject = 'Site contact form';  
$MESSAGE_BODY = "Name: ".$_POST["name"]."\r\n"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]."\r\n"; 
$MESSAGE_BODY .= "Comment: ".nl2br($_POST["message"])."\r\n"; 
if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY)) {
echo "Message sent"; }
?>