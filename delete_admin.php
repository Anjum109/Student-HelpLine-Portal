<?php


    
    include "config.php";
    
    
  
        $id = $_POST['id'];
    
        $query = "DELETE FROM admininfo WHERE id='$id'";
        $query_run = mysqli_query($dbc, $query);
    
        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:all_admin.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    
    
    ?>