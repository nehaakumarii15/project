<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "myserver"; 
  $conn = new mysqli($servername,$username,$password,$database);
  if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
  }
  echo "connected succesfuly";
//   $sql="CREATE TABLE NEHA12(ROLL_NO INT PRIMARY KEY,SNAME VARCHAR(20),ADDRES VARCHAR(20))";
// //  
// if ($conn->query($sql) === TRUE) {
//   echo "Table created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }



 //$sql="INSERT INTO NEHA12(ROLL_NO,SNAME,ADDRES) VALUES(101,'MANSI','PANIPAT')";
 //$sql="INSERT INTO NEHA12(ROLL_NO,SNAME,ADDRES) VALUES(102,'ARYAN','DELHI')"; 
 //$sql="INSERT INTO NEHA12(ROLL_NO,SNAME,ADDRES) VALUES(103,'MANSI','SONIPAT')"; 
 //$sql="INSERT INTO NEHA12(ROLL_NO,SNAME,ADDRES) VALUES(104,'RISHI','KARNAL')"; 
//  $sql="INSERT INTO NEHA12(ROLL_NO,SNAME,ADDRES) VALUES(105,'SWETA','DELHI')";   
//  $sql="INSERT INTO NEHA12(ROLL_NO,SNAME,ADDRES) VALUES(106,'ISHITA','PANIPAT')";   
 //$sql="UPDATE NEHA12 SET SNAME='SWETA' WHERE SNAME='ISHIKA'";
 //$sql="UPDATE NEHA12 SET SNAME='SWETA' WHERE SNAME='ISHIKA'";
 //$sql="DELETE FROM NEHA12 WHERE ROLL_NO=103";
 $sql="SELECT SNAME , ROLL_NO FROM NEHA12 ORDER BY SNAME DESC ";
 $result = $conn->query($sql);
 if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    echo "ROLL_NO:" . $row["ROLL_NO"]." SNAME:" .$row["SNAME"]."<BR>";
  }
 }
 else{
  echo "0 result";
 }
/*if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/
$conn->close();
?>