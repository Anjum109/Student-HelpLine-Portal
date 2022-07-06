<?php


    
    include "config.php";
    
    
    
    if(isset($_POST['deletedata']))
    {
        $id = $_POST['delete_id'];
    
        $query = "DELETE FROM comments WHERE comment_id='$id'";
        $query_run = mysqli_query($dbc, $query);
    
        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:total_answer.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }
    
    ?>