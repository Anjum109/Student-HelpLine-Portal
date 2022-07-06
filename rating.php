
<?php 

include 'config.php';


if (isset($_POST["submit"])) {


       
            $username = $_POST["username"];
            $review= $_POST["review"];
            $rate = $_POST["rate"];
          
            $sqlInsert = "INSERT INTO rating (r_id,username, review,rate ) VALUES ('1', '$username', '$review', '$rate' )";
            $result = mysqli_query($dbc,$sqlInsert);

            if ($result) {
             
              ?>
	   
 <script>
   setTimeout(function() {
	swal({
		title: "Successfully Send",
		text: "Thanks For Rating Us",
		type: "success"
	}, function() {
		window.location = "show_rating.php"; 
	});
}, 1000);
</script>

<?php
            } else {
                echo "something wrong";
            }
        } 

    
   
?>








<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/rating.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <section >

<h1 class="heading">
    <span>R</span>
    <span>A</span>
    <span>T</span>
    <span>E</span>
    <span class="space"></span>
    <span>U</span>
    <span>S</span>
    
</h1>
</section>
  <body> <form action="" method="POST">
    <div class="container">
  
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5" value="5 ">

        <label for="rate-5" class="fas fa-star"></label>


        <input type="radio" name="rate" id="rate-4"value="4">
        <label for="rate-4" class="fas fa-star"></label>


        <input type="radio" name="rate" id="rate-3"value="3  ">
        <label for="rate-3" class="fas fa-star"></label>

        
        <input type="radio" name="rate" id="rate-2"value="2">
        <label for="rate-2" class="fas fa-star"></label>

        <input type="radio" name="rate" id="rate-1"value="1 ">
        <label for="rate-1" class="fas fa-star"></label>
        
          <div class="textarea">
            <textarea id="username" placeholder="Enter your Name.."name="username"></textarea>
          </div>

          <div class="textarea">
            <textarea cols="30" placeholder="Describe your experience.."name="review"></textarea>
          </div>
          <div class="btn">
            <button type="submit" name="submit">Post</button>
          </div>
        </form>
      </div>
    </div>
    
    
  </body>
</html>