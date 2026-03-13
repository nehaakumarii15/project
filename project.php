<?php
include "db.php";
// Get Name from GET or POST (passed from Page 2)
$Namess = $_GET['Name'] ?? $_POST['Name'] ?? '';
$Lname = $_GET['Lname'] ?? $_POST['Lname'] ?? '';
 if(isset($_POST['Next'])){
//  $Email = $_POST['Email'];
// $password = $_POST['password'];
$Usernam = $_POST['username'];
$sql = "SELECT * FROM record WHERE username='$Username'"; 
// $sql = "SELECT * FROM record WHERE Email='$Email'"; 
//  AND Password='$assword'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
     header("Location: xyz.php?Name=".$Namess."&Lname=".$Lname);
}
else{
    echo "Invalid email";
}
 }
?>
<html>
    <head><title>GOOGLE FORM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
<style>
  body{
            background: #cfbcbc;
}
a{
  color:blue;
  text-decoration:none;
}
    .title {
  font-family: "Arial", sans-serif;
  font-size: 30px;
  font-weight: bold;
  white-space:nowrap;
  /* padding: 10; */
}

.text {
  font-family: "Verdana", sans-serif;
  font-size: 13px;
  white-space:nowrap;
   /* padding: 10; */
}

     .box1{
        font-size:20px;
        line-height:2;
        padding-left:350px;
    }
     
    input[type="text"] {
      padding: 8px;
      width: 500px;
      height: 40px;
      margin-bottom: 10px;
      border: 2px solid #671f4b;
    }

    input[type="submit"] {
      margin-top: 80px;
      padding: 4px 25px;
      margin-left:300px;
      background-color: #dcc2d3;
      border: 2px solid #671f4b;
    }
.container{
  background-color: #ebe2e2;
  display: flex;
  width: 1200px;
  height: 250px;
  margin-top: 100px;
   margin-left: 40px;
  padding: 90px;
   border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
.dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-btn {
    background-color: #42eef4;
    padding: 10px 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 6px;
  }

  .dropdown-content {
  position: absolute;
    display: none;
    position: absolute;
    min-width: 220px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    border-radius: 6px;
    overflow: hidden;
    background: #dcc2d3;
  }

  .dropdown-content a {
    display: block;
    padding: 10px 14px;
    text-decoration: none;
    color: black; 
  }

  /* .dropdown-content a:hover {
    background-color: #f1e8e8;
  } */

  .dropdown:hover .dropdown-content {
    display: block;
  } 
select{
    margin-top:40px;
    margin-left:90px;
     font-size: 14px;
     background-color: #dcc2d3;
}
.footer{
   margin-left: 900px;
    font-size: 17px;
}
</style> 
</head>
    <body>
        <form action="" method="post">
          <input type="hidden" name="Name" value="<?php echo $Namess; ?>">
    <input type="hidden" name="Lname" value="<?php echo $Lname; ?>">
             <div class="container">
        <div class="box">
          <i class="fa-brands fa-google" style="font-size: 100px; color:  #5f458a;"></i><br><br>
  <span class="title">SIGN IN</span><br><br>
  <span class="text">Use your Google Account</span>
</div>
     <div class="box1">
        <input type="text" name="Email" placeholder="EMAIL" required><br>
    <a href="ab.php">Forgot email?</a><br><br>
    Not your computer? Use guest mode to sign in privately.
    <a href="ab.php">Learn more about using guest mode</a><br>

     <div class="dropdown">
  <button class="create account" style="background-color:#dcc2d3; height:25px; border:2px solid #671f4b;" >Create Account </button>
  <div class="dropdown-content">
    <a href="p1.php">For my personal use</a>
    <a href="child.php">For my child</a>
    <a href="business.php">For work or my business</a>
  </div>
    <input type="submit" name="Next" value="Next">
</div></div></div>
<select >
    <option>English (United state)</option>
    <option>Hindi</option>
 </select>
 <div class="footer">
  Help &nbsp; &nbsp; Privacy &nbsp; &nbsp; Terms
</div>
</form>
    </body>
</html>