<?php
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$id=uniqid();
$message = $_POST['message'];
$query= "INSERT INTO Scanvegers_sampede_registration  (name, email, number, subject, message) VALUES ('$name', '$email', $number, '$subject', '$message')";
$q=mysqli_query($con,$query);
if ($q){
// echo "saved"
	$_SESSION['success'] = "contact store successfully";
	header('Location: home.html');
	
	}
	else 
	{
	// echo "not saved"
	$_SESSION['status'] = "contact store successfully";
	header('Location: home.html');
    }
   
?>




