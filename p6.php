<?php
include "db.php";
?>
<html>
    <head><title>GOOGLE FORM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
    .title {
  font-family: "Arial", sans-serif;
  font-size: 32px;
  font-weight: bold;
  /* padding: 20; */
}
.text {
  font-family: "Verdana", sans-serif;
  font-size: 15px;
   /* padding: 20; */
}
     .box1{
        /* line-height:4px; */
        padding-left:200px;
        padding-top:60px;
    }
.container{
  background-color: #ebe2e2;
  display: flex;
  width: 1200px;
  height: 450;
  margin-top: 50px;
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
  margin-left: 1100px;
}
 body{
            background: #cfbcbc;
}
 input[type="submit"] {
      margin-top: 80px;
      padding: 4px 25px;
      margin-left:250px;
      background-color: #dcc2d3;
      border: 2px solid #671f4b;
    }
</style> 
</head>
    <body>
        <form action="p7.php" method="post">
             <div class="container">
        <div class="box">
         <i class="fa-brands fa-google" style="font-size: 150px; color: #5f458a;"></i><br><br>
  <span class="title">Verify some info before creating an account</span><br><br>
  <span class="text">Google needs to verify some info about your device or phone number before you can continue.
     This hepls keep you and others safe online by preventing abuse from computer programs or bots.</span>
</div>
     <div class="box1">
        <img src="qr.png" width="150px" ><br><br><br>
      <b><font size="5px">Scan the QR code with your phone</font></b><br><br>
      Open your camera app, scan the code, and tap the link. Then, follow a few more steps on your phone 
      to complete verification. You'll need to switch back to this device to continue.<br><br>
      Scanning the QR code won't associate your device or phone number with the new Google Account.<br>
       <input type="submit" value="Next">
    </div></div>
<select>
    <option>English (United state)</option>
    <option>Hindi</option>
 </select>
 <div class="footer" >
  Help &nbsp; &nbsp; Privacy &nbsp; &nbsp; Terms
</div>
</form>
    </body>
</html>