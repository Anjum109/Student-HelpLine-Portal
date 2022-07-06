<?php 
include "config.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

       
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


<link rel="stylesheet" href="css/blood_bank.css">
<link rel="stylesheet" href="css/all_donor.css">
<head>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Document</title>
</head>
<body>
<section class="book" id="book">
<Br></Br>
<h1 class="heading">
    <span>A</span>
    <span>L</span>
    <span>L</span>
   
    <span class="space"></span>
    <span>D</span>
    <span>O</span>
    <span>N</span>
    <span>O</span>
    <span>R</span>
</h1>
</section>
<section id="donor">


<div class="content"style="margin-left: 160px;">
<!-- card -->
<?php $records = mysqli_query($dbc,"select * from donor_list");

while($data = mysqli_fetch_array($records)){

?> 

<div class="card" >

<div class="icon"><i class="material-icons md-36">face</i></div>
<p class="title"><?php  echo $data['bloodgroup'];?></p>
<p class="text">Name : <?php  echo $data['dname'];?> </p>
<p class="text">Contact : <?php  echo $data['contact'];?> </p>
<p class="text">Location : <?php  echo $data['location'];?></p>

</div>
<?php
}

?>
<!-- end card -->




</div>

</div>

</section>

</body>
</html>