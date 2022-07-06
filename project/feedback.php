
<?php 

include 'config.php';

error_reporting(0);




if (isset($_POST['submit'])) {
	$UserName = $_POST['UserName'];
    $Useremail = $_POST['Useremail'];
    $comments = $_POST['comments'];
    $sql = "INSERT INTO feedback (UserName,Useremail,comments)
    VALUES ( '$UserName', '$Useremail','$comments')";
    	$result = mysqli_query($dbc, $sql);
        if ($result) {
            
            echo "<script>alert('Thanks for your opinion.')</script>";
            ?>
               "<script> window.location="index.php"</script>"
               <?php 
        }
           
          else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
       }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>student helpline portal</title>
   <link rel="stylesheet" href="css/feedback.css">
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div  class="wrapper">
        <div class="Container">
    <header>
    <img  src="image/logo.jpg" style="height: 40px; padding:4px; margin-left: 4px;  ">
      
        
   <nav>
            <ul>
                <li><a href="index.php"><b>HOME</b></a></li>
                <li><a href=""><b>ABOUT US</b> </a></li>
                        <li><a href=""><b>CONTACT US</b></a></li>
                        <li ><a href="login.php"><b>LOGIN</b></a></li>   
                        <li ><a href="signup.php"><b>SIGNUP</b></a></li> 
                
            </ul>

   </nav>
</div>
   
    </header>
    <section id="feedback"><br><br>
       
       
        <div class="box">
            
                <h1>Give Your Feedback</h1>
              <br>
                <form action="" method="POST">
                <i class="fa fa-user" id= un></i>
                    <input  class="feedbackform" type="text" placeholder="Enter Your FullName" name="UserName" id="User" required>
                    <br><br><i class="fa fa-envelope" id="em"></i>
                    <input class="feedbackform" type="email" placeholder="Email Address" name="Useremail" id="Useremail" required><br>
                    <i class='fas fa-comment'id= cm></i>
                    <input class="feedbackform" type="text" placeholder="Enter Your Opinions Here." name="comments" id="comments" required><br><br>
                  
                     <button type="submit" name="submit">  Send </button>
                </form>
               
               
        </div>


    </section>
 
</div>
</body>
</html>