<?php 

include 'config.php';


if (isset($_POST["submit"])) {

    
           $cat_name = $dbc->real_escape_string($_POST["cat_name"]);
         

            $sqlInsert = "INSERT INTO category (cat_name) VALUES ('" . $cat_name. "')";
            $result = $dbc->query($sqlInsert);

            if ($result) {
                ?>
                 
                "<script> window.location="add_quiz_set.php"
            alert('Added');
            </script>"
               <?php 
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
    <link rel="stylesheet" href="css/add_video.css">
</head>
<body>
   

      
<h2><a href="skill_develop_manage.php"><i class="fas fa-times-circle"></i></a></h2>
<br>
<h3 class="ribbon">Add New Quiz Set</h3>
<section id="add-book"><br><br>
       
       
       <div class="box"style="height:200px;">
           
               <h1 style="margin-left:50px;">Provide Below Details to Add </h1>
             <br>
               <form action="" method="POST" class ="form" enctype="multipart/form-data">
              
                    
                  
                  <i class="fas fa-box" id="author"></i>
                   <input class="book" type="text" placeholder="Quiz Set Name" name="cat_name"id="at"   required><br><br>
                         <br>




                
                    <button type="submit" name="submit">Add </button>
                    
               </form>
             
              
       </div>
   


   </section>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>
</html>