<?php 
include "config.php";?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/category-book.css">
   
<link rel="stylesheet" href="css/Fontawesome.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
<h1><a href="library.php"><i class="fas fa-times-circle"></i></a></h1>
<section class="book" id="book">

<h1 class="heading">
    <span>E</span>
    <span>E</span>
    <span>E</span>
    <span class="space"></span>
    <span>B</span>
    <span>o</span>
    <span>o</span>
    <span>k</span>
</h1>
</section>
     
    
<section class="arrivals" id="arrivals">
        
           
           

            

                  
        <?php $records = mysqli_query($dbc,"select * from add_book where category='EEE'  ");
        
        while($data = mysqli_fetch_array($records)){
  
        ?>  
        
        
        <div class="arrival">
                     <div class="box">
                        <div class="book-thumb">
                        <img src="image/<?php echo $data['BookCover']; ?>" >
                        </div>
                        <div class="content">
                            <h6>Book Name:<?php  echo $data['BookName'];?></h6>
                           
                            <a href="download_pdf.php?pdf=<?php echo $data['pdf'];?>" class="btn-small mr-2">Download</a>
                                   <a  href="show_pdf.php?pdf=<?php echo $data['pdf'];?>" href="" class="btn-round mr-2"><i class="fa fa-eye"></i></a>
                                   <a href="wishlist_manage.php?id=<?php echo $data['id'];?>" class="btn-round"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
        </div>
        
        
        
                       <?php
                      }
        
                    ?>
          
                    </div>
        
            
        
                </div>
            </section>
</body>
</html>