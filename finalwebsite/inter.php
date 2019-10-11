<?php

$conn = new mysqli("localhost","root","","db");


if ($conn== false) {
    die("Connection failed: " . mysqli_connect_error());

}



$name = mysqli_real_escape_string($conn, $_POST['name']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn,$_POST['pass']);
 
	
	$sql = "INSERT INTO sport(Name,Age,Email,Password) VALUES('$name','$age','$email','$pass')";

	if (mysqli_query($conn,$sql))
	 {
    		echo "Successful Registration!";
		
	 }
	 else
	 {
 	 	echo "Error: " . $sql . "<br>" . $conn->error;
	 }
	mysqli_close($conn);



echo '<br><h2><a href="index.html">Back to Login</a></h2>';


?>