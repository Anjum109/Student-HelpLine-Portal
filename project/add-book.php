<?php 

include 'config.php';

if (isset($_FILES["BookCover"])) {
    try {
     
      // (B2) READ IMAGE FILE & INSERT
      $stmt = $pdo->prepare("INSERT INTO `images` (`BookCover`) VALUES (?)");
      $stmt->execute([$_FILES["upload"]["name"], file_get_contents($_FILES["upload"]["tmp_name"])]);
      echo "OK";
    } catch (Exception $ex) { echo $ex->getMessage(); }
  }


/*
if (isset($_POST['submit'])) {
	$BookName = $_POST['BookName'];
	$AuthorName = $_POST['AuthorName'];
    $category = $_POST['category'];
    if(isset($_FILES['BookCover'])){

        $target="image/";
        $BookCover = $_FILES['BookCover']['name'];
        $tmp_name= $_FILES['BookCover']['tmp_name'];
         if($_FILES['BookCover']['error']==0){



         $newname=rand().$BookCover;
         $target=$target.$newname;
         $image = $target;
         move_uploaded_file($tmp_name,$target);





         }
      

    
    $sql = "INSERT INTO add_book (BookName,AuthorName,category,image)
					VALUES ('$BookName', '$AuthorName', '$category','$image')";
			$result = mysqli_query($dbc, $sql);
			if ($result) {
				echo "<script>alert('Wow! Successfully Book Added.')</script>";
                ?>
               
               <?php 
			
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}

    }  }*/

?>
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/add-book.css">
</head>
<body>

<h2><a href="index.php"><i class="fas fa-times-circle"></i></a></h2>

<section id="add-book"><br><br>
       
       
       <div class="box">
           
               <h1>Provide Below Details to Add Book</h1>
             <br>
               <form action="" method="POST" class ="form" enctype="multipart/form-data">
               <i class="fas fa-book" id="bookname"></i>
                   <input  class="book" type="text" placeholder="Book Name" name="BookName"id="bn" required>
                   <br><br>


                   <i class="fas fa-user" id="author"></i>
                   <input class="book" type="text" placeholder="Author Name" name="AuthorName"id="at"   required><br><br>


                   <i class="fas fa-book" id="category"></i>
                   <input class="book" type="text" placeholder="Category" name="category"id="ct"  required>
                   <br><br>

                   
                  <div class="file-upload-wrapper" data-text="Choose Book Cover"><i class="fa fa-cloud-upload" id="img"></i>
                  <input name="BookCover" type="file" class="file-upload-field" value=""  accept=".png,.gif,.jpg,.webp"  require>
                      </div>
                     
                    <button type="submit" name="submit">Add Book</button>
               </form>
             
              
       </div>
   


   </section>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/add-book.js"></script>
</body>
</html>