<?php


if(isset($_POST['id'])){
    
    include "config.php";
    
    $id = $_POST['id']; 
    $sql = "UPDATE task_manager SET checked='1',task='complete' WHERE id='$id'";
        $res = mysqli_query($dbc,$sql);
    }
            
            if($res){
                header("Location:task_manager.php");
    
    
            
        }

?>