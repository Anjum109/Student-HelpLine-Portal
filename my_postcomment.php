<?php 

include 'config.php';

if(isset($_SESSION['USER_LOGIN'])){
  $uid=$_SESSION['USER_ID'];

  $query=mySQLi_query($dbc,"SELECT * from userinfo  where id='$uid'");
  while($row=mySQLi_fetch_array($query)){
    
    $FirstName=$row['FirstName'];
    $LastName=$row['LastName'];
    $pic=$row['pic'];
    
  }


}
  else{

    echo"not";
  }
if (isset($_POST["submit"])) {
  if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
    }else{
    $file=$_FILES['image']['tmp_name'];
    $image = $_FILES["image"] ["name"];
    
    $size = $_FILES["image"] ["size"];
    $error = $_FILES["image"] ["error"];

  
         
     

        move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
        $location="upload/" . $_FILES["image"]["name"];
        $uid=$_SESSION['USER_ID'];
        $comment=$_POST['comment'];
        $post_id=$_GET['post_id'];
        $FirstName=$FirstName;
        $LastName=$LastName;
        $pic= $pic;
        $update=" INSERT INTO  comments (post_id,user_id,comment,image,FirstName,LastName,pic)
        VALUES ('$post_id','$uid','$comment','$location','$FirstName','$LastName','$pic') ";
$result = $dbc->query($update);
if ($result) {
	?>
	   
	   
	   <script>
   setTimeout(function() {
	swal({
		title: "Successfully Send",
		text: "",
		type: "success"
	}, function() {
		window.location = "helpdesk.php"; 
	});
}, 1000);
</script>
<?php	   
}  
  }  }
    
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
<form  method="POST" action=""enctype="multipart/form-data">			
			

			<textarea  name="comment" placeholder="Write a comment..." class="comment-text"></textarea>
			<div class="messageSender__option">
              <span style="color: gray" class="material-icons">  </span>

			  <span class="btn btn-default btn-file">
			  <i class="fas fa-images"></i> <input type="file" name="image">
</span>
            </div>
			<button type="submit" name="submit"  id="btn-comment"> Enter</button>
			
			
		</form>
        <?php 
        $post_id=$_GET['post_id'];
		$sql= "SELECT * FROM comments where  post_id='$post_id' ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){
            ?>
           <p> <?php echo '<p style="margin-left:1100px; font-size:20px;" ><b>Total Comment &nbsp;( '.$data.' )</p>';?></b></p>
            <?php    
        
        }
			?>
		<?php
$post_id=$_GET['post_id'];
		$query=mySQLi_query($dbc,"SELECT * from comments  where post_id='$post_id' ");
			while($row=mySQLi_fetch_array($query)){?>
		<div class="prev-comments" >
	
			<div class="single-item">
			<div class="comment__top">
            <a style="color: gray" id="dlt"  href="delete_mypost_comment.php?comment_id=<?php echo $row['comment_id'];?>"> <i  data-toggle="tooltip" data-placement="bottom" title="Delete" class="fa fa-times-circle-o" aria-hidden="true"></i></a>
            <a style="cursor:pointer;color:black; text-decoration:none;" href="other_user_profile.php?id=<?php echo $row['user_id'];?>"><img
              class="user__avatar post__avatar"
              src="image/<?php echo $row['pic']; ?>"
              alt=""
            /></a>
          </div>

          <a style="cursor:pointer;color:black; text-decoration:none;" href="other_user_profile.php?id=<?php echo $row['user_id'];?>">	<h4><?php echo $row['FirstName']; ?>&nbsp;<?php echo $row['LastName']; ?>&nbsp;<span style="color:rgb(56, 54, 54);font-size:15px; margin-top:6px;margin-left:2px;">(<?php echo $row['profession']?>)</span></h4></a>
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
			

		

			
	