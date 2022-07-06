<?php 
include "config.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  




<link rel="stylesheet" href="css/all_video.css">
<head>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Document</title>
</head>
<body>
<section class="book" id="book">
<Br></Br>
<h1 class="heading">
                    
                   
                    <span>O</span>
                    <span>T</span>
                    <span>H</span>
                    <span>E</span>
                    <span>R</span>
                    <span class="space"></span>
                    <span>V</span>
                    <span>I</span>
                    <span>D</span>
                    <span>E</span>
                    <span>O</span>
                   
                    <span>S</span>
                </h1>
</section><br><br>

<section id="Request">

<div class="v-container">
<?php $q="select * from videos where category='other'";
 $query=mysqli_query($dbc,$q);
 while ($res=mysqli_fetch_array($query)) {
 
 ?>
 
            <div class="v-box">
                <div class="v-imgBox">
                    <img src="uploadimg/<?php echo $res['poster']; ?>">
                </div>
                <div class="content">
                    <h2><?php echo $res['content']; ?></br>
                    <a href="watch_video.php?id=<?php echo $res['id']; ?>">Watch</a></h2>
                </div>
            </div>
            
        
<?php
              }

              ?>
</div>

</section>
</body>
</html>