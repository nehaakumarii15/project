<?php
include "db.php";

$Namess = $_POST['Name'] ?? $_GET['Name'] ?? '';
 $Lname = $_POST['Lname'] ?? $_GET['Lname'] ?? '';
 
 if(isset($_POST['Next']))
  {
$month = $_POST['month'] ?? '';
$date = $_POST['date'] ?? '';
$year = $_POST['year'] ?? '';
$Gender = $_POST['gender'] ?? '';

//  if(!$month || !$date || !$year || !$Gender){
//         echo "Please fill all fields!";
//         exit;
//     }
    $DOB = $year."-".$month."-".$date;
// mysqli_query($conn, "INSERT INTO record(Email,Username,Pins,Namess,Lname,Gender,DOB) values('','','','$Namess','$Lname','$Gender','$DOB')");
$sql = "UPDATE record SET DOB='$DOB', Gender='$Gender' WHERE Namess='$Namess' AND Lname='$Lname' ";
 
if(mysqli_query($conn, $sql)){
        header("Location: p3.php?Name=".$Namess."&Lname=".$Lname);
        exit;
    } else {
        echo "Error updating record: ".mysqli_error($conn);
    }
        }
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
<style>
    .titlee{
  font-family: "Arial";
  font-size: 20px;
  font-weight: bold;
  white-space:nowrap;
}
 .text {
  font-family: "Verdana", sans-serif;
  font-size: 15px;
  white-space:nowrap;
} 
     .box1{
        font-size:20px;
        padding-left:300px;
        padding-top:60px;
    }
    input[type="submit"] {
      margin-top: 80px;
      padding: 4px 25px;
      margin-left:400px;
      background-color: #dcc2d3;
      border: 2px solid #671f4b;
    }
.container{
  background-color: #ebe2e2;
  display: flex;
  width: 1200px;
  height: 250;
  margin-top: 100px;
   margin-left: 40px;
  padding: 90px;
   border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
select{
    margin-top:30px;
    margin-left:90px;
}
.footer{
  margin-left: 1000px;
}
 body{
            background: #cfbcbc;
}
</style>
</head>
<body>
        <form action="" method="post">
          <input type="hidden" name="Name" value="<?php echo $Namess; ?>">
    <input type="hidden" name="Lname" value="<?php echo $Lname; ?>">
             <div class="container">
        <div class="box">
           <i class="fa-brands fa-google" style="font-size: 100px; color: #5f458a;"></i><br><br>
           <span class="titlee">BASIC INFORMATION</span><br><br>
  <span class="text">Enter your birthday and gender</span>
</div>
<div class="box1">
        <select name="month" style="width:170px; height:40px;">
        <option disabled selected>Month</option>
        <option value="01" >January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
        </select>
        <input type="text" name="date" placeholder="Date" style="width:170px; height:40px;" required>
        <input type="text" name="year" placeholder="Year" style="width:170px; height:40px;" required>
        <select name="gender"  style="width:530px; height:40px;">
            <option disabled selected> Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
</select>
<br>
    <input type="submit" name="Next" value="Next">
</div></div>
<select style="background-color: #dcc2d3;">
    <option>English (United state)</option>
    <option>Hindi</option>
 </select>
 <div class="footer" >
  Help &nbsp; &nbsp; Privacy &nbsp; &nbsp; Terms
</div>
</form>
</body>
</html>
