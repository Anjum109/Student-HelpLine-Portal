<?php

if(isset($_POST['id'])){
   include 'config.php';

    $id = $_POST['id'];

        $todos = $dbc->prepare("SELECT id, checked FROM task_manager WHERE id=?");
        $todos->execute([$id]);

        $todo = $todos->fetch();
        $uId = $todo['id'];
        $checked = $todo['checked'];

        $uChecked = $checked ? 0 : 1;

        $res = $dbc->query("UPDATE task_manager SET checked=$uChecked WHERE id=$uId");

        if($res){
            echo $checked;
        }else {
            echo "error";
        }
        $dbc= null;
        exit();
    }
}else {
    header("Location: index.php");
}