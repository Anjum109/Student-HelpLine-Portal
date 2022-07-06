<?php



    
    include "config.php";
    
    $id = $_GET['id']; 
    $sql = "UPDATE comments SET seen='remove' WHERE comment_id='$id'";
        $res = mysqli_query($dbc,$sql);
    
            
            if($res){
                header("Location:helpdesk.php");
    
    
            
        }

?>