<?php


    
    include "config.php";
    
    
    
    if(isset($_POST['deletedata']))
    {
        $id = $_POST['delete_id'];
    
        $query = "DELETE FROM reminder WHERE id='$id'";
        $query_run = mysqli_query($dbc, $query);
    
        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:reminder.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }
    
    ?>