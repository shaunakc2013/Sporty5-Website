<?php

$conn = new mysqli("localhost","root","","db");


if ($conn== false) {
    die("Connection failed: " . mysqli_connect_error());

}



$em = mysqli_real_escape_string($conn,$_POST['email1']);
$passwd = mysqli_real_escape_string($conn,$_POST['pass1']); 

 $sql = mysqli_query($conn,"SELECT * FROM sport WHERE Email='$em' AND  Password='$passwd'  LIMIT 1"); 

    if(mysqli_num_rows($sql) == 1)
   {
	$row = mysqli_fetch_array($sql); 
        session_start(); 
        $_SESSION['name'] = $row['Name']; 
       // $_SESSION['e'] = $row['first_name']; 
        //$_SESSION['lname'] = $row['last_name']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: home.html"); // Modify to go to the page you would like 
        exit; 
    }
    else{ 
        header("Location: index.html"); 
        exit; 
} 


?>