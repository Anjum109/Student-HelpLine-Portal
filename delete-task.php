<?php

if(isset($_POST['id'])){
    
    include "config.php";
    
    $id = $_POST['id'];
        $sql ="DELETE FROM task_manager WHERE id= $id ";
        $res = mysqli_query($dbc,$sql);
    }
            
            if($res){
                header("Location:task_manager.php");
    
    
            
        }

?>