<?php 

include 'config.php';

if (isset($_POST['submit'])) {
	$topic_name=$_POST['topic_name'];

$description=$_POST["description"];
$course_name=$_POST['course_name'];

	$q="insert into courses(topic_name,description,course_name) values('$topic_name','$description','$course_name')";
	$r=mysqli_query($dbc,$q);
    if ($r) {
        ?>
         
        "<script> window.location="add_course_topic.php"
    alert('added');
    </script>"
       <?php 
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
<h3  class="ribbon">Add New Topic</h3>
<section id="add-book"><br><br>
       
       
       <div class="box">
           
               <h1 style="margin-left:16px;">Provide Below Details to Add  topic</h1>
             <br>
               <form action="" method="POST" class ="form" enctype="multipart/form-data">
               <ul class="dropdown" id="d" >
                   <i class="fas fa-book" id="category"></i>
                            <input type="text" name="course_name" value="Select Course" readonly id="v" style="font-size: 12PX;">
                            <i class="fa fa-chevron-down"></i>
                            <ul class="option"id="o" >


                            <?php $records = mysqli_query($dbc,"select * from programming_languages");

while($data = mysqli_fetch_array($records)){

?> 

                                <li course_name="<?php  echo $data['language_name'];?>"> <?php  echo $data['language_name'];?> </li>
                                
                              <?php
}?>
                                
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
                      const value = listItem.attributes.course_name.value;
                      console.log(value);
                      input.value=value;
                         });
                            </script><br>
                  <br>
                  <br>

               <i class="fas fa-box" id="author"></i>
                   <input class="book" type="text" placeholder="Topic Name"name="topic_name"id="at"   required><br><br>
                   <i class="fas fa-box" id="author"></i>    
                   <textarea class="book" placeholder="Enter Content" name="description"id="at"></textarea>
                
                  <br>
                  <br>
                  <br>
                
                    <button type="submit" name="submit">Add </button>
                    
               </form>
             
              
       </div>
   


   </section>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="js/add-book.js"></script>
</body>
</html>