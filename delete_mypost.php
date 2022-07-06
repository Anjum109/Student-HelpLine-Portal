<?php


    
    include "config.php";
    
    $post_id = $_GET['post_id'];
        $sql ="DELETE FROM post WHERE post_id= $post_id ";
        $res = mysqli_query($dbc,$sql);
    
            
            if($res){
                ?>
	   
	   
                <script>
            setTimeout(function() {
             swal({
                 title: "Deleted",
                 text: "",
                 type: "success"
             }, function() {
                 window.location = "my-post.php"; 
             });
         }, 1000);
         </script>
         <?php	 
    
            
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/wishback.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <title>Document</title>
</head>
<body>
<div class="container" >
	<div class="content">

	<img src="image/hd.png"; >
	</div>
</div>
</body>
</html>