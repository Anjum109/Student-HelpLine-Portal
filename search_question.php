<?php 
include "config.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   

    
    <link rel="stylesheet" href="css/search_question.css">
 
<style> 
.post {
  width: 900px;
  margin-top: 15px;
  border-radius: 15px;
  background-color: white;
  box-shadow: 0px 5px 7px -7px rgba(0, 0, 0, 0.75);
}

.post__image img {
  width: 400px;
  padding: 19px;
  padding-top: 30px;
}

.post__bottom {
      margin-top: -30px;
  margin-bottom:-50px;
  padding: 25px 30px;
    }</style>
</head>
<body>


<div class="heading">
<span class="s">S</span>
    <span class="s" >E</span>
    <span class="s" >A</span>

    <span class="s">R</span>
    <span class="s">C</span>
    <span class="s">H</span>
    <span class="space"></span>
    <span class="s">Q</span>
    <span class="s">U</span>
    <span class="s">E</span>
    <span class="s">S</span>
    <span class="s">T</span>
    <span class="s">I</span>
    <span class="s">O</span>
    <span class="s">N</span>
</div>
<form action="" method="GET">
<div class="wrapper">
	<div class="search_box">
		<button type="submit" class="search_btn"><i class="fas fa-search"></i></button>
		<input type="text" class="input_search" placeholder="Search Here ... "name="content" value="<?php if(isset($_GET['content'])){echo $_GET['content'];} ?>">
	</div>
</div>
</form>





<section class="main__body" id="ALL_QUESTION">
     
      <div class="feed">
                        
                                <?php 
                               
                             

                                    if(isset($_GET['content']))
                                    {
                                        $content = $_GET['content'];

                                        $query = "SELECT * FROM post LEFT JOIN userinfo on userinfo.id = post.user_id WHERE content LIKE '%{$content}%'";
                                        $query_run = mysqli_query($dbc, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
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
      <a href="comment.php?post_id=<?php echo $row['post_id'];?>" class="post__option">
              <span style="color: gray" class="material-icons"> chat_bubble_outline </span>
              <p style="color: gray">View Answer</p>
            </a>

      
       
      </div>
    </div>
    <!-- post ends -->

                                              <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>


    



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->










<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/library.js"></script>

</body>
</html>