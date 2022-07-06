<?php 

include 'config.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/admin_dashboard.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

	<title> Admin Dashboard Panel</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
	<img id="main-logo" src="image/ss.png" alt="" style="width:280px;height:
                100px;   padding-top:4px;"/>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				
			</li>
			<li>
				<a href="dashboard.php">
					<i class='bx bxs-home' ></i>
					<span class="text">Home</span>
				</a>
			</li>
		
			<li>
				<a href="helpdesk_manage_admin.php"> &nbsp; &nbsp; 
					<i class='fas fa-question' ></i> &nbsp;&nbsp; &nbsp; 
					<span class="text">Q & A Management</span>
				</a>
			</li>


			
            <li>
				<a href="library_manage_admin.php">
					<i class='bx bxs-book' ></i>
					<span class="text">Library Management</span>
				</a>
			</li>
            <li>
				<a href="Bloodbank_manage_admin.php">
					<i class='fas fa-burn' ></i>
					<span class="text">Blood Bank Management</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			

       
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
<?php 
$sql_app=mysqli_query($dbc,"SELECT COUNT(status) as total from admininfo where status =' ' ;" );
$c=mysqli_fetch_assoc($sql_app);

?>


		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
				
					<button type="submit" class="search-btn"><i class='bx bx' ></i></button>
				</div>
			</form>
			
			<li>
			<a href="admin_status.php" class="notification">
				<i class='bx bxs-user' ></i> &nbsp
				<span class="num"> <?php echo $c['total']; ?>
				</span>
			</a>
			</li>
			
			<a href="admin_profile.php" class="profile">
			<?php
			
			echo "<img class='img-circle profile_img' heigh=40 width=40 src='image/".$_SESSION['pic']." '>";
			
			?>
			</a>

			

		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Skill Develop Management</a>
						</li>
					</ul>
				</div>
			

			
			</div>

		

<section class="arrivals" id="arrivals">		
				
<div class=" arrival">
	

		<div class="arrival-wrapper">

			<a href="manage_courses.php" class=" box">
				<div class="image">
				</div>

				<div class="content">
			<i class="fas fa-book"></i>  
			<p  style=" margin-left:55px;">Courses</p>
					<h4 style="font-size: 16px; margin-left:70px; padding:2px;"> manage</h4>
				   
				</div>
			</a>

		   
		</div>

	</div>
	


	<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM  programming_languages ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){

		
			?>

		<div class="arrival-wrapper">

			<a href="total_course.php" class=" box">
				<div class="image">
				</div>

				<div class="content">
				<i class="fas fa-book"></i>
					<?php echo '<p > '.$data.'</p>';?>
					<h4 style="font-size: 18px; margin-left:55px; padding:2px;"> Total course</h4>
				   
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>

	
	<div class=" arrival">
	

		<div class="arrival-wrapper">

			<a href="add_video.php" class=" box">
				<div class="image">
				</div>

				<div class="content">
				<i class="fas fa-video"></i> 
				<p  style=" margin-left:55px;">New </p>
					<h4 style="font-size: 16px; margin-left:55px; padding:2px;"> Add Videos</h4>
				   
				</div>
			</a>

		   
		</div>

	</div>
	
	<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM videos ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){

		
			?>

		<div class="arrival-wrapper">

			<a href="total_video.php" class=" box">
				<div class="image">
				</div>

				<div class="content">
				<i class="fas fa-video"></i>
					<?php echo '<p > '.$data.'</p>';?>
					<h4 style="font-size: 18px; margin-left:55px; padding:2px;"> Total video</h4>
				   
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>


<div class=" arrival">
	

	

		<div class="arrival-wrapper">

			<a href="total_quiz.php" class=" box">
				<div class="image">
				</div>

				<div class="content">
				<i class="fas fa-edit"></i>
				<p  style=" margin-left:55px;">Manage </p>
					<h4 style="font-size: 18px; margin-left:55px; padding:2px;"> Total quiz</h4>
				   
				</div>
			</a>

		   
		</div>

	</div>
	








		</section>		


		</main>

		
	</section>
	

	<script src="js/admin_dashboard.js"></script>
</body>

</html>