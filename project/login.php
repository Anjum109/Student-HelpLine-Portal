<?php 

include 'config.php';



error_reporting(0);



if (isset($_POST['submit'])) {
	$Useremail = $_POST['Useremail'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM userinfo WHERE Useremail='$Useremail' AND password='$password'";
	$result = mysqli_query($dbc, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['Useremail'] = $row['Useremail'];
        ?>
"<script> window.location="dashboard.html"</script>"
<?php

	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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
   <link rel="stylesheet" href="css/index.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div  class="wrapper">
        <div class="Container">
    <header>
    <img  src="image/logo.jpg" style="height: 80px; padding:10px ;">
      
        
   <nav>
            <ul>
                <li><a href="index.php"><b>HOME</b></a></li>
                <li><a href=""><b>ABOUT US</b></a></li>
                <li><a href=""><b>CONTACT US</b></a></li>
                <li ><a href="signup.php"><b>SIGNUP</b></a></li> 
                <li><a href="feedback.php"><b>FEEDBACK</b></a></li>
    
            </ul>

   </nav>
</div>
   
    </header>
    <section id="login"><br><br>
       
       
        <div class="box">
            
                <h1>LOGIN</h1>
              <br>
                <form action="" method="POST">
                <i class="fa fa-envelope" id="Useremail"></i>
                    <input  class="loginform" type="email" placeholder="Useremail" name="Useremail" id="email" required>
                    <br><br>
                    <i class="fa fa-lock" id="psL"></i>
                    <input class="loginform" type="password" placeholder="password" name="password" id="password" required>
                    <br>
                    <p><a href="forgot-password.php " >Forgot password?</a></p>
                    <br> 
                     <button type="submit" name="submit">Let's Go</button>
                </form>
                <p style="color: rgb(14, 13, 13);">Don't have an account? &nbsp;<a href="signup.php" >Sign Up </a></p>
               
        </div>
    


    </section>
 
</div>
</body>
</html>