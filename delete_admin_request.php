<?php


    
    include "config.php";
    
    
    
    if(isset($_POST['deletedata']))
    {
        $id = $_POST['delete_id'];
    
        $query = "DELETE FROM admininfo WHERE id='$id'";
        $query_run = mysqli_query($dbc, $query);
    
        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:admin_status.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }
    
    ?>