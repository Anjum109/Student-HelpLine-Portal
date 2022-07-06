<?php
require('config.php');


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
<body >


<div class="container" >
	<div class="content">

	<img src="image/bookback.png"; >
	</div>
</div>
<?php
   
  

   $bid=$_GET['id'];


   if(isset($_SESSION['USER_LOGIN'])){
	   $uid=$_SESSION['USER_ID'];
	   if(mysqli_num_rows(mysqli_query($dbc,"select * from wishlist where user_id='$uid' and book_id='$bid'"))>0){
?>
	   
 <script >
   setTimeout(function() {
	swal({
		title: "oops",
		text: "Already Added in your BookList",
		type: "error"
	}, function() {
		window.location = "wishlist.php"; 
	});
}, 1000);
</script>

<?php
		} 
		else {
			mysqli_query($dbc,"insert into wishlist(user_id,book_id) values('$uid','$bid')");
			?>
	   
 <script>
   setTimeout(function() {
	swal({
		title: "wow",
		text: "Successfully Added in your BookList",
		type: "success"
	}, function() {
		window.location = "wishlist.php"; 
	});
}, 1000);
</script>

<?php
			
		}
	}		  
	
?>

</body>
</html>