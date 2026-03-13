<?php
include "db.php";
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
<style>
   body{
            background: #cfbcbc;
}
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
      font-size:15px;
    }
.container{
  background-color:  #ebe2e2;
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
</style>
</head>
<body>
        <form action="p4.php" method="post">
             <div class="container">
        <div class="box">
           <i class="fa-brands fa-google" style="font-size: 100px; color: #5f458a;;"></i><br><br>
           <span class="titlee">BASIC INFORMATION</span><br><br>
  <span class="text">Enter birthday and gender of your child</span>
</div>
<div class="box1">
        <select name="gender" style="width:170px; height:40px;">
        <option disabled selected>Month</option>
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
        </select>
        <input type="text" placeholder="Date" style="width:170px; height:40px;" required>
        <input type="text" placeholder="Year" style="width:170px; height:40px;" required>
        <select name="gender" style="width:530px; height:40px;">
            <option disabled selected> Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
</select>
<br>
    <input type="submit" value="Next">
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
