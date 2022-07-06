<?php
include "config.php";



if(isset($_GET['pdf']))
{
$var_1 = $_GET['pdf'];
$dir = "pdf/";
$file = $dir . $var_1;

if (file_exists($file))
    {
   
    header('Content-Disposition: attachment; filename='.basename($file));
   
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
    }
}












?>