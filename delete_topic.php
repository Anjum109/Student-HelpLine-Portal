<?php 

include("config.php"); 
	$course_name=$_GET['course_name'];


       		

       		$id=$_GET['course_id'];
       		$q="DELETE from courses where id='$id'";
			$result=mysqli_query($dbc,$q);
			if ($result) {
				header("location:edit_topics.php?course_name=$course_name");
			}








 ?>