
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<!-- google font -->
 <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
 

 <style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Rye);
.ribbon {
    padding: 5px;
    height: 30px;
    margin-top: 80px;
    background: #648fb3;
    clip-path: polygon(100% 0, 95% 50%, 100% 100%, 0% 100%, 5% 50%, 0% 0%);
    font: normal 30px/60px 'Rye';
    text-transform: uppercase;
    color: #dddeda;
    letter-spacing: 0.18em;
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
  margin-left: 520px;
    max-width: 300px;
    
  }
  .book{
border-radius: 5px;
outline:none;
border: 1px solid burlywood;
width: 300px;
padding:4px;
height:30px ; 
margin-bottom:10px;
margin-left: 50px;
margin-left:10px ;
text-align:center;

}

  .box {
width: 380px;
height: 370px;
padding:10px ;
margin: 60px;
margin-left:480px ;

margin-top:15px ;	
border-radius: 25px;
box-shadow: 0 0 27px grey;
  }
  .box h1{
margin-left: 30px;
font-size:20px ;
color: rgb(219, 219, 102);
font-family: sans-serif;
}
  .box:hover{
box-shadow: 2px 2px 5px #555;

}
 button{
border-radius: 13px;
outline:none;
border: 1px solid burlywood ;
width: 150px;
height:25px ; 
text-align: center;
background-color:cornflowerblue;
color: mintcream;
position: absolute;

text-align: center;


}


button:hover{

    box-shadow: 2px 2px 5px #555;
}

label{

  font-style:bold;
  margin-top:10px;
  margin-left:20px; ;
}
   
 </style>
</head>

<body>     

<h3 class="ribbon">UPDATE TOPIC </h3>
<section id="add-book"><br><br>
       
      
<div class="box">
           
              
       

<!-- ========================================================================================================================== -->


                              <!-- form starts -->

           
<?php 

include("config.php"); 
     
 if (isset($_POST['submitupdate']))
 {


         $course_id=$_POST['cors_id'];
         echo $course_id;
         $course_name=$_POST['course_name'];
         $topic_name=$_POST['topic_name'];
         $description=$_POST['editor'];

         $q="UPDATE `courses` SET `topic_name`='$topic_name',`description`='$description',`course_name`='$course_name' WHERE id='$course_id'";
          $result=mysqli_query($dbc,$q);
          if ($result) {
           echo "<script>alert('Updated.')</script>";
           header("location:edit_topics.php?course_name=".$course_name);
          }}
        
          $course_id=$_GET['course_id'];
          $q="select * from courses where id='$course_id'";
      $result=mysqli_query($dbc,$q);
      while ($res=mysqli_fetch_array($result)) {

          ?>

<h1>Provide Below Details to Update</h1>
             <br>
<form  method="POST" action="" class="ml-3" >
  
  <input  type="hidden" name="cors_id" value="<?php echo $res['id']; ?>">
  &nbsp; &nbsp;<label><b>course name:</b></label><br>
 <input style=""type="text" name="course_name" readonly="readonly" class="book" value="<?php echo $res['course_name'] ?>"><br>
 &nbsp;  &nbsp;<label><b>topic name:</b></label><br>
 <input type="text" name="topic_name" class="book" value="<?php echo $res['topic_name'] ?>">
 &nbsp; &nbsp;  &nbsp;  &nbsp;  <label><b>content:</b></label><br>

<textarea id="editor" name="editor" class="book" placeholder="Enter the content..."><?php echo $res['description']; ?></textarea> <br><br>

<button type="submit" name="submitupdate" class="" style="text-align: center; margin-left:80px; ">UPDATE</button>
</form>
<?php } ?>


  </div>
  </div>
</div>







<body>  
</html>