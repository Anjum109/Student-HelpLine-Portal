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

        
        <link rel="stylesheet" href="css/blood_bank.css">
        <link rel="stylesheet" href="css/blood_bank_card.css">
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
                <img id="main-logo" src="image/sp.png" alt="" style="width:100px;height:
                37px;margin-left:-1000px;   padding-top:4px;"/>
                <li><a href="helpdesk.php">HOME</a> </li>

                   <li> <a href="">BLOOD DONOR</a>
                
                    <ul>
                        <li>
                            <a href="donor_registration.php"><b>DONOR REGISTRATION</b></a>
                        </li>
                        <li>
                            <a href="#donor"><b>VIEW DONOR LIST</b></a>
                        </li>
                        
    
                    </ul>
                
                
                </li>
        
                   <li><a href=""> BLOOD REQUEST</a>
                
                    <ul>
                        <li>
                            <a href="blood_request.php"><b>MAKE BLOOD REQUEST</b></a>
                        </li>
                        <li>
                            <a href="#Request"><b>VIEW BLOOD REQUEST</b></a>
                        </li>
                        
    
                    </ul>
                
                
                
                
                </li>
        
                   <li><a href="#about">ABOUT DONATION</a> </li>
                    <li><a href="#">DONOR OPPINION</a> 
                        <ul>
                            <li>
                                <a href="donor_oppinion.php"><b>SHARE YOUR OPPINOIN</b></a>
                            </li>
                            <li>
                                <a href="#op"><b>VIEW DONOR OPPINION</b></a>
                            </li>
                            
        
        
                        </ul>
                    </li>
                    <li><a href="#faqs"> FAQ</a></li>
                    <li><a href="#about">SEARCH </a>
                
                
                    <ul>
                            <li>
                                <a href="search_blood_donor.php"><b>SEARCH DONOR</b></a>
                            </li>
                            
        
        
                        </ul>
                
                
                
                
                
                
                </li>
                    <li><a href="#">MY INFO</a> 
                        <ul>
                            <li>
                                <a href="my_donor_info.php"><b>MY DONOR REGISTRATION INFO</b></a>
                            </li>
                            <li>
                                <a href="my_blood_request.php"><b>MY BLOOD REQUEST INFO</b></a>
                            </li>
                            
        
        
                        </ul>
                    </li>

                    <li>
                    
            <div id="search-btn" class="fas fa-search">
            <a href="search_blood_donor.php" class="fas fa-search" style="width: 10px;">Search</a>
           
            
        </div>
                    </li>
                    

                </ul>
            </div>
                    
                   
                   
                  
                </nav>
            </div>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="image/bl.png" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            DONATE BLOOD <br> SAVE LIFE
                        </h1>
                        <span class="font-effect-3d-float"style="margin-left:-40px ;">
                            The Blood you donate gives <span class="font-effect-3d-float">someone another chance of life.</span>
                        </span>
                        
                    </div>

                   
                </div>
            </section>
             <!--==================== donor ====================-->
             <section class="book" id="book">

                <h1 class="heading">
                    <span>B</span>
                    <span>L</span>
                    <span>O</span>
                    <span>O</span>
                    <span>D</span>
                    <span class="space"></span>
                    <span>D</span>
                    <span>O</span>
                    <span>N</span>
                    <span>O</span>
                    <span>R</span>
                </h1>
                </section>
<section id="donor">


    <div class="content"style="margin-left: 160px;">
        <!-- card -->
        <?php $records = mysqli_query($dbc,"select * from donor_list ORDER BY id DESC LIMIT 3");

while($data = mysqli_fetch_array($records)){

 ?> 

        <div class="card" >
           
              <div class="icon"><i class="material-icons md-36">face</i></div>
              <p class="title"><?php  echo $data['bloodgroup'];?></p>
              <p class="text">Name : <?php  echo $data['dname'];?> </p>
              <p class="text">Contact : <?php  echo $data['contact'];?> </p>
              <p class="text">Location : <?php  echo $data['location'];?></p>
           
        </div>
        <?php
              }

            ?>
        <!-- end card -->
        
     
  
     
     </div>
     
  </div>

</section>


<div >
<a href="all_donor.php" class="bttn-def" id="viewall"><span>View All</span></a>
</div>

<section class="book" id="book">

    <h1 class="heading">
        <span>B</span>
        <span>L</span>
        <span>O</span>
        <span>O</span>
        <span>D</span>
        <span class="space"></span>
        <span>R</span>
        <span>E</span>
        <span>Q</span>
        <span>U</span>
        <span>E</span>
        <span>S</span>
        <span>T</span>
    </h1>
    </section>
    <br><br>

<section id="Request">
<?php $records = mysqli_query($dbc,"select * from blood_request ORDER BY id DESC LIMIT 3");

while($data = mysqli_fetch_array($records)){

 ?>
<div class="maincontainer">

    <div class="back">
        <p>Name : <?php  echo $data['name'];?></p>
        <p>BloodGroup : <?php  echo $data['bloodgroup'];?></p>
        <p>Contact : <?php  echo $data['contact'];?></p>
        <p>Location : <?php  echo $data['location'];?></p>
        <p>Reason : <?php  echo $data['reason'];?></p>
        <p>Date : <?php  echo $data['date'];?></p>

    </div>
   
   
    
</div>
<?php
              }

              ?>
