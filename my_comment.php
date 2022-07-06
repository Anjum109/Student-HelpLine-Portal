<?php 

include 'config.php';

if(isset($_SESSION['USER_LOGIN'])){
  $uid=$_SESSION['USER_ID'];

  }


    
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/comment.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">             
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">             
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<title>Document</title>
</head>
<body>
<?php 
		$sql= "SELECT * FROM comments where user_id='$uid' ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){
            ?>
           <p> <?php echo '<p style="margin-left:1100px; font-size:20px;" ><b>Total Comment &nbsp;( '.$data.' )</p>';?></b></p>
            <?php    
        
        }
			?>


		<?php
 $uid=$_SESSION['USER_ID'];
		$query=mySQLi_query($dbc,"SELECT * from comments  where user_id='$uid' ");
			while($row=mySQLi_fetch_array($query)){?>
		<div class="prev-comments" >
	
			<div class="single-item">
			<div class="comment__top">
            <a style="color: gray" id="dlt"  href="delete_mypost_comment.php?comment_id=<?php echo $row['comment_id'];?>"> <i  data-toggle="tooltip" data-placement="bottom" title="Delete" class="fa fa-times-circle-o" aria-hidden="true"></i></a>
            <img
              class="user__avatar post__avatar"
              src="image/<?php echo $row['pic']; ?>"
              alt=""
            />
          </div>

				<h4><?php echo $row['FirstName']; ?>&nbsp;<?php echo $row['LastName']; ?></h4>
				<span>created at: <?php echo $row['created']; ?></span>
				<p><?php echo $row['comment']; ?></p>
				<div class="post__image">
            <img
              src="<?php echo $row['image']; ?>"
              alt=""
            />
          </div>
			</div>
		
		</div>
		
<?php
}
?>

</body>
</html>
			

		

			
	