<?php
include "db.php";
?>
<html>
    <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
      <link rel="stylesheet" href="pre.css">
        <style>
          body{
            background: #a19090;
  height: 100vh;
  display: flex;
  justify-content: center; 
  align-items: center;  
}
a{
  color:black;
  text-decoration:none;
}
            .container{
  background-color: #eae1e1;
  width: 700px;
  height: 600;
  padding-top: 90px;
   padding-left: 40px; 
   border-radius: 8px;
  box-shadow: 0 4px 10px rgba(93, 22, 22, 0.1);
}
.circle{
  width: 200px;
  height: 200px;
  border-radius: 50%;
   object-fit: cover;
}
.box{
  background-color: white;
  border-radius: 50px 50px 50px 50px;
  width: 230px;
  height: 30px;
  margin-bottom:8px;
   margin-left: 200px;
   padding-top:20px;
   padding-left:25px;
   padding-bottom:5px;
}
.box1{
  background-color: white;
  border-radius: 50px 50px 0 0;
  width: 630px;
  height: 30px;
  margin-bottom:2px;
   padding-left: 40px;
   padding-top:20px;
}
.box2{
  background-color: white;
  width: 630px;
  height: 30px;
  padding-top:20px;
  margin-top:2px;
   margin-bottom:2px;
  padding-left:40px;
}
.box3{
  background-color: white;
  width: 630px;
  height: 30px;
  padding-top:20px;
  margin-top:2px;
   margin-bottom:2px;
  padding-left:40px;
}
.box4{
  background-color: white;
  border-radius: 0px 0px 50px 50px;
  width: 630px;
  height: 30px;
  margin-bottom:2px;
  margin-top:2px;
   padding-left: 40px;
   padding-top:20px;
}
</style>
</head>
<body>
    <form method="post" action="project.php">
        <div class="container">
          <center> <img src="unknown.jpeg" class="circle"><br></center><br><br>
           <div class="box">
            <a href="project.php"> Manage your google account</a></div> 
            <div class="box1">&nbsp; &nbsp; &nbsp; &nbsp;
            Switch account</div>
            <div class="box2"> &nbsp; &nbsp; &nbsp; &nbsp; <a href="exist1.php">exist account</a>
            </div>
            <div class="box3">
            <i class="fa-solid fa-plus"></i> &nbsp; &nbsp; <a href="project.php">Add another account</a>
            </div>
            <div class="box4"> 
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              &nbsp; &nbsp; <a href="signout1.php"> Sign out of all accounts </a></div>
</div>
</form>
</body>
    </html>