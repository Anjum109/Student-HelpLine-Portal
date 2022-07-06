<?php 
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/Fontawesome.css">
    <link rel="stylesheet" href="css/all-books.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Document</title>

    <style>
        body{
            background-color: #d7dbd7;
        }
    </style>
</head>
<body>
<h1 class="banner" >My Book List</h1><br><br><br><br><br><br><br><br><br><br>


<section class="arrivals" id="arrivals">
        
           
           

            

                  
        <?php 
$uid=$_SESSION['USER_ID'];
$res=mysqli_query($dbc,"select add_book.BookName,add_book.AuthorName,add_book.BookCover,add_book.pdf,wishlist.id from add_book,wishlist where wishlist.book_id=add_book.id and wishlist.user_id='$uid'");
        // $res=mysql_query("SELECT add_book.* , wishlist.* FROM add_book ,wishlist  WHERE wwishlist.book_id = add_book.id and wishlistS.user_id='$uid'");
        while($data=mysqli_fetch_assoc($res))
{
 ?>
  
        
        
        <div class="arrival">
                     <div class="box">
                        <div class="book-thumb">
                        <img src="image/<?php echo $data['BookCover']; ?>" >
                        </div>
                        <div class="content">
                           
                            <h6>Book Name:<?php  echo $data['BookName'];?></h6>
                            <h6>Author Name: <?php  echo $data['AuthorName'];?></h6>


                           
                            <a href="download_pdf.php?pdf=<?php echo $data['pdf'];?>" class="btn-small mr-2">Download</a>
                            <a href="show_pdf.php?pdf=<?php echo $data['pdf'];?>" class="btn-round mr-2"><i class="fa fa-eye"></i></a>
                                   
                       
                                   <a href="delete_mywishlist_book.php?id=<?php echo $data['id'];?>"class="btn-round"><i class="fas fa-trash"></i></a>
                        
        
                                   
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