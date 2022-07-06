<?php 
include "config.php";?>





<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">


        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <!--===main Css-->
                <link rel="stylesheet" href="css/skill_devolopment.css">
       
        <head>
            <link rel="stylesheet"
                  href="https://fonts.googleapis.com/css?family=Tangerine">

        <title>student helpline</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <div class="header-2">
                <nav class="navbar">
                    
            
            <div class="nav-container">
                <ul class="menu">
              
        
                  
        
        
                   <li style="margin-right:200px;"><a href="#about">QUIZ</a> </li>
                   
                    </li>

                    
                   <li><a href="#Request"> VIDEO TUTORIAL</a>
                </li>
                <li><a href="#">VIDEO CATEGORY</a> 
                <ul>
                    <li>
                        <a href="java_video.php"><b>JAVA</b></a>
                    </li>
                    <li>
                        <a href="python_video.php"><b>PYTHON</b></a>
                    </li>
                    <li>
                        <a href="html_video.php"><b>HTML</b></a>
                    </li>
                    <li>
                        <a href="php_video.php"><b>PHP</b></a>
                    </li>
                    <li>
                        <a href="android_video.php"><b>ANDROID</b></a>
                    </li>
                    <li>
                        <a href="other_video.php"><b>Other</b></a>
                    </li>
                    


                </ul>
            </li>
                    <li> <a href="#c">COURSES</a>
                
                  
                
                
                </li>
                    <li> <a href="helpdesk.php">HOME</a> 
                </li>
                <img id="main-logo" src="image/sp.png" alt="" style="width:100px;height:
                37px;   padding-top:4px;"/>
                </ul>
            </div>
                     
                </nav>
            </div>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="image/skill.jpg" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                           WELCOME TO SKILL DEVELOPMENT SECTION
                        </h1><br>
                        <span class="font-effect-3d-float"style="margin-left:-40px ;">
                            Here you will found several things for better study... 
                        </span>
                        
                    </div>

                   
                </div>
            </section><br><br>
             <!--==================== donor ====================-->
             <section class="book" id="book">

                <h1 class="heading">
                    <span>C</span>
                    <span>O</span>
                    <span>U</span>
                    <span>R</span>
                    <span>S</span>  
                    <span>E</span>
                    <span>S</span>
                  
                </h1>
                </section><br><br>

<section id="c">
   
        <!-- card -->
        <?php 
 $q="select * from programming_languages where id='14'";
 $query=mysqli_query($dbc,$q);
 while ($res=mysqli_fetch_array($query)) {
 
 ?>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
<div class="c-card">
    <div class="c-imgBox">
      <img src="<?php echo $res['language_image']; ?>" alt="" />
      <img src="<?php echo $res['language_image']; ?>" alt="" />
    </div>
    <div class="c-details">
      <div class="c-content">
        <h2><?php echo $res['language_name']; ?><br><br><a href="course_details_show.php?course_name=<?php echo $res['language_name'] ?>">Start Reading</a></h2><br>
        <a class="a" href="java_quiz.php?course_name=<?php echo $res['language_name'] ?>">test your skill</a>
       
      </div>
    </div>
  </div>
        <?php
              }

            ?>
        <!-- end card -->
        
     
        <?php 
 $q="select * from programming_languages where id='15'";
 $query=mysqli_query($dbc,$q);
 while ($res=mysqli_fetch_array($query)) {
 
 ?>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
<div class="c-card">
    <div class="c-imgBox">
      <img src="<?php echo $res['language_image']; ?>" alt="" />
      <img src="<?php echo $res['language_image']; ?>" alt="" />
    </div>
    <div class="c-details">
      <div class="c-content">
        <h2><?php echo $res['language_name']; ?><br><br><a href="course_details_show.php?course_name=<?php echo $res['language_name'] ?>">Start Reading</a></h2><br>
        <a class="a" href="php_quiz.php?course_name=<?php echo $res['language_name'] ?>">test your skill</a>
       
      </div>
    </div>
  </div>
        <?php
              }

            ?>
        <!-- end card -->
     
     
        <?php 
 $q="select * from programming_languages where id='16'";
 $query=mysqli_query($dbc,$q);
 while ($res=mysqli_fetch_array($query)) {
 
 ?>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
<div class="c-card">
    <div class="c-imgBox">
      <img src="<?php echo $res['language_image']; ?>" alt="" />
      <img src="<?php echo $res['language_image']; ?>" alt="" />
    </div>
    <div class="c-details">
      <div class="c-content">
        <h2><?php echo $res['language_name']; ?><br><br><a href="course_details_show.php?course_name=<?php echo $res['language_name'] ?>">Start Reading</a></h2><br>
        <a class="a" href="html_quiz.php?course_name=<?php echo $res['language_name'] ?>">test your skill</a>
       
      </div>
    </div>
  </div>
        <?php
              }

            ?>
        <!-- end card -->

</section>


<div >
<a href="all_programming_course.php" style="margin-left:600px;"class="bttn-def" id="viewall"><span>View All</span></a>
</div>

<section class="book" id="book">

    <h1 class="heading">
        <span>V</span>
        <span>I</span>
        <span>D</span>
        <span>E</span>
        <span>O</span>
        <span class="space"></span>
        <span>T</span>
        <span>U</span>
        <span>T</span>
        <span>O</span>
        <span>R</span>
        <span>I</span>
        <span>A</span>
        <span>L</span>
    </h1>
    </section>
    <br><br>

<section id="Request">

<div class="v-container">
<?php $q="select * from videos ORDER BY id ASC LIMIT 3";
 $query=mysqli_query($dbc,$q);
 while ($res=mysqli_fetch_array($query)) {
 
 ?>
 
            <div class="v-box">
                <div class="v-imgBox">
                    <img src="uploadimg/<?php echo $res['poster']; ?>">
                </div>
                <div class="content">
                    <h2><?php echo $res['content']; ?></br>
                    <a href="watch_video.php?id=<?php echo $res['id']; ?>">Watch</a></h2>
                </div>
            </div>
            
        
<?php
              }

              ?>
</div>

</section><br>


<div >
    <a style="margin-left: 570px;margin-top:-40px;" href="all_video.php" class="bttn-def" id="viewall"><span>View All</span></a>
    </div>


    <section class="book" id="book">

        <h1 class="heading">
            <span>E</span>
            <span>X</span>
            <span>E</span>
            <span>R</span>
            <span>C</span>
            <span>I</span>
            <span>S</span>
            <span>E</span>
            
        </h1>
        </section>
            <!--=========== ABOUT =========-->
            <section class="about section container" id="about"style="margin-left:200px;"> 
                <div class="about__container grid">
                    <img src="image/qz.jpg" alt="" class="about__img">

                    <div class="about__data">
                        <p class="font-effect-3d-float">
                        Here you will find problem programs for practice and their implementation also which will improve your basic knowledge about programming and it also improve your coding skill.
                        </p><br><br>
                         <a href="mixed_quiz.php"class="about__link">
                          see quiz
                         </a>
                      
                    </div>
                </div>
            </section><br><br>

          

           
<section style="  background-color:gray;  " >
<h1   style=" margin-left: 470px; font-size: 20px; padding:5px; color:white;  " >Devoloped by Student HelpLine Portal Team</h1>
</section>




      
      <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        
        <script src="js/scrollreveal.min.js"></script>
        
       
        <script src="js/blood_bank.js"></script>
    </body>
</html>
