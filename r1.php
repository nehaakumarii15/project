<?php
$conn = new mysqli("localhost","root","","gmail");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $sql="CREATE TABLE r1(Email varchar(20),Username VARCHAR(20),Password VARCHAR(20),Name text(20),
//    Last_name text(20),Gender text(20),Date_of_birth VARCHAR(20))";
// if ($conn->query($sql) === TRUE) {
//        echo "Table created successfully";
//  } else {
//   echo "Error creating table: " . $conn->error;
//  }
 if(isset($_POST['submit'])){

 $Email = $_POST['Email'];
$Username = $_POST['Username'];
 $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
 $Name = $_POST['Name'];
 $Last_name = $_POST['Last_name'];
 $Gender = $_POST['Gender'];
 $Date_of_birth = $_POST['Date_of_birth'];

 $sql="INSERT INTO record 
 (Email,Username,Password,Name,Last_name,Gender,Last_name,Date_of_birth) 
 VALUES 
 ('$Email','$Username','$Password','$Name','$Last_name','$Gender','$Last_name','$Date_of_birth')";

 if($conn->query($sql) === TRUE){
     echo "Account Created Successfully";
}else{
     echo "Error: " . $conn->error;
 }
 }

$conn->close();
?>