<?php
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$id=uniqid();
$message = $_POST['message'];
$query= "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email' , '$subject', '$message')";
$q=mysqli_query($con,$query);
if ($q){
// echo "saved"
	$_SESSION['success'] = "contact store successfully";
	header('Location: contact-us.html');
	
	}
	else 
	{
	// echo "not saved"
	$_SESSION['status'] = "contact store successfully";
	header('Location: contact-us.html');
    }
   
?>