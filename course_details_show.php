
<!DOCTYPE html>
<html>
<head>
	<title>Student Helpline </title>



	<link rel="stylesheet" type="text/css" href="css/course_show.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet"> 

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://apis.google.com/js/platform.js"></script>



</head>
<body>


	<div class="sidemenu" id="sidebarleftmenu">
		<ul style="margin-bottom:200px;" class="sidemenulist">
			
		<a href="skill_devolopment.php"style="background-color: transparent;text-align:left;color: white;margin-left:10px;font-size:15px;"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;BACK</a>		

<?php 
		
		include "config.php";
$course_name=$_GET['course_name'];


$q="select * from courses where course_name='$course_name'";
$result=mysqli_query($dbc,$q);
while ($res=mysqli_fetch_array($result)) {
  ?>
		
  			<form action="fetch_course_details.php" method="POST">

  			<input type="hidden" name="txt1" value="<?php echo $res['id'] ?>">
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><li style="width: 300px; "><?php echo $res['topic_name']; ?></li>
		</button>
		
			</form>
			

<?php } ?>

		</ul>
	</div>

	

	<div id="mainpagecontent" class="shadow">
		
		<div class="content">
			<p>

			<?php

			if (isset($_SESSION['message'])) {
				echo $_SESSION['message'];
			}

			  ?>
			</p>
		
		</div>
			
		
	
	</div>


	




		
		

</body>
</html>