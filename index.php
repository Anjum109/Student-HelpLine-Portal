<?php include('config.php'); ?>

<?php
if (isset($_POST["submit"])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $mailheader = "From:".$name."<".$email.">\r\n";
    
    $recipient = "sharminbinty33@gmail.com";
    
    mail($recipient, $subject, $message, $mailheader) or die("Error!")

	?>
	   
 <script>
   setTimeout(function() {
	swal({
		title: "Send",
		text: "Thank you for contacting us. We will get back to you as soon as possible!",
		type: "success"
	}, function() {
		window.location = "index.php"; 
	});
}, 1000);
</script>

<?php
			
		
	}		  
	
?>






<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  
        <link rel="stylesheet" href="css/homepage.css">
        <head>
            <link rel="stylesheet"
                  href="https://fonts.googleapis.com/css?family=Tangerine">

        <title></title>
    </head>
    <body>



   

        <!--==================== HEADER ====================-->
        <header class="header" id="header">
        
            <div class="header-2">
                <nav class="navbar">
                    
                
            <div class="nav-container">
                <ul class="menu">
                <img id="main-logo" src="image/sp.png" alt="" style="width:100px;height:
                37px;  margin-left:-800px; padding-top:4px;"/>
                 <li style="
                 margin-left:40px;"> <a href="">Home</a>
                    <li> <a href="#contact-us">Contact Us</a>
                        
                
                            <li><a href="">About</a>
                
                                <ul>
                                    <li>
                                        <a href="#about"><b>About Us</b></a>
                                    </li>
                                    <li>
                                        <a href="#team"><b>Our Team</b></a>
                                    </li>
                                    
                                    <li>
                                        <a href="#feature"><b>Our Features</b></a>
                                    </li>
                                    
                                </ul>
                            
                            
                            
                            
                            </li>
                    
        
                   <li><a href=""> SignUp</a>
                
                    <ul>
                        <li>
                            <a href="signup.php"><b>User SignUp</b></a>
                        </li>
                        <li>
                            <a href="adminsignup.php"><b>Admin SignUp</b></a>
                        </li>
                        
    
                    </ul>
                
                
                
                
                </li>
        
                  
                    <li><a href="#">Login</a> 
                        <ul>
                            <li>
                                <a href="login.php"><b>User Login</b></a>
                            </li>
                            <li>
                                <a href="adminlogin.php"><b>Admin Login</b></a>
                            </li>
                            
        
        
                        </ul>
                    </li>
                    <li><a href="feedback.php"> Feedback</a></li>
                  
                </ul>
            </div>
                    
                   
                   
                  
                </nav>
            </div>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="image/home.webp" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            WELCOME TO STUDENT HELPLINE PORTAL<br><br>&nbsp;&nbsp;&nbsp;&nbsp;The World Best <span>Solution's</span> Website
                        </h1><br>
                        <span class="font-effect-3d-float"style="margin-left:-100px ;">
                            Our website is for those people who need helps.
                        </span><br><br>
                        <a href="signup.php"class="btn btn-primary">Read More</a>
                    </div>

                   
                </div>
            </section><br><br>
             <!--==================== feature ====================-->
             <section class="book" id="book">

                <h1 class="heading">
                    
                    <span>O</span>
                    <span>U</span>
                    <span>R</span>
                    <span class="space"></span>
                    <span>F</span>
                    <span>E</span>
                    <span>A</span>
                    <span>T</span>
                    <span>U</span>
                    <span>R</span>
                    <span>E</span>
                   
                </h1>
                </section>
