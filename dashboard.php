<?php 

include 'config.php';
error_reporting(0);
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
<style>
	@media screen and (max-width: 768px) {
	#sidebar {
		background: white;
		width: 200px;
	}

	#content {
		width: calc(100% - 60px);
		left: 200px;
	}

	#content nav .nav-link {
		display: none;
	}
}

</style>

	
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar"><br>
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
				<a href="skill_develop_manage.php"> &nbsp; &nbsp; 
					<i class='fas fa-desktop' ></i> &nbsp;&nbsp; &nbsp; 
					<span class="text">Skill Develop Manage</span>
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
				<a href="BloodBank_manage_admin.php">
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
					
					<button type="submit" class="s"><i class='bx ' ></i></button>
				</div>
			</form>
		
			<li>
			<a href="admin_status.php" class="notification">
				<i class='bx bxs-user' data-toggle="tooltip" data-placement="bottom" title="SEE ALL ADMIN REQUEST" ></i> &nbsp

				
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
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			

			
			</div>

		

				<section class="arrivals" id="arrivals">		
					<div class=" arrival">
	

					<?php 
						$sql= "SELECT * FROM userinfo ";
						$res = mysqli_query($dbc,$sql);
						if($data = mysqli_num_rows($res)){

						
                            ?>

						<div class="arrival-wrapper">
				
							<a href="all_user_show.php" class=" box">
								<div class="image">
								</div>

								<div class="content">
								<i class='fas fa-user-alt' ></i>
									<?php echo '<p > '.$data.'</p>';?>
									<h4 style="font-size: 18px; margin-left:65px;" > Total User</h4>
								   
								</div>
							</a>
				
						   
						</div>
				
					</div>
						<?php
						} ?>



   <div  class=" arrival" >
	

	<?php 
		$sql= "SELECT * FROM userinfo where profession='Student'  ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){

		
			?>

		<div class="arrival-wrapper">
		
			<a href="all_student_show.php"class=" box">
				<div class="image">
				</div>

				<div class="content">
				<i class='fas fa-user-alt' ></i>
					<?php echo '<p > '.$data.'</p>';?>
					<h4 style="font-size: 18px; "> Student</h4>
				   
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>





<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM userinfo where profession='teacher'  ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){

		
			?>

		<div class="arrival-wrapper">

			<a href="all_teacher_show.php" class=" box">
				<div class="image">
				</div>

				<div class="content">
				<i class='fas fa-user-alt' ></i>
					<?php echo '<p > '.$data.'</p>';?>
					<h4 style="font-size: 18px; "> Teacher</h4>
				   
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>





<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM feedback ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){

		
			?>

		<div class="arrival-wrapper">

			<a href="feeback_display.php" class=" box">
				<div class="image">
				</div>

				<div class="content">
				<i class="fas fa-comment"></i>
					<?php echo '<p > '.$data.'</p>';?>
					<h4 style="font-size: 18px; margin-left:25px; padding:2px;"> Total Feedback</h4>
				   
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>


<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM admininfo where status='yes' ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){

		
			?>

		<div class="arrival-wrapper">

			<a href="all_admin.php" class=" box">
				<div class="image">
				</div>

				<div class="content">
				<i class="bx bxs-group"></i>
					<?php echo '<p > '.$data.'</p>';?>
					<h4 style="font-size: 18px; margin-left:35px; padding:2px;"> Total Admin</h4>
				   
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>

		</section>		








		</main>

		

		<!-- MAIN -->
	</section>

	


	<!-- CONTENT -->
	

	<script src="js/admin_dashboard.js"></script>
</body>

</html>