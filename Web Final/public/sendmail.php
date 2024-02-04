<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['mobile'];
$message=$_POST['msg'];


$to = "pandagraphicslk@gmail.com";
$message = "<p>".$fname." ".$laname."<br/>Telephone :".$phone."<br/>".$message."</p>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
header('location:contact.html?msg=success');
?>