<section id="feature">


    <div class="f_container">
        <div class="f_card">
          <div class="f_img">
            <img src="image/ff.jpg" alt=""/>
          </div>
          <div class="f-details">
            <h2>Help Desk</h2>
            <p>Help Desk is a community-based questions and answers section. Users post questions on any topic and other users respond.It is knowledge sharing platform . </p>
            <br><a href="signup.php" style="padding:3px;" >Learn More</a>
          </div>
        </div>
         <div class="f_card">
          <div class="f_img">
            <img src="image/ff2.jpg" alt=""/>
          </div>
          <div class="f-details">
            <h2>Library</h2>
            <p>It is acollection of books used for reading or study,where user can read book and also download them.</p>
            <br><a href="signup.php" style="padding:3px;" >Learn More</a>
        </div>
        </div>
    
    
         <div class="f_card">
          <div class="f_img">
            <img src="image/ff3.jpg" alt=""/>
          </div>
          <div class="f-details">
          <h2>Skill Develop</h2>
            <p style="margin-top:-10px;"> In this section we focus on your skill development because your skills are more important for your desired career development. </p>
            <br><a href="signup.php" style="padding:1px;">Learn More</a>
        </div>
        </div>
    
    
         <div class="f_card">
          <div class="f_img">
            <img src="image/ff4.jpg" alt=""/>
          </div>
          <div class="f-details">
            <h2>Blood Bank </h2>
            <p>In the Blood Bank section it enables individuals who want to donate blood to help the needy.And also here we provide some information about donation.</p>
            <br><a href="signup.php" style="padding:3px;">Learn More</a>
        </div>
        </div>
    
    
         <div class="f_card" style="margin-left:-320px;">
          <div class="f_img">
            <img src="image/ff5.jpg" alt=""/>
          </div>
          <div class="f-details">
            <h2>Task Manager</h2>
            <p>It's a list of tasks you need to complete or things that you want to do. Most typically, they're organised in order of priority.</p>
            <br><a href="signup.php" style="padding:3px;">Learn More</a>
        </div>
        </div>
    
    
        
        </div>

</section>
<div >
<a  style="margin-top:-90px; margin-left: 600px;"href="signup.php" class="bttn-def" id="viewall"><span>View All</span></a>
</div>

    <section style="margin-top:-45px; " class="book" id="book">

        <h1 class="heading">
            <span>A</span>
            <span>B</span>
            <span>O</span>
            <span>U</span>
            <span>T</span>
            <span class="space"></span>
            <span>U</span>
            <span>S</span>
           
        </h1>
        </section>
            <!--==================== ABOUT ====================-->
            <section style="margin-top:-45px; " class="about section container" id="about">
                <div class="about__container grid">
                    <img src="image/abot.jpg" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section_title about_title">
                            Student Helpline Portal 
                        </h2><br>
                        <p>We believe student deserves to have a website for solving their problem. we are provide a free knowledge sharing platform where student can share their knowledge to other to solve problem. </p><br>

                       

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                The motive of the website is to help students.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We're dedicated to giving you the very best of our services. 
                            </p>
                           
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We hope you enjoy our service. If you have any questions or comments, please don't hesitate to contact us.
                            </p> 
                             
                        </div>

                      
                    </div>
                </div>
            </section><br>
            <section class="book" id="book">

                <h1 class="heading">
                    <span>O</span>
                    <span>U</span>
                    <span>R</span>
                    <span class="space"></span>
                    <span>T</span>
                    <span>E</span>
                    <span>A</span>
                    <span>M</span>
            
                   
                </h1>
                </section>
                <br><br><br><br>
            
            <section id="team">
               &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <div class =t-container>
                    <div class = t-card>
                      <div class = t-image>
                        <img style="height: 200px;margin-left: 50px;width:155px;" src =  image/binty.jpeg>
                      </div>
                      <div class = t-content>
                        <h4>Sharmin Akther Binty</h4>
                        <p>Studied at Leading University ,           Department of Computer Science and Engineering.   </p>
                      </div>
                    </div>  
                    
                    <div class = t-card>
                        <div class = t-image>
                            <img style="height: 200px;margin-left: 30px;" src =  image/fme.jpg>

                        </div>
                        <div class = t-content>
                          <h4>Fahmida Khan</h4>
                          <p>Studied at Leading University ,           Department of Computer Science and Engineering.             </p>
                        </div>
                      </div>  
                      <div class = t-card>
                        <div class = t-image>
                            <img style="height: 200px;margin-left: 30px;" src =  image/anj1.jpg>

                        </div>
                        <div class = t-content>
                          <h4>Aunjum Lubaba</h4>
                          <p>Studied at Leading University ,           Department of Computer Science and Engineering.   </p>
                        </div>
                      </div>      
                  </div>
                 
                   
            </section><br><br>
            <section class="book" id="book">

                <h1 class="heading">
                    <span>W</span>
                    <span>H</span>
                    <span>Y</span>
                    <span class="space"></span>
                    <span>C</span>
                    <span>H</span>
                    <span>O</span>
                    <span>O</span>
                    <span>S</span>
                    <span>E</span>
                    <span class="space"></span>
                    <span>U</span>
                    <span>S</span>
                   
                </h1>
                </section>
                <br><br><br><br>
        <section style="display: flex;">


    <div class="conta" style="display: flex;">
      <div class="row align-items-center mt-5"style="display: flex; margin-left:90px ;">
          <div class="col-md-4"style="display: flex;" >
           <div class="main-card py-4"style="display: flex;" >
              <div class="layer"style="display: flex;"></div>
                 <div class="card"style="display: flex;" >
                    <div class="round"><p class="p">1</p></div>
                         <div class="card-body">
                             <h4 class="card-title pt-3 text-center">Flexibility</h4>
                             <p class="card-text">Our website is very user friendly with creative design also be accessible to everyone. Information is well organized and presented in a nice way.</p>
                             <i class="fas-fa-rocket svg-icon red fa-2x"></i>
                         </div>
                     </div>
                 </div>
            </div>

            <div class="col-md-4">
                <div class="main-card py-4">
                    <div class="layer2"></div>
                    <div class="card">
                        <div class="round1"><p class="p">2</p></div>
                        <div class="card-body">
                            <h4 class="card-title pt-3 text-center">Our Support</h4>
                            <p class="card-text">Your progress and well-being are important to us and we will do everything we can to try to ensure that you make your time here as enjoyable .</p>
                            <i class="fas-fa-rocket svg-icon red fa-2x"></i>
                        </div>
                    </div>
                </div>
           </div>
    
        </div>
    </div>

    <div class="col-md-4">
        <div class="main-card py-4">
            <div class="layer3"></div>
            <div class="card">
                <div class="round2"><p class="p">3</p></div>
                <div class="card-body">
                    <h4 class="card-title pt-3 text-center">Free</h4>
                    <p class="card-text">Save your hard earned money. Our website is totally free get it for free in just a few minutes.</p>
                    <i class="fas-fa-rocket svg-icon red fa-2x"></i>
                </div>
            </div>
        </div>
   </div>




