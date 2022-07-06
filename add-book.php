<?php 

include 'config.php';


if (isset($_POST["submit"])) {

    $errors = array();
    if (isset($_FILES['BookCover']) && $_FILES['BookCover']['error'] == 0) {

        $BookCover= $_FILES['BookCover']['name'];
        
        $file_tmp = $_FILES['BookCover']['tmp_name'];
        $file_type = $_FILES['BookCover']['type'];
        $file_ext = pathinfo($BookCover, PATHINFO_EXTENSION);

        $extensions = array("jpeg", "jpg", "png", "gif");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
        }

        

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "image/" . $BookCover);

            $BookName = $dbc->real_escape_string($_POST["BookName"]);
            $AuthorName= $dbc->real_escape_string($_POST["AuthorName"]);
            $category = $dbc->real_escape_string($_POST["category"]);
           
            $pdf=$_FILES['pdf']['name'];
            $pdf_type=$_FILES['pdf']['type'];
            $pdf_size=$_FILES['pdf']['size'];
            $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
            $pdf_store="pdf/".$pdf;
  
            move_uploaded_file($pdf_tem_loc,$pdf_store);
            $sqlInsert = "INSERT INTO add_book(BookName, AuthorName,category,BookCover,pdf) VALUES ('" . $BookName. "','" . $AuthorName. "','" . $category. "','" . $BookCover. "','" . $pdf. "')";
            $result = $dbc->query($sqlInsert);

            if ($result) {
                ?>
                "<script> window.location="add-book.php"</script>"
               <?php 
            } else {
                echo "Error in file uploading";
            }
        } 
    } else {
        echo "Error in file uploading";
    }
}
    
   
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
   

      
<h2><a href="library_manage_admin.php"><i class="fas fa-times-circle"></i></a></h2>
<br>
<h3 class="ribbon">Add New Book</h3>
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
                        
                    
                   
                  <div class="file-upload-wrapper" data-text="Choose Book Cover"><i class="fa fa-cloud-upload" id="img"></i>
                  <input name="BookCover" type="file" class="file-upload-field" value=""  require>
                  
                      </div><br>
                      <div class="file-upload-wrapper" data-text="Select Pdf"><i class="fa fa-cloud-upload" id="pdf"></i>
                  <input name="pdf" type="file" class="file-upload-field" value=""  require>
                  
                      </div><br> 
                     
                   <ul class="dropdown" id="d" >
                   <i class="fas fa-book" id="category"></i>
                            <input type="text" name="category" value="Select Category" readonly id="v" style="font-size: 12PX;">
                            <i class="fa fa-chevron-down"></i>
                            <ul class="option"id="o" >
                                <li category="Programming">Programming</li>
                                <li category="Math">Math</li>
                                <li category="EEE">EEE</li>
                                <li category="English">English</li>
                                <li category="Other">Other</li>
                                
                              
                                
                            </ul>
                        </ul> 


                    <script type="text/javascript">
                    var dropdown = document.getElementById('d');
                    var options = document.getElementById('o');
                    var input = document.getElementById('v');

                     dropdown.addEventListener('click',function(){
                       this.classList.toggle('show');
                       })
                      options.addEventListener('click',function(event){
                      const listItem = event.target;
                      console.log(listItem);
                      const value = listItem.attributes.category.value;
                      console.log(value);
                      input.value=value;
                         });
                            </script>




                        <p style="color:#f00;font-size:13px;margin-left:42px;margin-top:46px;"><b>Note:</b> Only  JPG,JPEG. PNG and GIF images are allowed.  </p>
                    <button type="submit" name="submit">Add Book</button>
                    
               </form>
             
              
       </div>
   


   </section>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/add-book.js"></script>
</body>
</html>