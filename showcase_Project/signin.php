<!DOCTYPE html>
<?php

  include "connect.php";
  session_start();

if(isset($_POST['submit'])){

	
	$email = $_POST["email"];
	$pass = $_POST["password"];
	

   $select = " SELECT * FROM account WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      header('location:fontend.html');
     
   }else{
      echo "<script>alert('Wrong Password and email');</script>";
   }

};
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
 
  <link rel="stylesheet" href="style.css">
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <h1>Hello Again!</h1>
    <p>Welcome back to Lush Activewear </p>
    <form action ="" method = "post">
      <input  type="text" name="email" placeholder="Email Address">
      <input type="password" name="password" placeholder="Password">
      <p class="recover">
       
      </p>
	    <button name="submit">Sign in</button>
    </form>
  
    
    <div class="not-member">
      Not a member? <a href="signup.php">Register Now</a>
    </div>
  </div>
</body>
</html>
