<?php
  include 'config.php';?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  </title>
    
    <link rel="stylesheet" href="css/admin_dashboard.css">
    <link rel="stylesheet" href="css/total_quiz.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <style>

body{

background-color: #d7dbd7;
}
	</style>    
<body>


<section class="h">

<span class="s">Q</span>
    <span class="s" >U</span>
    <span class="s" >I</span>
    <span class="s">Z</span>
    <span class="space"></span>
    
    <span class="s">S</span>
   
    <span class="s">E</span>
    <span class="s">T</span>
  

</section><br><br>

<section class="arrivals" id="arrivals"style="margin-top: 200px; margin-left:55px; ">
<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM category where id='1' ";
		$res = mysqli_query($dbc,$sql);
	
      while ($data=mysqli_fetch_array($res)) {
 
		
			?>

		<div class="arrival-wrapper">

			<a href="total_javaquiz_show.php" class=" box">
				<div class="image">
				</div>
 
				<div class="content">
				
				<i class="fas fa-edit"></i>
				<p  style=" margin-left:65px;padding:5px;">Quiz </p>
					<h4 style="font-size: 26px; margin-left:70px; padding:5px;"><?php echo $data['cat_name'];?> </h4>
					
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>



<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM category where id='2' ";
		$res = mysqli_query($dbc,$sql);
	
      while ($data=mysqli_fetch_array($res)) {
 
		
			?>

		<div class="arrival-wrapper">

			<a href="total_htmlquiz_show.php" class=" box">
				<div class="image">
				</div>
 
				<div class="content">
				
				<i class="fas fa-edit"></i>
				<p  style=" margin-left:65px;padding:5px;">Quiz </p>
					<h4 style="font-size: 26px; margin-left:70px; padding:5px;"><?php echo $data['cat_name'];?> </h4>
					
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>


<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM category where id='3' ";
		$res = mysqli_query($dbc,$sql);
	
      while ($data=mysqli_fetch_array($res)) {
 
		
			?>

		<div class="arrival-wrapper">

			<a href="total_phpquiz_show.php" class=" box">
				<div class="image">
				</div>
 
				<div class="content">
				
				<i class="fas fa-edit"></i>
				<p  style=" margin-left:65px;padding:5px;">Quiz </p>
					<h4 style="font-size: 26px; margin-left:70px; padding:5px;"><?php echo $data['cat_name'];?> </h4>
					
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>

<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM category where id='4' ";
		$res = mysqli_query($dbc,$sql);
	
      while ($data=mysqli_fetch_array($res)) {
 
		
			?>

		<div class="arrival-wrapper">

			<a href="total_mixquiz_show.php" class=" box">
				<div class="image">
				</div>
 
				<div class="content">
				
				<i class="fas fa-edit"></i>
				<p  style=" margin-left:65px;padding:5px;">Quiz </p>
					<h4 style="font-size: 26px; margin-left:70px; padding:5px;"><?php echo $data['cat_name'];?> </h4>
					
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>


		</section>		

</body>