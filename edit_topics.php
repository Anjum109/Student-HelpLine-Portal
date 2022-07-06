<?php
 include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
        <!--original css -->

        <link rel="stylesheet" href="css/feedback_display.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.css">




	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<!-- google font -->
 <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

   <!--  font awsome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
 	
     body{    
    background-color: rgb(247, 244, 244);
}
    .heading{
    text-align: center;
    padding:2.5rem 0;
    margin-top: -55px;
    display: flex;
    position: absolute;
    margin-left: 340px;
   
    
  }

  .heading span{
    font-size: 2rem;
    background:rgba(255, 165, 0,.2);
    border-radius: .5rem;
    padding:.2rem 1rem;
    margin: 2px;
   
  
   
  }
  .s{
    
    box-shadow: rgba(29, 28, 28, 0.2) 0px 60px 40px -7px;
    box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.55),
    10px 10px 15px rgba(19, 18, 18, 0.12);
  }
  .heading span.space{
    background:none;
  }
  table{
    border: 1px solid #794653;
    text-align: center;
    border-radius: 0px;
    margin-top: 80px;
    margin-left: 104px;
    position: relative;
    background: linear-gradient(145deg,#f2b8cb,#e2b4b4);
    box-shadow: 9px 9px 18px #e69494,
               -9px -9px 18px #dda6a6;
}
th{
    border:1px solid #966c97;
    color:#6d1097;
    text-align: center;
    padding: 5px;
    font-weight: 700px;
   
}
th:hover{
    background: #9c769c;
    
    color: rgb(232, 146, 243);
    box-shadow: 9px 9px 18px #e69494,
               -9px -9px 18px #dda6a6;
}
td{
    border: 1px solid #794653;
    color:rgb(97, 27, 97);
    text-align: center;
    padding:5px;
    transition: all .2s ease-in;
    cursor: pointer;
    
   
    

}
td:hover{
    background: #9c769c;
    
    color: rgb(232, 146, 243);
    box-shadow: 9px 9px 18px #e69494,
               -9px -9px 18px #dda6a6;
               transform: scale(1.02);
               box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
}

     
 </style>
</head>

<body>
	


 <div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
<!-- ========================================================================================================================== -->



  		<div class="col-md-10 ">   <!--  main body content starts -->


       <div class="col-lg-12">
       	<h3 class="text-center mt-2">


    <div class="heading">

    <span class="s">M</span>
    <span class="s" >A</span>
    <span class="s" >N</span>
    <span class="s" >A</span>
    <span class="s">G</span>
    <span class="s">E</span>
    <span class="space"></span>
    <span class="s">T</span>
    <span class="s">O</span>
    <span class="s">P</span>
    <span class="s">I</span>
    <span class="s">C</span>
    
</div>

           </h3><br>


           
       	<table 	class="table table-striped table-hover shadow">
       		
       		<tr class="font-weight-bold">
       			<th>Id</th>
       			<th>TOPIC NAME</th>
       			<th>DESCRIPTION</th>
                   <th colspan="2" >OPERATION</th>
       			

       		</tr>


           
       		<?php

       		 
       		$coursename=$_GET['course_name'];
       		$q="select * from courses where course_name='$coursename'";
			$result=mysqli_query($dbc,$q);
			while ($res=mysqli_fetch_array($result)) {
        	

       		?>

       		<tr class=" ">
       			<td><?php echo $res['id'] ?></td>

       			<td><?php echo $res['topic_name']; ?></td>

       			<td><textarea rows="2" cols="50" class=""><?php echo html_entity_decode($res['description'],ENT_QUOTES); ?></textarea></td>

       			<td><a class=" no-gutters text-primary" href="update_topic.php?course_id=<?php echo $res['id'] ?>" style="text-decoration: none; font-size:25px;"	><i class="fa fa-pencil-square ml-2" aria-hidden="true"title="Update" ></i></a></td>

       			<td><a href="delete_topic.php?course_id=<?php echo $res['id'] ?>&amp;course_name=<?php echo $res['course_name']; ?>" class="delete" style="text-decoration: none;font-size:25px; color:red;"><i title="delete"class="fa fa-trash-o ml-2" aria-hidden="true"></a></td>

       		</tr>

       	<?php } 

       

       	?>
       	</table>
       </div>




		</div>
	</div>
	</div>


<body>	
</html>