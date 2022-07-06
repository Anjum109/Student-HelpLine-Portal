<?php


    
    include "config.php";
    
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <link rel="stylesheet" href="CSS/wishback.css">
        <title>Document</title>
    </head>
    <body>


    <div class="container" >
	<div class="content">

	<img src="image/bookback.png"; >
	</div>
</div>
    <?php
   
  
       $id = $_GET['id'];
   
       $query = "DELETE FROM wishlist WHERE id='$id'";
       $query_run = mysqli_query($dbc, $query);
   
       if($query_run)
       {
    ?>
           
	 <script>
       setTimeout(function() {
        swal({
            title: "deleted",
            text: "Successfully",
            type: "success"
        }, function() {
            window.location = "wishlist.php"; 
        });
    }, 1000);
</script>







<?php
			} 
            else {
                echo '<script type="text/javascript">';
                    echo 'setTimeout(function () { sweetAlert("<b>Oops...","Not approve!...</b>","error");';
                    echo '}, 500);</script>';
            }
		
                  	
        
?>
</body>
    </html>