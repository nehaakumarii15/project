<?php
include "db.php";
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
<style>
    .titlee{
  font-family: "Arial";
  font-size: 25px;
  font-weight: bold;
  white-space:nowrap;
}
 .text {
  font-family: "Verdana", sans-serif;
  font-size: 15px;
  white-space:nowrap;
} 
     .box1{ 
        font-size:15px;
        padding-left:200px;
        padding-top:60px; */
    }
    input[type="submit"] {
      margin-top: 110px;
      padding: 4px 25px;
      margin-left:200px;
       background-color: #dcc2d3;
      border: 2px solid #671f4b;
    }
.container{
  background-color:  #ebe2e2;
  display: flex;
  width: 1200px;
  height: 280;
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
             <div class="container">
        <div class="box">
           <i class="fa-brands fa-google" style="font-size: 100px; color:  #5f458a;"></i><br><br>
           <span class="titlee">Create a strong password</span><br><br>
  <span class="text">Create a strong password with a mix of letters,numbers and symbols</span>
</div>
<div class="box1">
  <?php
    if(isset($_POST['Next']) && $_POST['password'] !== $_POST['confirm_password']){
        echo '<div style="color:red; font-weight:bold; margin-bottom:15px;">Passwords do not match!</div>';
    }
    ?>
        <input type="password" name="password" id="password" placeholder="password" style="width:500px; height:40px;" required><br><br>
        <input type="password" name="confirm_password"  id="confirm_password" placeholder="confirm" style="width:500px; height:40px;" required><br><br>
        <input type="checkbox" onclick="togglePassword()"> show password<br>
        <script>
function togglePassword() {
  var pass = document.getElementById("password");
  var confirmPass = document.getElementById("confirm_password");

  if (pass.type === "password") {
    pass.type = "text";
    confirmPass.type = "text";
  } else {
    pass.type = "password";
    confirmPass.type = "password";
  }
}
</script>

    <input type="submit" name=" Next" value="Next">
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
$Namess = $_GET['Name'] ?? $_POST['Name'] ?? '';
 if(isset($_POST['Next'])){
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
if($password !== $confirm_password){
      // echo "Passwords do not match!";
       exit;
    }
$sql = "UPDATE record SET Pin='$password' WHERE Namess='$Namess'";
if(mysqli_query($conn, $sql)){
      header("Location: p6.php?Name=".$Namess."&Lname=".$Lname);
    } else {
        echo "Error updating password: " . mysqli_error($conn);
    }
}
 ?>
</body>
</html>
