<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
    <?php
    include 'config.php';
$id = $_GET['id'];

$sql = "UPDATE admininfo SET status ='yes' where id=$id ";
        $res = mysqli_query($dbc, $sql);
       
        if ($res) {
           ?>
           
	 <script>
       setTimeout(function() {
        swal({
            title: "approved",
            text: "Successfully",
            type: "success"
        }, function() {
            window.location = "admin_status.php"; 
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
