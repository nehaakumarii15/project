<?php
include "db.php";

 if(isset($_POST['Remove'])){
 $Email = $_POST['Remove'];
    $result = mysqli_query($conn,"SELECT Email FROM record");
    $ress=mysqli_query($conn, " DELETE FROM record WHERE Email='$Email'");
 }
?>
<html>
    <head>
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
  margin-left: 1100px;
}
button{
    height:60px;
    width:350px;
    font-size:15px;
     background-color: #f7eaf0;
      border-radius: 8px;
      border-color: #e7bcd1;
}
.box{
width:50%;
text-align:left;
}
.box1{
width:50%;
text-align:right;
}
a{
  color:black;
  text-decoration:none;
}
            </style>
    </head>
    <body>
        <form action="" method="post">
             <div class="container">
        <div class="box">
           <i class="fa-brands fa-google" style="font-size: 100px; color: #5f458a;"></i><br><br>
  <span class="title">Choose an Account</span><br><br>
</div>
<div class="box1">
  <?php
while($row=mysqli_fetch_assoc($result)){
?>
   <button name="mail" value="<?php echo $row['Email']; ?>">
   <?php echo $row['Email']; ?>
</button>
   <?php
}
while($row=mysqli_fetch_assoc($ress)){
?>
   <button name="mail" value="">Remove Account
</button>
<?php
}
?>
</div>
     </div> 
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