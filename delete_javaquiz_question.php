<?php


    
    include "config.php";
    
    
    
   
        $id = $_GET['id'];
    
        $query = "DELETE FROM java_quiz WHERE id='$id'";
        $query_run = mysqli_query($dbc, $query);
    
        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:total_javaquiz_show.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    
    
    ?>