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
				<a href="skill_develop_manage.php"> &nbsp; &nbsp; 
					<i class='fas fa-desktop' ></i> &nbsp;&nbsp; &nbsp; 
					<span class="text">Skill Develop Management</span>
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
					
					<button type="submit" class=""><i class='bx search' ></i></button>
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
							<a class="active" href="#">Blood Bank Management</a>
						</li>
					</ul>
				</div>
			

			
			</div>

		

<section class="arrivals" id="arrivals">		
				


<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM donor_list ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){

		
			?>

		<div class="arrival-wrapper">

			<a href="total_donor.php" class=" box">
				<div class="image">
				</div>

				<div class="content">
				<i class="fas fa-user-alt"></i>
					<?php echo '<p > '.$data.'</p>';?>
					<h4 style="font-size: 18px; margin-left:55px; padding:2px;"> Total Donor</h4>
				   
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>
        


<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM blood_request WHERE complete='done' ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){

		
			?>

		<div class="arrival-wrapper">

			<a href="total_blood_request.php" class=" box">
				<div class="image">
				</div>

				<div class="content">
				<i class="fas fa-user-alt"></i>
					<?php echo '<p > '.$data.'</p>';?>
					<h4 style="font-size: 18px; margin-left:5px; padding:2px;"> Total done blood </h4>
					<h4 style="font-size: 18px; margin-left:35px; padding:2px;">  request</h4>
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>
        





<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM donor_oppinion ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){

		
			?>

		<div class="arrival-wrapper">

			<a href="total_donor_oppinion.php" class=" box">
				<div class="image">
				</div>

				<div class="content">
				<i class="fas fa-user-alt"></i>
					<?php echo '<p > '.$data.'</p>';?>
					<h4 style="font-size: 18px; margin-left:7px; padding:2px;"> Total Donor oppinion</h4>
				   
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>




<div class=" arrival">
	

	<?php 
		$sql= "SELECT * FROM blood_request WHERE complete='not done' ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){

		
			?>

		<div class="arrival-wrapper">

			<a href="total_notdone_blood_request.php" class=" box">
				<div class="image">
				</div>

				<div class="content">
				<i class="fas fa-user-alt"></i>
					<?php echo '<p > '.$data.'</p>';?>
					<h4 style="font-size: 18px; margin-left:4px; padding:2px;"> Total not done blood </h4>
					<h4 style="font-size: 18px; margin-left:50px; padding:2px;">  request</h4>
				</div>
			</a>

		   
		</div>

	</div>
		<?php
		} ?>

		</section>		






		


		</main>

		

		
	</section>

	


	
	

	<script src="js/admin_dashboard.js"></script>
</body>

</html>