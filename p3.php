<?php
include "db.php";
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
        font-size:15px;
        padding-left:300px;
        padding-top:60px; */
    }
    input[type="submit"] {
      margin-top: 150px;
      padding: 4px 25px;
      margin-left:200px;
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
           <!-- <input type="hidden" name="Lname" value="<?php echo $Lname; ?>"> -->
          <div class="container">
        <div class="box">
           <i class="fa-brands fa-google" style="font-size: 100px; color:  #5f458a;"></i><br><br>
           <span class="titlee">How you'll sign in</span><br><br>
  <span class="text">Create a gamil address for signing in to your google account</span>
</div>
<div class="box1">
    <div style="position: relative; display: inline-block;">
       <input type="text" name="username" id="username" placeholder="Username" style="width:300px; height:40px; padding-right: 90px;" required> 
    <span style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); color: gray;">@gmail.com</span>
    </div>
        <br><br>
        you can use letters,numbers & periods<br>
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
// Get Name from GET or POST (passed from Page 2)
$Namess = $_GET['Name'] ?? $_POST['Name'] ?? '';
 if(isset($_POST['Next'])){
$username = $_POST['username'];
 $full_username = $username . "@gmail.com";
 // Update the username for this user
    $sql = "UPDATE record SET Username='$full_username' WHERE Namess='$Namess'";
    if(mysqli_query($conn, $sql)){
      header("Location: p4.php?Name=".$Namess."&Lname=".$Lname);
        exit;
    } else {
        echo "Error updating username: " . mysqli_error($conn);
    }
}
 ?>
</body>
</html>
