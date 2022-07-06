<?php 
require 'config.php';
if(isset($_SESSION['USER_LOGIN'])){
    $uid=$_SESSION['USER_ID'];
}

if(isset($_POST['title'])){

    $title = $_POST['title'];

        $sql ="INSERT INTO task_manager(title,user_id,task) VALUE('$title','$uid','not complete')";
        $res = mysqli_query($dbc,$sql);
}
        
        if($res){
            header("Location:task_manager.php");


        
    }

    ?>    
           
    

