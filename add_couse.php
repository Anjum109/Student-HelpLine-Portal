<?php 

include 'config.php';



if (isset($_POST['submit'])) {
	$languagename=$_POST['course_name'];
$languageimg=$_FILES['course_image'];


$filename=$languageimg['name'];
print_r($languageimg);		
$fileerror=$languageimg['error'];   
$filetmp=$languageimg['tmp_name'];


$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg' );


if (in_array($filecheck,$fileextstored)) {
	$destinationfile='uploadimg/'.$filename;
	move_uploaded_file($filetmp,'uploadimg/'.$filename);

	$q="insert into programming_languages(language_name,language_image) values('$languagename','$destinationfile')";
	$r=mysqli_query($dbc,$q);
    if ($r) {
        ?>
         
        "<script> window.location="add_couse.php"
    alert('added');
    </script>"
       <?php 
    }
	
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
   

      
<h2><a href="manage_courses.php"><i class="fas fa-times-circle"></i></a></h2>
<br>
<h3 class="ribbon">Add New Course</h3>
<section id="add-book"><br><br>
       
       
       <div class="box">
           
               <h1 style="margin-left:7px;">Provide Below Details to Add Course</h1>
             <br>
               <form action="" method="POST" class ="form" enctype="multipart/form-data">
              
               <i class="fas fa-box" id="author"></i>
                   <input class="book" type="text" placeholder="Course Name"name="course_name"id="at"   required><br><br>
                        

                  
                      <div class="file-upload-wrapper" data-text="Select cover"><i class="fa fa-cloud-upload" id="img"></i>
                  <input  name="course_image" type="file" class="file-upload-field" value=""  require>
                  
                      </div><br> 
                     



<br>

                



                
                    <button type="submit" name="submit">Add Course</button>
                    
               </form>
             
              
       </div>
   


   </section>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="js/add-book.js"></script>
</body>
</html>