<?php 

include 'config.php';


if (isset($_POST["submit"])) {

    $errors = array();
    if (isset($_FILES['poster']) && $_FILES['poster']['error'] == 0) {

        $poster= $_FILES['poster']['name'];
        
        $file_tmp = $_FILES['poster']['tmp_name'];
        $file_type = $_FILES['poster']['type'];
        $file_ext = pathinfo($poster, PATHINFO_EXTENSION);

        $extensions = array("jpeg", "jpg", "png", "gif");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
        }

        

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "image/" . $poster);

         //   $BookName = $dbc->real_escape_string($_POST["BookName"]);
          //  $AuthorName= $dbc->real_escape_string($_POST["AuthorName"]);
           $category = $dbc->real_escape_string($_POST["category"]);
           $content= $dbc->real_escape_string($_POST["content"]);
           
            //$pdf=$_FILES['pdf']['name'];
            //$pdf_type=$_FILES['pdf']['type'];
           // $pdf_size=$_FILES['pdf']['size'];
           // $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
           // $pdf_store="pdf/".$pdf;
  
          //  move_uploaded_file($pdf_tem_loc,$pdf_store);
          $name = $_FILES['file']['name'];
//$poster =$_FILES['file']['poster'];
$tmp = $_FILES['file']['tmp_name'];


move_uploaded_file($tmp,  "videos/".$name);


            $sqlInsert = "INSERT INTO videos (id, name,poster,category,content) VALUES ('','" . $name. "','" . $poster. "','" . $category. "','".$content."')";
            $result = $dbc->query($sqlInsert);

            if ($result) {
                ?>
                 
                "<script> window.location="add_video.php"
            alert(added);
            </script>"
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
    <link rel="stylesheet" href="css/add_video.css">
</head>
<body>
   

      
<h2><a href="skill_develop_manage.php"><i class="fas fa-times-circle"></i></a></h2>
<br>
<h3 class="ribbon">Add New Video</h3>
<section id="add-book"><br><br>
       
       
       <div class="box">
           
               <h1>Provide Below Details to Add Video</h1>
             <br>
               <form action="" method="POST" class ="form" enctype="multipart/form-data">
              
                    
                  
                      <div class="file-upload-wrapper" data-text="Select video"><i class="fa fa-cloud-upload" id="img"></i>
                  <input name="file" type="file" class="file-upload-field" value=""  require>
                  
                      </div><br> 
                      <div class="file-upload-wrapper" data-text="Choose Cover"><i class="fa fa-cloud-upload" id="img"></i>
                  <input name="poster" type="file" class="file-upload-field" value=""  require>
                  
                      </div> <br>
                     
             

    
                      <ul class="dropdown" id="d" >
                   <i class="fas fa-book" id="category"></i>
                            <input type="text" name="category" value="Select Category" readonly id="v" style="font-size: 12PX;">
                            <i class="fa fa-chevron-down"></i>
                            <ul class="option"id="o" >
                                <li category="Java">java</li>
                                <li category="Python">python</li>
                                <li category="Python">html</li>
                                <li category="Python">android</li>
                                <li category="Python">php</li>
                                <li category="C">C</li>
                                
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



<br>
<br>
<br>
                  <i class="fas fa-box" id="author"></i>
                   <input class="book" type="text" placeholder="Content Name" name="content"id="at"   required><br><br>
                         <br>




                
                    <button type="submit" name="submit">Add video</button>
                    
               </form>
             
              
       </div>
   


   </section>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="js/add-book.js"></script>
</body>
</html>