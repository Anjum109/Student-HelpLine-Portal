
<?php 
include "config.php";?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/Fontawesome.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
    <link rel="stylesheet" href="css/all-books.css">


</head>
<body>

<header class="header">

    <div class="header-1">

        <a href="#" class="logo"> <i class="fas fa-book"></i> All Book</a>

      

        <div class="icons">
            
            <a href="library.php" class="fas fa-times-circle"></a>
           
            <div ></div>
        </div>

    </div>

        
    
    <section class="arrivals" id="arrivals">
        
           
           

            

                  
<?php $records = mysqli_query($dbc,"select * from add_book ");

while($data = mysqli_fetch_array($records)){


?>  


<div class="arrival">
             <div class="box">
                <div class="book-thumb">
                <img src="image/<?php echo $data['BookCover']; ?>" >
                </div>
                <div class="content">
                    <h6>Book ID: <?php  echo $data['id'];?></h6>
                    <h6>Book Name:<?php  echo $data['BookName'];?></h6>
                    <h6>Author Name: <?php  echo $data['AuthorName'];?></h6>
                   
                    <a href="download_pdf.php?pdf=<?php echo $data['pdf'];?>" class="btn-small mr-2">Download</a>
                           <a href="show_pdf.php?pdf=<?php echo $data['pdf'];?>" class="btn-round mr-2"><i class="fa fa-eye"></i></a>
                           
                           <a href="wishlist_manage.php?id=<?php echo $data['id'];?>"class="btn-round"><i class="fa fa-heart"></i></a>
                

                           
                        </div>
            </div>
</div>



               <?php
              }

            ?>
  
            </div>

    

        </div>
    </section>

	<script src="js/custom.js"></script>

</body>
</html>