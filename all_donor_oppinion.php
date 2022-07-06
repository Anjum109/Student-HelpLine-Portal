<?php 
include "config.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blood_bank.css">
    <title>Document</title>
</head>
<body>
<section class="book" id="op">
<br>
<h1 class="heading">
    <span>D</span>
    <span>O</span>
    <span>N</span>
    <span>O</span>
    <span>R</span>
    <span class="space"></span>
    <span>O</span>
    <span>P</span>
    
    <span>I</span>
    <span>N</span>
    <span>I</span>
    <span>O</span>
    <span>N</span>
</h1>
</section>


<section >

<?php $records = mysqli_query($dbc,"select * from donor_oppinion ");

while($data = mysqli_fetch_array($records)){

?> 

<div class="donor-op">


    <div class="op-card">



      <div class="layer">
        
      </div>
   

      <div class="op-content">
        <p id="op-text"><b>“</b><?php echo $data['oppinion'];?><b>” </b></p>
        <div class="op-image">
          <img  width="100px" src="image/dpuser.png" alt="">
          
        </div>
        <div class="details">
          <h2> <br> <span><?php  echo $data['name'];?></span></h2>
        </div>
      </div>
    </div>
  </div>
  
  <?php
}

?>
 
</section>
</body>
</html>