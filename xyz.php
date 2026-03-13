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
.box{
    width:50%;
    text-align:left;
    
}
     .box1{ 
        font-size:15px;
        /* padding-left:200px; */
        padding-top:60px; 
        width: 50%;
        text-align:right;
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
          <?php if($wrong_password): ?>
    <p style="color:red; margin-left:200px;">Wrong password</p>
<?php endif; ?>
          <input type="hidden" name="Name" value="<?php echo $Namess; ?>">
    <input type="hidden" name="Lname" value="<?php echo $Lname; ?>">
             <div class="container">
        <div class="box">
           <i class="fa-brands fa-google" style="font-size: 100px; color:  #5f458a;"></i><br><br>
           <span class="titlee">Sign in</span><br><br>
  <span class="text">Enter your password</span>
</div>
<div class="box1">
        <input type="password" name="Password" id="Password" placeholder="Password" style="width:500px; height:40px;" required><br><br>
        <input type="checkbox" onclick="togglePassword()"> show password<br>
        <script>
    function togglePassword() {
        var pass = document.getElementById("Password");
        if (pass.type === "password") {
            pass.type = "text";
        } else {
            pass.type = "password";
        }
    }
    </script>

    <input type="submit" name="Next" value="Next">
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
include "db.php";

$Namess = $_GET['Name'] ?? $_POST['Name'] ?? '';
$Lname = $_GET['Lname'] ?? $_POST['Lname'] ?? '';
 $wrong_password = false;
if(isset($_POST['Next'])){

    $Pin = $_POST['Password'];
    $sql = "SELECT * FROM record WHERE Pin='$Pin'";
    $result = mysqli_query($conn, $sql);

    // if(!$result){
    //     die("Query failed: " . mysqli_error($conn));
    // }

    if(mysqli_num_rows($result) > 0){
        // Correct PIN → redirect
        header("Location: p6.php?Name=".$Namess."&Lname=".$Lname);
        exit();
    } else{
        // Wrong password → set flag to true
        $wrong_password = true;
    }
}
?>
</body>
</html>
