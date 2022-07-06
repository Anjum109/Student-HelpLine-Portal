<?php 

include 'config.php';

if(isset($_SESSION['USER_LOGIN'])){
  $uid=$_SESSION['USER_ID'];}
  else{

    echo"not";
  }
if (isset($_POST["submit"])) {
 
    $file=$_FILES['image']['tmp_name'];
    $image = $_FILES["image"] ["name"];
    
    $size = $_FILES["image"] ["size"];
    $error = $_FILES["image"] ["error"];

  
         
     

        move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
        $location="upload/" . $_FILES["image"]["name"];
        $uid=$_SESSION['USER_ID'];

        $content=$_POST['content'];
        
        
        $update=mysqli_query($dbc," INSERT INTO post (user_id,post_image,content)
        VALUES ('$uid','$location','$content') ");

        
          header('location:my-post.php');
        
        
        }
    
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="css/my-post.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">             
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    

    <!-- main body starts -->
    <div class="main__body">
     

      <!-- feed starts -->
      <div class="feed">
     
        <!-- message sender starts -->
        <div class="messageSender">
       
          <div class="messageSender__top">
          <?php
            $uid=$_SESSION['USER_ID'];
            $query=mySQLi_query($dbc,"SELECT *from userinfo where id='$uid' ");
            while($row=mySQLi_fetch_array($query)){?>
          <img
              class="user__avatar"
              src="image/<?php echo $row['pic'] ?>"
              alt=""
            />
            
            <form method="POST" action=""enctype="multipart/form-data" class ="form">
              <input class="messageSender__input" placeholder="Ask Your Question " type="text" name="content" >
      
          </div>
          <?php
            }?>
          <div class="messageSender__bottom">
            

            <div class="messageSender__option">
              <span style="color: green" class="material-icons"> photo_library </span>&nbsp;

              <div class="file-upload-wrapper" data-text="Add photo">
                  <input name="image" type="file" class="file-upload-field" value=""  >   </div>

                  
            </div>

            <div class="messageSender__option">
              <span style="color: orange" class="material-icons"> </span>
              <button type="submit" name="submit" id="button"style="margin-left:-100px;" >   <i class='fa fa-send green-color'>&nbsp;Post</i>  </button>
            </div>

      </form>


            <div class="messageSender__option">
              <span style="color: gray" class="material-icons"> comment </span>
              <a style="color: gray" href="my_comment.php"><h3>My Comment</h3></a>
            </div>
          </div>
        </div>
        <!-- message sender ends -->


        <!-- user post fetching-->
        <?php 
    

      $query=mySQLi_query($dbc,"SELECT * from post LEFT JOIN userinfo on userinfo.id = post.user_id where user_id='$uid' ORDER BY post_id DESC");
			while($row=mySQLi_fetch_array($query)){?>

    
        <!-- post starts -->
        <div class="post">
      
          <div class="post__top">
         <a id="dlt"  href="delete_mypost.php?post_id=<?php echo $row['post_id'];?>"> <i  data-toggle="tooltip" data-placement="bottom" title="Delete" class="fa fa-times-circle-o" aria-hidden="true"></i></a>
            <img
              class="user__avatar post__avatar"
              src="image/<?php echo $row['pic'] ?>"
              alt=""
            />
            <div class="post__topInfo">
              <h3><?php echo $row['FirstName'] ?>&nbsp;<?php echo $row['LastName'] ?></h3>
              <p> Created at :<?php echo $row['created'];?></p>
            </div>
          </div>

          <div class="post__bottom">
            <p><?php echo $row['content'] ?></p>
          </div>

          <div class="post__image">
            <img
              src="<?php echo $row['post_image']; ?>"
              alt=""
            />
          </div>

          <div class="post__options">
            

          <a href="my_postcomment.php?post_id=<?php echo $row['post_id'];?>" class="post__option">
              <span class="material-icons"> chat_bubble_outline </span>
              <p style="color:gray;">View Answer</p>
            </a>

           
          </div>
        </div>
        <!-- post ends -->

        <?php
}?>


  </body>
</html>
