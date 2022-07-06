<?php


    
    include "config.php";
    
    
  
        $id = $_GET['course_name'];
    
        $query = "DELETE FROM programming_languages WHERE language_name='$id'";
        $query_run = mysqli_query($dbc, $query);

     $q = "DELETE  FROM courses  WHERE course_name='$id'";
     $q_run = mysqli_query($dbc, $q);
        
            header("Location:total_course.php");
        
    
    ?>