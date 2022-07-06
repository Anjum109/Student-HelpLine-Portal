<?php
  include 'config.php';?>


<?php 




$ids = $_GET['id'];
if (isset($_POST['submit'])) {


$que= $dbc->real_escape_string($_POST["que"]);
$option1= $dbc->real_escape_string($_POST["option1"]);
$option2 = $dbc->real_escape_string($_POST["option2"]);

$option3= $dbc->real_escape_string($_POST["option3"]);
$option4 = $dbc->real_escape_string($_POST["option4"]);
$ans= $dbc->real_escape_string($_POST["ans"]);


$q ="UPDATE mix_quiz  SET que ='$que', option1='$option1', option2 ='$option2',option3 ='$option3', option4 ='$option4',ans='$ans' where id=$ids ";
	
	$r=mysqli_query($dbc,$q);
    if ($r) {
       
        echo "<script>alert('added.')</script>";
        header("location: total_mixquiz_show.php ");
    }
	
 }


    
   
?>










 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>

 	<!-- bootstrap CDN files -->

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

  	<!-- 		css starts -->
 <style type="text/css">
 	

    .sidebar-list
    {
        margin-right: -15px;
        
        font-family: 'Quicksand', sans-serif; 
        font-size: 14px
    }

    .sidebar-list li:hover
    {
      background-color: deepskyblue !important;
    }
     .sidebar-list li a
     {
        color:white;
        text-decoration: none;
     }
     .card1
     {
     	font-family: 'Open Sans', sans-serif;
     }
     .cardh2
     {
     	font-family: 'Lato', sans-serif;

     }
	 .ribbon {
    padding: 10px;
    height: 30px;
    width: 400px;
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
  margin-left: 240px;
  margin-bottom:30px ;
    
    
  }


     /***
Bootstrap4 Card with Tabs by @mdeuerlein
***/

/***
Bootstrap4 Card with Tabs by @mdeuerlein
***/

body {
    background-color: white;
}

.card {
    background-color: #ffffff;
    border: 1px solid rgba(0, 34, 51, 0.1);
    box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
    border-radius: 0.15rem;
}




 </style>
 </head>
 <body onload="">
 



			











  <div style="margin-top: 20px; text-align:center; margin-left:250px; ">   




        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="ribbon">Add New Question</h1>



          <form method="POST" action="">  

		 
            <div class="form-group">
              <label for="text">Question :</label>
              <input type="text" class="form-control" name="que" placeholder="Enter Question">
              
            </div>

            <div class="form-group">
              <label for="text">Option 1 :</label>
              <input type="text" class="form-control"  name="option1" placeholder="Enter option 1">
            </div>

            <div class="form-group">
              <label for="text">Option 2 :</label>
              <input type="text" class="form-control"   name="option2" placeholder="Enter option 2">
            </div>


            <div class="form-group">
              <label for="text">Option 3 :</label>
              <input type="text" class="form-control"  name="option3" placeholder="Enter option 3">
            </div>

               <div class="form-group">
              <label for="text">Option 4 :</label>
              <input type="text" class="form-control"  name="option4" placeholder="Enter option 4">
            </div>

               <div class="form-group">
              <label for="text">Answer :</label>
              <input type="text" class="form-control"  name="ans" placeholder="Enter the correct answer">
            </div>

          

            
            

            <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
          </form>



        </div>


  </div>
  		

</div>















  		
  			
  		</div>



</div>
</div>











<script type="text/javascript">
	

	$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
});
// =============================================================================================================
					// javascript validation function

	function validation()
	{
		var name=document.getElementById('c_name').value;
		var desc=document.getElementById('c_desc').value;
		var img=document.getElementById('c_img').value;
		if (name=="")
		{ 
			document.getElementById('name_error').innerHTML="** please enter the course name";
			return false;

		}

		if (desc=="")
		{ 
			document.getElementById('desc_error').innerHTML="** please enter the course descsription";
			return false;

		}
		if (img=="")
		{ 
			document.getElementById('image_error').innerHTML="** please choose an image";
			return false;

		}
	}
					// javascript validation function
// =============================================================================================================


// =============================================================================================================
				
					// javascript modal function called on page load

    	function display_modal()
    	{

    		

    	}

// =============================================================================================================


    				
// =============================================================================================================
				
					// javascript modal function called on page load

    	 $(window).on('load',function(){
        $('#myModal').modal('show');
    });


    	 	      // javascript validation function
// =============================================================================================================

</script>


 </body>
 </html>