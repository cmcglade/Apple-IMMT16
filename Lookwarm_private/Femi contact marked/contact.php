<!DOCTYPE html>  
<html>  
<head>  
<title>Thank you!</title>  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
<link rel="stylesheet" type="text/css" href="contact.css">
</head> 

<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$password = $_POST['password'];

echo "<p>Thank you $first_name $last_name for submitting your information. We will contact you soon at $phone to discuss further</p>";
?>