</section>


<section style="display: flex; margin-top: -180px;">
    <div class="row align-items-center mt-5"style="display: flex; margin-left:50px ;margin-bottom:10px ;">
    <div class="col-md-4" id="card4">
        <div class="main-card py-4">
            <div class="layer3"></div>
            <div class="card">
                <div class="round2"><p class="p">4</p></div>
                <div class="card-body">
                    <h4 class="card-title pt-3 text-center">Safe</h4>
                    <p class="card-text">Your personally identifiable information is safe with us. It doesn’t contain any online threats like malware or spyware.</p>
                    <i class="fas-fa-rocket svg-icon red fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
    
    

</div>
<div class="row align-items-center mt-5"style="display: flex; margin-left:-170px ; margin-bottom:10px ;">
    <div class="col-md-4" id="card4">
        <div class="main-card py-4">
            <div class="layer3"></div>
            <div class="card">
                <div class="round2"><p class="p">5</p></div>
                <div class="card-body">
                    <h4 class="card-title pt-3 text-center">Get help fast</h4>
                    <p class="card-text">You can rely on our 4 years of experience and local support that's got you covered.</p>
                    <i class="fas-fa-rocket svg-icon red fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
    
    

</div>
</section>
<section class="book" id="book"style="margin-top:-150px ;">

    <h1 class="heading">
        <span class="space"></span>
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>T</span>
        <span>A</span>
        <span>C</span>
        <span>T</span>
        <span class="space"></span>
        <span>U</span>
        <span>S</span>
       
    </h1>
    </section>

    <section id="contact-us">
       
        <div class="container-contact100">
            <span id="ct-text"class="font-effect-3d-float" style="margin-left: 700px;">We Love Conversations,Lets Talk </span>
            <img style="height: 400px; margin-left: -40px; margin-top:-200px ;" src =  image/contact_us.png>
            <div class="wrap-contact100">
                <form class="contact100-form validate-form"action="" method="POST">
                    
    
                    <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                        <input class="input100" type="text" name="name" placeholder="Full Name">
                        <span class="focus-input100"></span>
                    </div>
    
                    <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
                        <input class="input100" type="text" name="email" placeholder="E-mail">
                        <span class="focus-input100"></span>
                    </div>
    
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="subject" placeholder="Subject">
                        <span class="focus-input100"></span>
                    </div>
    
                    <div class="wrap-input100 validate-input" data-validate = "Please enter your message">
                        <textarea class="input100" name="message" placeholder="Your Message"></textarea>
                        <span class="focus-input100"></span>
                    </div>
    
                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn"type="submit" name="submit">
                            <span>
                                <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                                Send
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    

    </section>

    <section class="book" id="book" >

        <h1 class="heading">
            <span>R</span>
            <span>E</span>
            <span>V</span>
            <span>I</span>
            <span>E</span>
            <span>W</span>
           
        </h1>
        </section>

        
        
     
        <section id="review" class="review" >

         
  
        
