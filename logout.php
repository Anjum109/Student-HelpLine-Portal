<?php 


include 'config.php';



error_reporting(0);

if(isset($_SESSION['Useremail'])){
    unset($_SESSION['Useremail']);
}

header("location: index.php");

?>