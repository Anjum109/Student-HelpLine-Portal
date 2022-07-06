<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/total_course.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Do you want to Delete this course??')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
<style>

    body{

        background-color: #d7dbd7;
    }
</style>


</head>
<body>
    
<section class="h">

<span class="s">T</span>
    <span class="s" >O</span>
    <span class="s" >T</span>
    <span class="s">A</span>
    <span class="s">L</span>
    <span class="space"></span>
    
    <span class="s">C</span>
   
    <span class="s">O</span>
    <span class="s">U</span>
  
    <span class="s" >R</span>
    <span class="s" >S</span>
    <span class="s">E</span>
    
</section><br><br><br><br><br><br><br><br><br><br>


<div class="tab-content">  
<?php 
include 'config.php';
$q="select * from programming_languages ";
$query=mysqli_query($dbc,$q);
while ($course_list=mysqli_fetch_array($query)) {

?>

  		<div class="card ml-5 mt-4" style="width: 18rem;">
 
  <div class="card-body">
    <h5 class="card-title"><?php echo $course_list['language_name']; ?> <a href="edit_topics.php?course_name=<?php echo $course_list['language_name']; ?>" class="h6 text-info float-right">course topic <i class="fas fa-pen"></i></a></h5>
    <p class="card-text"><a href="delete_course.php?course_name=<?php echo $course_list['language_name']; ?>" class="delete">delete course <i class="fas fa-trash-alt"></i></a></p>

 
  </div>
</div>

<?php } ?>


</div>
</body>
</html>