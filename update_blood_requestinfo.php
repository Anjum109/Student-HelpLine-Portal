<?php 
include "config.php";

//"UPDATE userinfo SET  id=$idu , FirstName ='$FirstName',

    
    $ID=$_GET['id'];
    $query = "UPDATE blood_request SET complete='done' where  id='$ID' AND complete='not done'";
    $query_run = mysqli_query($dbc, $query);

    if($query_run)
    {
        ?>

            <script type="text/javascript">alert('done');
            window.location="my_blood_request.php";
            </script>

    }
    <?php
    }







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
    <title>Document</title>
</head>
<body>
    
</body>
</html>
