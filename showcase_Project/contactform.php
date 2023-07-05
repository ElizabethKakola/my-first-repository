<?php

 
$server= "localhost";
$username= "root";
$password= "" ;
$dbname= "lush";

 $errors = array();
 
 
if(!$conn = mysqli_connect($server, $username, $password, $dbname))
{
	die("Failed to connect!");
	
} 

if(isset($_POST["send"])){
	
	// Form validation
	if(!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["phonenumber"]) && !empty($_POST["message"])){
		
		$name = $_POST["name"];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		$message = $_POST['message'];
		
		
		$query = "INSERT into contactform (name,surname,email,phonenumber,message) VALUES ('$name', '$surname', '$email', '$phonenumber', '$message')";
		
		$results = mysqli_query($conn,$query) or die(mysqli_error());
		
		if($results){
			echo "Feedback submitted successfully";
		}
		else{
			echo "Feedback not submitted!";
		}
	}
	else{
		echo "Thank you for submitting ";
		header('location:index.html');
	}
}



 
?>
