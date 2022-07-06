<?php 
include "config.php";







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

       
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


<link rel="stylesheet" href="css/my_blood_request.css">



<head>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Document</title>
</head>
<body>
<section class="book" id="book">
<Br></Br>
<h1 class="heading">
    <span>M</span>
    <span>Y</span>
    <span class="space"></span>
    <span>B</span>
    <span>L</span>
    <span>O</span>
    <span>O</span>
    <span>D</span>
    <span class="space"></span>
    <span>R</span>
    <span>E</span>
    <span>Q</span>
    <span>U</span>
    <span>E</span>
    <span>S</span>
    <span>T</span>
    
</h1>
</section>

<section>
		<div class="container">
        <?php  if(isset($_SESSION['USER_LOGIN'])){
	   $uid=$_SESSION['USER_ID'];
        $records = mysqli_query($dbc,"select * from blood_request where user_id='$uid' AND complete='not done'");

while($data = mysqli_fetch_array($records)){

      ?>
			<div class="card">
				<div class="content">
					<div class="imgBx">
                    <div class="icon"><i class="material-icons md-36">face</i></div>
					</div>
                  
                    <form action="" id="form" method="POST">
                  
					<div class="contentBx">
                    <label>Name:</label><br>
						<input type="text" name="name"value=" <?php  echo $data['name'];?>" ><br><br>
                        <label>BloodGroup:</label><br>
                        <input type="text"name="bloodgroup" value="<?php  echo $data['bloodgroup'];?>"><br><br>
                        <label>Contact:</label><br>
                        <input type="text"name="contact" value=" <?php  echo $data['contact'];?>"><br><br>
                        <label>Location:</label><br>
                        <input type="text"name="location" value=" <?php  echo $data['location'];?>"><br><br>
                        <label>Reason:</label><br>
                        <input type="text"name="reason" value=" <?php  echo $data['reason'];?>"><br><br>
                        <label>Date:</label><br>
                        <input type="text"name="date" value=" <?php  echo $data['date'];?>"><br><br><br><br>
                        

      

					</div>
                 
				</div>
               
				<ul class="sci" >
					
					<li >
						<a href="update_blood_requestinfo.php?id=<?php echo $data['id'];?>"class="btn-small mr-2"style="color:black;">Done</a>
					</li>
					
				</ul>
			</div>
           
			</form>
            <?php
                    }
                }

                   ?>
	</section>
</body>
</html>