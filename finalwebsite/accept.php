<?php

$conn = new mysqli("localhost","root","","db");


if ($conn== false) {
    die("Connection failed: " . mysqli_connect_error());

}



$name = mysqli_real_escape_string($conn, $_POST['name']);
$sub = mysqli_real_escape_string($conn, $_POST['subject']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn,$_POST['message']);
 
	
	$sql = "INSERT INTO feedback(name,email,subject,message) VALUES('$name','$email','$sub','$message')";

	if (mysqli_query($conn,$sql))
	 {
    		echo '<h2> Feedback sent! </h2>';
		header("Location: home.html"); 
	 }
	 else
	 {
 	 	echo "Error: " . $sql . "<br>" . $conn->error;
header("Location: home.html"); 
	 }
	mysqli_close($conn);




?>