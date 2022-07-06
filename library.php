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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
    <link rel="stylesheet" href="css/library.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">
<div class="header-1">

        

      <!--  <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
-->
        
        <div class="icons">
            
           
            
        </div>


        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
           
           
            <div ></div>
        </div>

    </div>

    
    <div class="header-2">
        <nav class="navbar">
            
    
    <div class="container">
        <ul class="menu">
        <img id="main-logo" src="image/sp.png" alt="" style="width:100px;height:
                37px;  margin-left:-700px; padding-top:4px;"/>
           <li style="margin-left:100px;"> <a href="helpdesk.php">HOME</a></li>

           <li><a href="#featured"> BOOKS</a></li>

           <li><a href="#arrivals">ARRIVALS</a> </li>
            <li><a href="#">CATEGORY</a> 
                <ul>
                    <li>
                        <a href="programming-book.php"><b>programming</b></a>
                    </li>
                    <li>
                        <a href="Math-book.php"><b>Math</b></a>
                    </li>
                    <li>
                        <a href="EEE-book.php"><b>EEE</b></a>
                    </li>
                    <li>
                        <a href="English-book.php"><b>English</b></a>
                    </li>
                    <li>
                        <a href="Other-book.php#"><b>Other</b></a>
                    </li>
                    


                </ul>
            </li>
            <li><a href="search_book.php">search book</a>
                
            
            </li>
            <div class="nav-header">
            <a href="wishlist.php" class="fas fa-heart"></a>
    </div>
        </ul>
    </div>
            
           
           
          
        </nav>
    </div>

</header>

<!-- header section ends -->





<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>welcome to the library section </h3>
            <p>Education should be open to all!  Here you will find PDF's of all the books you need. May our effort's be successful and enjoy to browsing.</p>
            
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/Linear Algebra and Linear Operators in Engineering_ With Applications in ( PDFDrive )_.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/The Elements of Statistical Learning_ Data Mining, Inference, and Prediction, Second Edition (Springer Series in Statistics) ( PDFDrive )_.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/Electronic Devices  and Circuits  Dr. K. Lal Kishore.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/Linear Algebra and Linear Operators in Engineering_ With Applications in ( PDFDrive )_.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/The Elements of Statistical Learning_ Data Mining, Inference, and Prediction, Second Edition (Springer Series in Statistics) ( PDFDrive )_.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/Electronic Devices  and Circuits  Dr. K. Lal Kishore.jpg" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>





<section class="featured" id="featured" >

<h1 class="heading">
        <span>B</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span>s</span>
        
    </h1>
 <?php

$records = mysqli_query($dbc,"select * from add_book where id ='2'");

while($data = mysqli_fetch_array($records)){

?>  

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="search_book.php" class="fas fa-search"></a>
                    <a href="wishlist_manage.php?id=<?php echo $data['id'];?>"class="fas fa-heart"></a>
                    <a href="show_pdf.php?pdf=<?php echo $data['pdf'];?>" class="fas fa-eye"></a>
                </div>
                <div class="image">
                <img src="image/<?php echo $data['BookCover']; ?>" >
                </div>
                <div class="content">
                <h3>Book ID: <?php  echo $data['id'];?></h3>
                    <h3>Book Name: <?php  echo $data['BookName'];?></h3>
                    <h3 class="author"> <span>Author Name:</span> <?php echo $data['AuthorName'];?></h3>
                    <a href="download_pdf.php?pdf=<?php echo $data['pdf'];?>" class="bttn-def"><span>Download</span></a>
                </div>
            </div>
           <?php
              }

            ?>
<?php $records = mysqli_query($dbc,"select * from add_book where id ='3'");

