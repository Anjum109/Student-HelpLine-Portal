
<?php 
include "config.php";?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
    <link rel="stylesheet" href="css/all_blood_request.css">

    <title>Document</title>
<style>

    body{

        background-color: black;
    }
</style>
    
</head>
<body>
    
<section class="book" id="book" >
<br>
<h1 class="heading">
    <span>B</span>
    <span>L</span>
    <span>O</span>
    <span>O</span>
    <span>D</span>
    <span class="space"></span>
    <span>R</span>
    <span>E</span>
    <span>Q</span>
    <span>U</span>
    <span>E</span>
    <span>S</span>
    <span>T</span>
</h1>
</section>
<br><br>

<section id="Request" >
<?php $records = mysqli_query($dbc,"select * from blood_request ");

while($data = mysqli_fetch_array($records)){

?>
<div class="maincontainer">

<div class="back">
    <p>Name : <?php  echo $data['name'];?></p>
    <p>BloodGroup : <?php  echo $data['bloodgroup'];?></p>
    <p>Contact : <?php  echo $data['contact'];?></p>
    <p>Location : <?php  echo $data['location'];?></p>
    <p>Reason : <?php  echo $data['reason'];?></p>
    <p>Date : <?php  echo $data['date'];?></p>

</div>



</div>
<?php
          }

          ?>
</section>
</body>
</html>