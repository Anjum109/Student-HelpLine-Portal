<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

video{

    box-shadow: 10px 20px 40px rgba(0, 0, 0, 0.25);
    border:.5px solid gray;
    margin-top:50px;
}
</style>
</head>
<body>
<?php

include ('config.php');
$id=$_GET['id'];
$sql = "select * from videos where id='$id' ";
$res = mysqli_query($dbc,$sql);



while ($row = mysqli_fetch_assoc($res)) {

 
    $id = $row['id'];
    $name= $row['name'];
    $poster =$row['poster'];   
    $content=$row['content'];  
?>

<div class="col-md-4">
<h2  style="margin-left:580px;margin-bottom:-10px;"><?php echo $row['content']; ?></h2>
<video poster="uploadimg/<?php echo $poster; ?>"  width="715" height="415" controls style=" margin-left:300px; ">
    <source src="videos/<?php echo $name; ?>" type="video/mp4">

    
</video>
<?php }?>
</div>
</body>
</html>









