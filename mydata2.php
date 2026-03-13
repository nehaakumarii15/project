<html>
  <head>
   <h1><center> RECORD </center></h1>
 <style>
  table{
    margin: auto;
  }
  </style>
</head>
<body>
  <center><div style="background-color:antiquewhite; height:400px; width:600px; margin:20px; padding:50px;"> 
  <form method="POST">
    <table cellspacing='10' cellpadding='5'>
  <tr>
    <td>ENTER ID</td><td> <input type="text" name="ID"></td>
</tr>
<tr>
  <td>SNAME</td><td> <input type="text" name="SNAME"></td>
</tr>
<tr>
  <td>ADDRES </td><td><input type="text" name="ADDRES"></td>
</tr><tr>
 <td> STATE</td><td> <input type="text" name="STATE"></td>
</tr><tr>
 <td> PHONE</td><td> <input type="text" name="PHONE"></td>
</tr><tr>
  <td><button name="choice" value="1"> insert </button></td>
  <td><button name="choice" value="2"> view </button></td>
</tr><tr>
 <td> <button name="choice" value="3">update </button></td>
  <td><button name="choice" value="4"> delete </button></td></tr><tr>
  <td><button name="choice" value="5">sort </button></td></tr>
</table>
</div>
</form></center>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "TASK"; 
  $conn = new mysqli($servername,$username,$password,$database);
  if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
  }
  // echo "connected succesfuly";
  if(isset($_POST['choice'])){
    $choice=$_POST['choice'];
    $ID=$_POST['ID'];
    $SNAME=$_POST['SNAME'];
    $ADDRES=$_POST['ADDRES'];
    $STATE=$_POST['STATE'];
     $PHONE=$_POST['PHONE'];

switch($choice){
  case 1 :
  mysqli_query($conn,"INSERT INTO task1(ID,SNAME,ADDRES,STATE,PHONE) VALUES($ID,'$SNAME','$ADDRES','$STATE','$PHONE')");
  echo  "data inserted";
  break;

  case 2 :
  $result = mysqli_query($conn,"SELECT * FROM task1");
  
  echo "<table border='3' cellspacing='10' background='gray'>";
  echo "<tr><th>ID No.</th><th>Student NAME</th><th>ADDRESS</th><th>state</th><th>phone</th></tr>";
  while($row=mysqli_fetch_assoc($result))
  {
  echo "<tr><td>".$row['ID']."</td><td>".$row['SNAME']."</td><td>".$row['ADDRES']."</td><td>".$row['STATE']."</td><td>".$row['PHONE']."</td></tr>";
}
echo "</table>";
  break;

  case 3 :
  mysqli_query($conn,"UPDATE task1 SET SNAME='$SNAME',ADDRES='$ADDRES',STATE='$STATE',PHONE='$PHONE' WHERE ID=$ID");
  echo "data updated";
  break;

  case 4 : 
  mysqli_query($conn,"DELETE FROM task1 WHERE ID = $ID");
  echo " DATA DELETE";
  break;
  case 5 :
    $result=mysqli_query($conn,"SELECT * FROM task1 ORDER BY SNAME");
    if($result->num_rows > 0){
      while($row=mysqli_fetch_assoc($result))
  {
  echo $row['ID']."<br>".$row['SNAME']."<br>".$row['ADDRES']."<br>".$row['STATE']."<br>".$row['PHONE']."<br>";
}
    }
  }

//   $sql="CREATE TABLE Task1(ID INT PRIMARY KEY,SNAME VARCHAR(10),ADDRES VARCHAR(10),STATE VARCHAR(20),PHONE INT";
//  $sql="INSERT INTO Task1(ID,SNAME,ADDRES,STATE,PHONE) VALUES(105,'ARUN','KARNAL','HARYANA',986)";
 
//   if ($conn->query($sql) === TRUE) {
//  echo "Table created successfully";
//   } else {
//  echo "Error creating table: " . $conn->error;
//  }
  }
  // $conn->close();
?>
</body>
</html>