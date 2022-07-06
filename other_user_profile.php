<?php
include 'config.php';

error_reporting(0);
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="CSS/user_profile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=3d-float">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    
</head>


<body >


 <div class="back">
 
 
      <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
   
<?php 
$id=$_GET['id'];

$sql=mysqli_query($dbc, "SELECT * FROM userinfo where id='$id'; "); 
while($row = mysqli_fetch_array($sql)){
  
  ?> 




<div class="card">
<h2 class="font-effect-3d-float"> Profile Information </h2>




<?php

echo " <div class='card-img'>
 <img  src='image/".$_SESSION['pic']."', style='width:100px; height: 86%;border-radius: 50%;	margin-left: 8%;	margin-top: 7%;
 ' > </div>";
?>
      
     

      <div class="profile_bar">
        <ul>
        <li><b>First Name :</b> <?php echo $row['FirstName'];?></li>
            <li><b>Last Name :</b> <?php echo $row['LastName'];?></li>
            <li><b>Email :</b> <?php echo $row['Useremail'];?></li>
            <li><b>Profession :</b> <?php echo $row['profession'];?></li>
            <li>Gender : <?php echo $row['Gender'];?></li>
            <li>BloodGroup : <?php echo $row['BloodGroup'];?></li>
            
            
        </ul>
    </div>
    </div>
    </div>
   <?php }?>
</body>
 
</html>