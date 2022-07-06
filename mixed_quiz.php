<?php require 'config.php';


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
body {
    background: url("bg.jpg");
	background-size:100%;
	background-repeat: no-repeat;
	position: relative;
	background-attachment: fixed;
}
/* button */
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: rgba(128, 93, 185, 0.897);
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
 
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
 
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
 
.button:hover span {
  padding-right: 25px;
}
 
.button:hover span:after {
  opacity: 1;
  right: 0;
}
.title{
	background-color: #ccc11e;
	font-size: 28px;
  padding: 20px;
	
}
.button3 {
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f4e542;
}
 
.button3:hover {
    background-color: #f4e542;
    color: Black;
}


.heading{
  text-align: center;
  padding:1rem 0;
}

.heading span{
  font-size: 2.5rem;
  background:rgba(128, 93, 185, 0.897);
  color:rgb(250, 245, 245);
  border-radius: .5rem;
  padding:.1rem 1rem;
}

.heading span.space{
  background:none;
}
</style>
</head>
<body><center>


<br><br><br>


<section class="book" id="book">

      


<h1 class="heading">
    <span>O</span>
    <span>N</span>
    <span>L</span>
    <span>I</span>
    <span>N</span>
    <span>E</span>
    <span class="space"></span>
    
    <span>Q</span>
    <span>U</span>
    <span>I</span>
    <span>Z</span>
  
</h1>
</section><br><br>

<?php 	







																if (isset($_POST['click']) || isset($_GET['start'])) {
																@$_SESSION['clicks'] += 1 ;
																$c = $_SESSION['clicks'];
																if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
																
																$fetchqry2 = "UPDATE `mix_quiz` SET `userans`='$userselected' WHERE `id`=$c-1"; 
																$result2 = mysqli_query($dbc,$fetchqry2);
																}
		  
																	
 																} else {
																	$_SESSION['clicks'] = 0;
																}
																
																//echo($_SESSION['clicks']);
																?>
<div class="bump"><br><form><?php if($_SESSION['clicks']==0){ ?> <button class="button" name="start" float="left"><span>START QUIZ</span></button> <?php } ?></form></div>
<form action="" method="post">
    				
<table><?php 


if(isset($c)) {    $records = mysqli_query($dbc,"select * from `mix_quiz` where id='$c' AND cat_name='mix'");

  while($row = mysqli_fetch_array($records)){
		  ?>
<tr><td><h3><br><?php echo @$row['que'];?></h3></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 5){ ?>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option1'];?>">&nbsp;<?php echo $row['option1']; ?><br>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option2'];?>">&nbsp;<?php echo $row['option2'];?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option3'];?>">&nbsp;<?php echo $row['option3']; ?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option4'];?>">&nbsp;<?php echo $row['option4']; ?><br><br><br></td></tr>
  <tr><td><button class="button3" name="click" >Next</button></td></tr> <?php }  }}
																	?> 
  <form>
 <?php 

 if($_SESSION['clicks']>4){ 
 
	$qry3 = "SELECT `ans`, `userans` FROM `mix_quiz`where cat_name='mix';";
	$result3 = mysqli_query($dbc,$qry3);
	$storeArray = Array();
	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
     if($row3['ans']==$row3['userans']){
		 @$_SESSION['score'] += 1 ;
	 }
}
 
 ?> 
 
 
 <h2>Result</h2>
 <span>No. of Correct Answer:&nbsp;<?php echo $no = @$_SESSION['score']; 
 unset($_SESSION['score']);?></span><br>
 <span>Your Score:&nbsp<?php echo $no*2; ?></span><br>
 <a style="color:red; text-decoration:none;"href="mixquiz_answer.php">See Answer</a>
<?php } ?>

</center>
</body>
</html>