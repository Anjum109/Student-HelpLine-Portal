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

<link rel="stylesheet" href="css/all_programming_course.css">
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
                    <span>C</span>
                    <span>O</span>
                    <span>U</span>
                    <span>R</span>
                    <span>S</span>
                    <span>E</span>
                    <span>S</span>
                </h1>
</section><br><br>
<section id="donor">



       <?php

$q="select * from programming_languages ";
$query=mysqli_query($dbc,$q);
while ($res=mysqli_fetch_array($query)) {

?>

<div class="c-card">
    <div class="c-imgBox">
      <img src="<?php echo $res['language_image']; ?>" alt="" />
      <img src="<?php echo $res['language_image']; ?>" alt="" />
    </div>
    <div class="c-details">
      <div class="c-content">
        <h2><?php echo $res['language_name']; ?><br><br><a href="course_details_show.php?course_name=<?php echo $res['language_name'] ?>">Start Reading</a></h2>
       
      </div>
    </div>
  </div>



<?php } ?>
        <!-- end card -->
        
     


</section>

</body>
</html>