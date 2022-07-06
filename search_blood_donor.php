
<?php 
include "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="css/search_donor.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="heading">
<span class="s">S</span>
    <span class="s" >E</span>
    <span class="s" >A</span>

    <span class="s">R</span>
    <span class="s">C</span>
    <span class="s">H</span>
    <span class="space"></span>
    <span>D</span>
    <span>O</span>
    <span>N</span>
    <span>O</span>
    <span>R</span>
   
</div>

<form action="" method="GET">
<div class="wrapper">
	<div class="search_box">
		<button type="submit" class="search_btn"><i class="fas fa-search"></i></button>
		<input type="text" class="input_search" placeholder="Search Here ... By bloodgroup" name="bloodgroup" value="<?php if(isset($_GET['bloodgroup'])){echo $_GET['bloodgroup'];} ?>">
	</div>
</div>
</form>
<section id="donor">
<div class="content"style="margin-left: 130px;"> 
<?php 
                               
                               $con = mysqli_connect("localhost","root","","studenthelpline");

                               if(isset($_GET['bloodgroup']))
                               {
                                   $bloodgroup = $_GET['bloodgroup'];

                                   $query = "SELECT * FROM donor_list WHERE bloodgroup='$bloodgroup' ";
                                   $query_run = mysqli_query($con, $query);

                                   if(mysqli_num_rows($query_run) > 0)
                                   {
                                       foreach($query_run as $data)
                                       {
                                           ?>
                                         
                                           
                                           
                                           <div class="card" >
                                           
                                           <div class="icon"><i class="material-icons md-36">face</i></div>
                                           <p class="title"><?php  echo $data['bloodgroup'];?></p>
                                           <p class="text">Name : <?php  echo $data['dname'];?> </p>
                                           <p class="text">Contact : <?php  echo $data['contact'];?> </p>
                                           <p class="text">Location : <?php  echo $data['location'];?></p>
                                           
                                           </div>
                                         
                                           
                                           
                                           
																			  <?php
																		  }
																	  }
																	  else
																	  {
																		  echo "<p style='margin-left:450px;margin-top:8px;'><b>No Record Found</b> </p>";
																		  
																	  }
																  }
																 
															  ?>

</div>

</div>

</section>

</body>
</html>