<?php 
include "config.php";

if(isset($_POST['edit']))
{
 

  
$dname= $_POST['dname'];
$bloodgroup = $_POST['bloodgroup'];
$contact = $_POST['contact'];
$location = $_POST['location'];
$uid=$_SESSION['USER_ID'];

    
    
        

        $query ="UPDATE donor_list SET dname='$dname', bloodgroup ='$bloodgroup', contact='$contact', location ='$location' where  user_id='$uid'; ";
        $res = mysqli_query($dbc, $query);

        if ($res) {
            ?>

            <script type="text/javascript">alert('updated.');
            window.location="my_donor_info.php";
            </script>

           

           <?php 
        

          
        } 
        else {
            echo "<script>alert(' not updated.')</script>";
        }
    
}

if(isset($_POST['remove']))
{
 
    $uid=$_SESSION['USER_ID'];
    $query = "DELETE FROM donor_list where user_id='$uid'";
    $query_run = mysqli_query($dbc, $query);

    if($query_run)
    {
        ?>

            <script type="text/javascript">alert('data remove');
            window.location="my_donor_info.php";
            </script>

    }
    <?php
    }
}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

       
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


<link rel="stylesheet" href="css/my_donor_info.css">



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
    <span>I</span>
    <span>N</span>
    <span>F</span>
    <span>O</span>
    
</h1>
</section>

<section>
		<div class="container">
        <?php  if(isset($_SESSION['USER_LOGIN'])){
	   $uid=$_SESSION['USER_ID'];
        $records = mysqli_query($dbc,"select * from donor_list where user_id='$uid'");

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
						<input type="text" name="dname"value=" <?php  echo $data['dname'];?>" ><br><br>
                        <label>BloodGroup:</label><br>
                        <input type="text"name="bloodgroup" value="<?php  echo $data['bloodgroup'];?>"><br><br>
                        <label>Contact:</label><br>
                        <input type="text"name="contact" value=" <?php  echo $data['contact'];?>"><br><br>
                        <label>Location:</label><br>
                        <input type="text"name="location" value=" <?php  echo $data['location'];?>"><br><br><br><br>
                        

      

					</div>
                 
				</div>
               
				<ul class="sci" >
					<li >
						<button class="btn-small mr-2" name="edit">update</button>
					</li>
					<li >
						<button name="remove" class="btn-small mr-2">remove</button>

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