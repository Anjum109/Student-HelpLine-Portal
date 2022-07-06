
<?php 

include 'config.php';



if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$oppinion = $_POST['oppinion'];
   
    $sql = "INSERT INTO donor_oppinion (name,oppinion)
            VALUES ('$name', '$oppinion')";
    $result = mysqli_query($dbc, $sql);
   
    if ($result) {
        echo "<script>alert('Wow! thanks your oppinion.')</script>";
    }




}



   ?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/donor_opinion.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">

    <title></title>
  </head>
  <body>
    
        <div class="land-background"></div>
        <br>
        <br>
        <br>
        <h3 class="ribbon">Donor Opinion</h3>
        <div class="slider-card">
            <div class="inner-wrapper">
            <form action=""  method="POST" >
                <h4 style="font-size: 40px;" class="text-center">Share Your Opinion to motivate other</h4>
                <div class="form-group">
                    <label for="text">Name</label>
                    <input name="name" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="text">Your Opinion</label>
                  
                    <textarea  class="form-control"  name="oppinion"></textarea>
                </div>
                <div></div>
                    <button  style="background: rgb(175, 77, 77); padding: 10px; cursor: pointer"
                    onmouseover="this.style.backgroundColor='red';" onmouseout="this.style.backgroundColor='rgb(223, 50, 50)';"class=" btn-block mt-5 text-white font-weight-bold py-3"name="submit" type="submit">Send</button>
                </div>
            </div>
        </div>
        </form>
   </body>
</html>