</section><br>


<div >
    <a style="margin-left: 570px;" href="all_blood_request.php" class="bttn-def" id="viewall"><span>View All</span></a>
    </div>


    <section class="book" id="book">

        <h1 class="heading">
            <span>A</span>
            <span>B</span>
            <span>O</span>
            <span>U</span>
            <span>T</span>
            <span class="space"></span>
            <span>D</span>
            <span>O</span>
            <span>N</span>
            <span>A</span>
            <span>T</span>
            <span>I</span>
            <span>O</span>
            <span>N</span>
        </h1>
        </section>
            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="image/pic .png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            HELPFUL INFORMATION <br>GOOD TO KNOW
                        </h2><br>

                       

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Maintain a healthy iron level by eating iron rich foods.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                               Drink an extra 16 oz.of water prior to your donation.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                               Avoid alcohol consumption before your blood donation.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                               Finally, try to get a good night sound sleep after donation.
                            </p>
                        </div>

                      
                    </div>
                </div>
            </section>

            <!--==================== STEPS ====================-->
            <section class="steps section container">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        Why you  Donate Blood?
                    </h2>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title">Reduce risk of heart attacks an liver ailment</h3>
                            <p class="steps__card-description">
                               Donating blood regularly is benificial to prevent and reduce heart attacks and liver ailment.The risk of heart and liver related problem is caused by the iron overload in body .
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title">Lower the risk of cancer</h3>
                            <p class="steps__card-description">
                                Cancer is the most feared and deadly disease.Blood donation help in lowering the risk of cancer. By donating blood regularly the iron levelin the blood is balanced and the risk of cancer.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title">Speeds up healing process</h3>
                            <p class="steps__card-description">
                                The body tries to adjust to the loss of blood the cells we donate blood.these adjustments also help inaccelersting the wound healing process
                            </p>
                        </div>
                    </div>
                </div>
            </section><br><br><br><br>

            <!--==================== donor op ====================-->

            <section class="book" id="op">

                <h1 class="heading">
                    <span>D</span>
                    <span>O</span>
                    <span>N</span>
                    <span>O</span>
                    <span>R</span>
                    <span class="space"></span>
                    <span>O</span>
                    <span>P</span>
                    <span>P</span>
                    <span>I</span>
                    <span>N</span>
                    <span>I</span>
                    <span>O</span>
                    <span>N</span>
                </h1>
                </section>


            <section >
              
            <?php $records = mysqli_query($dbc,"select * from donor_oppinion ORDER BY id DESC LIMIT 3");

while($data = mysqli_fetch_array($records)){

    ?> 

                <div class="donor-op">

    
                    <div class="op-card">



                      <div class="layer">
                        
                      </div>
                   

                      <div class="op-content">
                        <p id="op-text"><b>“</b><?php echo $data['oppinion'];?><b>” </b></p>
                        <div class="op-image">
                          <img  width="100px" src="image/dpuser.png" alt="">
                          
                        </div>
                        <div class="details">
                          <h2> <br> <span><?php  echo $data['name'];?></span></h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <?php
              }

              ?>
                 
            </section>
            <div >
                <a href="all_donor_oppinion.php"style="margin-left: 570px;"  class="bttn-def" id="viewall"><span>View All</span></a>
                </div>
                <section class="book" id="book">

                    <h1 class="heading">
                        <span>Q</span>
                        <span>U</span>
                        <span>E</span>
                        <span>S</span>
                        <span>T</span>
                        <span>I</span>
                        <span>O</span>
                        <span>N</span>
                        
                    </h1>
                    </section><br><br><br>
            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                Frequently asked questions: 
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Who can donate blood?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    In most states, donors must be age 17 or older. Some states allow donation by 16-year-olds with a signed parental consent form. Donors must weigh at least 110 pounds and be in good health. Additional eligibility criteria apply.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How often can I donate blood?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    You must wait at least eight weeks (56 days) between donations of whole blood and 16 weeks (112 days) between Power Red donations. Whole blood donors can donate up to 6 times a year. Platelet apheresis donors may give every 7 days up to 24 times per year. Regulations are different for those giving blood for themselves (autologous donors).
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Will it hurt when you insert the needle?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Only for a moment. Pinch the fleshy, soft underside of your arm. That pinch is similar to what you will feel when the needle is inserted.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How long does a blood donation take?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    The entire process takes about one hour and 15 minutes; the actual donation of a pint of whole blood unit takes eight to 10 minutes. However, the time varies slightly with each person depending on several factors including the donor’s health history and attendance at the blood drive.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How much blood usually is donated at a time?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    1 pint
Roughly 1 pint is given during a donation. A healthy donor may donate red blood cells every 56 days, or double red cells every 112 days. A healthy donor may donate platelets as few as 7 days apart, but a maximum of 24 times a year.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How long will it take to replenish the pint of blood I donate?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    The plasma from your donation is replaced within about 24 hours. Red cells need about four to six weeks for complete replacement. That’s why at least eight weeks are required between whole blood donations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           
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
