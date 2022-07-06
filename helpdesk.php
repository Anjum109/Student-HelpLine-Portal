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
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
            <div class="header-2">
                <nav class="navbar">
                    
            
            <div class="nav-container">
                <ul class="menu">
                <li style="border:none"><img id="main-logo" src="image/sp.png" alt="" style="width:100px;height:
                37px;  margin-left:-110px; padding-top:4px;"/></li>
                   <li style="margin-left:150px;"> <a href="search_question.php">SEARCH QUESTION</a></li>
                   <?php 
       $uid=$_SESSION['USER_ID'];

      
		$ql= "SELECT * FROM comments WHERE p_user='$uid'AND seen='not remove'";
		$res = mysqli_query($dbc,$ql);
		if($data = mysqli_num_rows($res)){
            ?>
                   <li><a>NOTIFICATION <?php echo '<sup> '.$data.'</sup> ';?></a>
                   <?php    
        
      }else{ ?>
        <li><a>NOTIFICATION <sup> 0</sup></a>
        <?php 
      }
      ?>  
                   <ul  ><?php 

$uid=$_SESSION['USER_ID'];


$sql = mysqli_query($dbc,"SELECT * FROM comments WHERE p_user='$uid' AND seen='not remove'");
while($data = mysqli_fetch_array($sql)){?>
                                    <li>
                                        <a href="notification_post.php?id=<?php echo $data['post_id'] ?>"  ><i class="fa fa-bell" aria-hidden="true"></i><b>&nbsp;You have a comment on your post!   </b><a id="ad"style="height: 40px;" href ="update_comment_notification.php?id=<?php echo $data['comment_id'] ?>"><i  class="fa fa-window-close" aria-hidden="true"></i></a></a>
                                    </li>
                                   
                                    <?php } ?>
                                </ul>

                                </li>



                    <li><a href="my-post.php"> ASK QUESTION</a></li>
                    <li> <a href="#ALL_QUESTION">ALL QUESTION</a></li>
                </ul>
            </div>
                    
                   
                   
                  
                </nav>




      
            </div>


            <div class="nav-header">
        <i  class="fa fa-bars"></i>
    </div>

    <div class="sidebar ">
    <?php
            $uid=$_SESSION['USER_ID'];
            $query=mySQLi_query($dbc,"SELECT *from userinfo where id='$uid'");
            while($row=mySQLi_fetch_array($query)){?>
        <div class="post__top2">
            <img
              class="user__avatar2 post__avatar2"
              src="image/<?php echo $row['pic'] ?>"
              alt=""
            />
        
        <h2 id="h2"><?php echo $row['FirstName'] ?>&nbsp;<?php echo $row['LastName'] ?></h2><?php } ?>
      </div><br>
        <ul class="menu2">
            <li><a href="profile.php">PROFILE</a></li>
            <li><a href="task_manager.php">TASK MANAGER</a></li>
            <li><a href="skill_devolopment.php">SKILL DEVOLOP</a></li>
            <li><a href="library.php">LIBRARY</a></li>
            <li><a href="blood_bank.php">BLOOD BANK</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
            <li><a href="show_rating.php">RATE US</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
        </ul>

       
    </div>




        </header>

    <!-- header ends -->

    <!-- main body starts -->
    <section class="main__body" id="ALL_QUESTION" >
     
      <div class="feed">

      <?php 
   

      $query=mySQLi_query($dbc,"SELECT * from post LEFT JOIN userinfo on userinfo.id = post.user_id order by post_id DESC");
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
              <a style="cursor:pointer;color:black;" href="other_user_profile.php?id=<?php echo $row['user_id'];?>"><h3><?php echo $row['FirstName'] ?>&nbsp;<?php echo $row['LastName']  ?> &nbsp;<span style="color:rgb(56, 54, 54);font-size:15px;">(<?php echo $row['profession']?>)</span></h3></a>
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
