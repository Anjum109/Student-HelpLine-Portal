<?php


    
    include "config.php";
    
    
    
   
        $id = $_GET['id'];
    
        $query = "DELETE FROM feedback WHERE id='$id'";
        $query_run = mysqli_query($dbc, $query);
    
        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:feeback_display.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    
    
    ?>