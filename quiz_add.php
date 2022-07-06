<?php 

include 'config.php';



if (isset($_POST['submit'])) {
	$que=$_POST['que'];
$option1=$_POST['option1'];
$option2=$_POST['option2'];
$option3=$_POST['option3'];
$option4=$_POST['option4'];
$ans=$_POST['ans'];
$cat_name=$_POST['cat_name'];




	$q="insert into quiz ('que','option1','option2','option3','option4','ans','cat_name') values ('$que','$option1','$option2','$option3','$option4','$ans','$cat_name')";
	$r=mysqli_query($dbc,$q);
    if ($r) {
        ?>
         
        "<script> window.location="manage_quiz.php"
    alert('added');
    </script>"
       <?php 
    }
	
 }


    
   
?>





