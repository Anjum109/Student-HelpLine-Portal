<?php 
include "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/search_book.css">
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
    <span class="s">B</span>
    <span class="s">O</span>
    <span class="s">O</span>
    <span class="s">K</span>
   
</div>

<form action="" method="GET">
<div class="wrapper">
	<div class="search_box">
		<button type="submit" class="search_btn"><i class="fas fa-search"></i></button>
		<input type="text" class="input_search" placeholder="Search Here ... By Book Name"name="BookName" value="<?php if(isset($_GET['BookName'])){echo $_GET['BookName'];} ?>">
	</div>
</div>
</form>
<section id="s-book">
<?php 
                               
							

							   if(isset($_GET['BookName']))
							   {
								   $BookName = $_GET['BookName'];

								   $query = "SELECT * FROM add_book WHERE BookName LIKE '%{$BookName}%'";
								   $query_run = mysqli_query($dbc, $query);

								   if(mysqli_num_rows($query_run) > 0)
								   {
									   foreach($query_run as $row)
									   {
										   ?> <div class="arrival">
										   <div class="box">
											  <div class="book-thumb">
											  <img src="image/<?php echo $row['BookCover']; ?>" style="width: 80px; height:80px">
											  </div>
											  <div class="content" style="margin-top: 8px;">
												  <h6>Book ID: <?php  echo $row['id'];?></h6>
												  <h6>Book Name:<?php  echo $row['BookName'];?></h6>
												  <h6>Author Name: <?php  echo $row['AuthorName'];?></h6>
												 
												  <a href="download_pdf.php?pdf=<?php echo $row['pdf'];?>" class="btn-small mr-2">Download</a>
														 <a href="show_pdf.php?pdf=<?php echo $row['pdf'];?>" class="btn-round mr-2"><i class="fa fa-eye"></i></a>
														 
														 <a href="wishlist_manage.php?id=<?php echo $row['id'];?>"class="btn-round"><i class="fa fa-heart"></i></a>
											  
							  
														 
													  </div>
										  </div>
							  </div>
							  
							  
																			  <?php
																		  }
																	  }
																	  else
																	  {
																		  echo "<p style='margin-left:600px;margin-top:50px;'><b>No Record Found</b> </p>";
																		  
																	  }
																  }
																 
															  ?>

</section> 
</body>
</html>