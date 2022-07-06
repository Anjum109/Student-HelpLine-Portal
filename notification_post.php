<?php
 include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/helpdesk.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>
 



        </header>

    <!-- header ends -->

    <!-- main body starts -->
    <section class="main__body" id="ALL_QUESTION">
     
      <div class="feed">

      <?php 
   
      $id = $_GET['id']; 
      $query=mySQLi_query($dbc,"SELECT * from post LEFT JOIN userinfo on userinfo.id = post.user_id where post_id ='$id'");
			while($row=mySQLi_fetch_array($query)){?>

    
        <!-- post starts -->
        <div class="post">
      
          <div class="post__top">
            <a href="other_user_profile.php?id=<?php echo $row['user_id'];?>"><img
              class="user__avatar post__avatar"
              src="image/<?php echo $row['pic'] ?>"
              alt=""
            /></a>
            <div class="post__topInfo">
              <a style="cursor:pointer;color:black;" href="other_user_profile.php?id=<?php echo $row['user_id'];?>"><h3><?php echo $row['FirstName'] ?>&nbsp;<?php echo $row['LastName'] ?></h3></a>
              <p>Created at :<?php echo $row['created'];?></p>
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
            

            <a href="comment.php?post_id=<?php echo $row['post_id'];?>&id=<?php echo $row['user_id'];?>" class="post__option">
              <span style="color: gray" class="material-icons"> chat_bubble_outline </span>
              <p style="color: gray">View Answer</p>
            </a>

           
          </div>
        </div>
        <!-- post ends -->

        <?php
}?>

    <!-- main body ends -->
</section>
<script src="js/sidebar.js"></script>
  </body>
</html>