while($data = mysqli_fetch_array($records)){

?>  

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="search_book.php" class="fas fa-search"></a>
                    <a href="wishlist_manage.php?id=<?php echo $data['id'];?>" class="fas fa-heart"></a>
                    <a href="show_pdf.php?pdf=<?php echo $data['pdf'];?>" class="fas fa-eye"></a>
                </div>
                <div class="image">
                <img src="image/<?php echo $data['BookCover']; ?>" >
                </div>
                <div class="content">
                      <h3>Book ID: <?php  echo $data['id'];?></h3>
                    <h3>Book Name:<?php  echo $data['BookName'];?></h3>
                    <h3 class="author"> <span>Author Name:</span> <?php echo $data['AuthorName'];?></h3>
                    <a href="download_pdf.php?pdf=<?php echo $data['pdf'];?>" class="bttn-def"><span>Download</span></a>
                </div>
            </div>

            <?php
              }

            ?>
            <?php $records = mysqli_query($dbc,"select * from add_book where id ='4'");

                while($data = mysqli_fetch_array($records)){

               ?>  

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="search_book.php" class="fas fa-search"></a>
                    <a href="wishlist_manage.php?id=<?php echo $data['id'];?>" class="fas fa-heart"></a>
                    <a href="show_pdf.php?pdf=<?php echo $data['pdf'];?>" class="fas fa-eye"></a>
                </div>
                <div class="image">
                <img src="image/<?php echo $data['BookCover']; ?>" >
                </div>
                <div class="content">
                <h3>Book ID: <?php  echo $data['id'];?></h3>
                    <h3>Book Name:<?php  echo $data['BookName'];?></h3>
                    <h3 class="author"> <span>Author Name:</span> <?php echo $data['AuthorName'];?></h3>
                    <a href="download_pdf.php?pdf=<?php echo $data['pdf'];?>" class="bttn-def"><span>Download</span></a>
                </div>
            </div>
            <?php
              }

            ?>
         <?php $records = mysqli_query($dbc,"select * from add_book where id ='5'");

            while($data = mysqli_fetch_array($records)){

               ?>  

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="search_book.php" class="fas fa-search"></a>
                    <a href="wishlist_manage.php?id=<?php echo $data['id'];?>" class="fas fa-heart"></a>
                    <a href="show_pdf.php?pdf=<?php echo $data['pdf'];?>" class="fas fa-eye"></a>
                </div>
                <div class="image">
                <img src="image/<?php echo $data['BookCover']; ?>" >
                </div>
                <div class="content">
                <h3>Book ID: <?php  echo $data['id'];?></h3>
                    <h3>Book Name:<?php  echo $data['BookName'];?></h3>
                    <h3 class="author"> <span>Author Name:</span> <?php echo $data['AuthorName'];?></h3>
                    <a href="download_pdf.php?pdf=<?php echo $data['pdf'];?>" class="bttn-def"><span>Download</span></a>
                </div>
            </div>
            <?php
              }

            ?>
              <?php $records = mysqli_query($dbc,"select * from add_book where id ='6'");

            while($data = mysqli_fetch_array($records)){

             ?>  

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="search_book.php" class="fas fa-search"></a>
                    <a href="wishlist_manage.php?id=<?php echo $data['id'];?>" class="fas fa-heart"></a>
                    <a href="show_pdf.php?pdf=<?php echo $data['pdf'];?>" class="fas fa-eye"></a>
                </div>
                <div class="image">
                <img src="image/<?php echo $data['BookCover']; ?>" >
                </div>
                <div class="content">
                <h3>Book ID: <?php  echo $data['id'];?></h3>
                    <h3>Book Name:<?php  echo $data['BookName'];?></h3>
                    <h3 class="author"> <span>Author Name:</span> <?php echo $data['AuthorName'];?></h3>
                    <a href="download_pdf.php?pdf=<?php echo $data['pdf'];?>" class="bttn-def"><span>Download</span></a>
                </div>
            </div>
            <?php
              }

            ?>         
             <?php $records = mysqli_query($dbc,"select * from add_book where id ='7'");

            while($data = mysqli_fetch_array($records)){

             ?>  

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="search_book.php" class="fas fa-search"></a>
                    <a href="wishlist_manage.php?id=<?php echo $data['id'];?>" class="fas fa-heart"></a>
                    <a href="show_pdf.php?pdf=<?php echo $data['pdf'];?>" class="fas fa-eye"></a>
                </div>
                <div class="image">
                <img src="image/<?php echo $data['BookCover']; ?>" >
                </div>
                <div class="content">
                <h3>Book ID: <?php  echo $data['id'];?></h3>
                    <h3>Book Name:<?php  echo $data['BookName'];?></h3>
                    <h3 class="author"> <span>Author Name:</span> <?php echo $data['AuthorName'];?></h3>
                    <a href="download_pdf.php?pdf=<?php echo $data['pdf'];?>" class="bttn-def"><span>Download</span></a>
                </div>
            </div>
            <?php
              }

            ?>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>


</section>
               <div class="content">
               <a href="all-books.php" class="bttn-def" id="viewall"><span>load more</span></a>
               </div>
<!-- featured section  ends -->
<!-- featured section  ends -->










<section class="newsletter">  

</section>




<!-- arrivals section starts  -->
<section class="arrivals" id="arrivals">

<h1 class="heading">
        <span>N</span>
        <span>e</span>
        <span>w</span>
        <span class="space"></span>
        <span>A</span>
        <span>r</span>
        <span>r</span>
        <span>i</span>
        <span>v</span>
        <span>a</span>
        <span>l</span>
        <span>s</span>
        
    </h1>

<?php $records = mysqli_query($dbc,"select * from add_book ORDER BY id DESC LIMIT 3");

while($data = mysqli_fetch_array($records)){

 ?>  
    <div class=" arrival">

        <div class="arrival-wrapper">

            <a href="#" class=" box">
                <div class="image">
                <img src="image/<?php echo $data['BookCover']; ?>" >
                </div>
                <div class="content">
                    <h3></h3>
                    <h4><b style="color:black;">Book Name:</b> </h4>
                    <span> <?php  echo $data['BookName'];?></span>
                   
                </div>
            </a>

           
        </div>

    </div>

    <?php
              }

            ?>

</section>

<!-- arrivals section ends -->
               <div class="content">
               <a href="all-books.php" class="bttn-def" id="viewall"><span>load more</span></a>
               </div>
<!-- footer section starts  -->



<!-- loader  -->




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>





<div class="ff" style="background-color:gray;" >
<h1   style=" margin-left: 460px; font-size: 20px; color:white; margin-top:10px;  " >Devoloped by Student HelpLine Portal Team</h1>
</div>







<script src="js/library.js"></script>

</body>
</html>