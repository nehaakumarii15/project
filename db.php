<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "gmail"; 
  $conn = mysqli_connect("localhost","root","","gmail");
  if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
  }
  
?>