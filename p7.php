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
           .container {
 background-color: #ebe2e2;
  display: flex;
  width: 1000px;
  height: 450;
  margin-top: 50px;
   margin-left: 150px;
  padding: 90px;
   border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
            input[type="submit"] {
      margin-top: 130px;
      padding: 4px 25px;
      margin-left:480px;
       background-color: #dcc2d3;
      border: 2px solid #671f4b;
    }
            </style>
    </head>
    <body><form method="GET" action="start.php">
    <div class="container">
        <div class="box">
       <i class="fa-regular fa-circle-check" style="font-size: 150px; padding-left:380px; color: blue;"></i><br><br>
        <span class="title" style="font-size:70px; padding:300px; " >Congratulation</span><br>
       <span class="title" style="font-size:40px; padding:370px;"> Email Verified</span><br><br>
        <span class="title" style="font-size:20px; padding:320px;">your email address was successfully verfied.
        <input type="submit" value="Go Back">
</div>
        </div>
</form>
</body>
</html>