<div class="box-container">
<?php $records = mysqli_query($dbc,"select * from rating  ORDER BY id DESC LIMIT 3");
        
        while($row = mysqli_fetch_array($records)){
  
        ?>
    <div class="box1">
        <img src="image/us.png" alt="">
        <h3><?php  echo $row['Username'];?></h3>
        <p >“<?php  echo $row['review'];?>”</p>
        
        <?php    
       
        if( $row['rate'] == 5){
        
        ?><div>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked "></i>
			</div>

            <?php }
     
     
?>
<?php 
if( $row['rate'] == 3){
        
        ?><div>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
			</div>

            <?php }
     
    
    ?>
<?php 
if( $row['rate'] == 4){
        
        ?><div>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star "></i>
			</div>

            <?php }
     
    
    ?>
<?php 
if( $row['rate'] == 2){
        
        ?><div>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
			</div>

            <?php }
     
    
    ?>
    <?php 
if( $row['rate'] == 1){
        
        ?><div>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
			</div>

            <?php }
     
    
    ?>

            </div>
            <?php 
     
}
?>
</div>
</section><br>
    
    <!-- review section ends -->
    <div >
        <a  style="margin-top:-90px; margin-left: 600px;"href="signup.php" class="bttn-def" id="viewall"><span>View All</span></a>
        </div>
        <section>


            <section class="footer">
                <section class="footer">
            
                    <div class="box-container">
                
                        <div class="box1">
                            <h3>Services</h3>
                           
                            <a href="signup.php"> <i class="fas fa-arrow-right"></i> Task Manager </a>
                            <a href="signup.php"> <i class="fas fa-arrow-right"></i> Help Desk </a>
                            <a href="signup.php"> <i class="fas fa-arrow-right"></i> Library </a>
                            <a href="signup.php"> <i class="fas fa-arrow-right"></i> Blood Bank </a>
                            <a href="signup.php"> <i class="fas fa-arrow-right"></i> Skill Development </a>
                        </div>
                
                        <div class="box1">
                            <h3>Explore</h3>
                            <a href="#"> <i class="fas fa-arrow-right"></i> Home </a>
                            <a href="#about"> <i class="fas fa-arrow-right"></i> About Us </a>
                            <a href="#contact-us"> <i class="fas fa-arrow-right"></i> Contact Us </a>
                            <a href="login.php"> <i class="fas fa-arrow-right"></i> Log in </a>
                            <a href="signup.php"> <i class="fas fa-arrow-right"></i> Sign Up </a>
                        </div>
                
                        <div class="box1">
                            <h3>About</h3>
                            <a href="#about"> <i class="fas fa-arrow-right"></i> About Us  </a>
                            <a href="#team"> <i class="fas fa-arrow-right"></i> Our Team  </a>
                            <a href="#feature"> <i class="fas fa-arrow-right"></i> Our Service  </a>
                           
                        </div>
                
                        <div class="box1">
                            <h3>Legal</h3>
                            <a href="term_and_con/privacy_policy.html"> <i class="fas fa-arrow-right"></i> Privacy Policy  </a>
                            <a href="term_and_con/term_and_cond.html"> <i class="fas fa-arrow-right"></i> Terms And Condition  </a>
                            
                           
                        </div>
                        


                        
                    </div>
                

        </section>
    <section style="background:#575757 ;">


        <h1 class="social"  style=" margin-left: 600px; font-size: 15px; margin-top:-10px;" >GET IN TOUCH</h1>
    
    
        <div class="footericon">
            
             <div class="icon facebook" style="margin-bottom:15px;">
                <div class="tooltip">
                   Facebook
                </div>
                <span><i class="fab fa-facebook-f"></i></span>
             </div>
             <div class="icon twitter"style="margin-bottom:15px">
                <div class="tooltip">
                   Twitter
                </div>
                <span><i class="fab fa-twitter"></i></span>
             </div>  
             <div class="icon instagram"style="margin-bottom:15px">
                <div class="tooltip">
                   Instagram
                </div>
                <span><i class="fab fa-instagram"></i></span>
             </div>
             <div class="icon github"style="margin-bottom:15px">
                <div class="tooltip">
                   Github
                </div>
                <span><i class="fab fa-github"></i></span>
             </div>
             <div class="icon youtube"style="margin-bottom:15px">
                <div class="tooltip">
                   YouTube
                </div>
                <span><i class="fab fa-youtube"></i></span>
             </div>
          </div>

    </section>
   </body>
</html>