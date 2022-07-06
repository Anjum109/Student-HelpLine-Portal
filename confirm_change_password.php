<?php

include 'config.php';





if (isset($_POST["submit"])) {
  $password = mysqli_real_escape_string($dbc, md5($_POST["newpassword"]));
  $cpassword = mysqli_real_escape_string($dbc, md5($_POST["cnewpassword"]));
  if ($password === $cpassword) {
    $sql = "UPDATE userinfo SET password='$password' WHERE token='{$_GET["token"]}'";
    mysqli_query($dbc, $sql);
    header("Location: login.php");
  } else {
      echo "<script>alert('Password not matched.');</script>";
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
   <link rel="stylesheet" href="css/resetpass.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div  class="wrapper">
        <div class="Container">
   <!-- <header>
    <img  src="image/logo.jpg" style="height: 80px; padding:10px ;">
      
        
   <nav>
            <ul>
                <li><a href="index.php"><b>HOME</b></a></li>
                <li><a href="">ABOUT US</a></li>
                <li><a href="">CONTACT US</a></li>
                <li ><a href="signup.php">SIGNUP</a></li> 
                <li ><a href="login.php">LOGIN</a></li> 
                <li><a href="feedback.php">FEEDBACK</a></li>
    
            </ul>

   </nav>
</div>
   
    </header>

-->
    <section id="resetpass"><br><br>
       
       
        <div class="box">
            
                <h1>Change Password</h1>
              <br>
                <form action="" method="POST">
                <i class="fa fa-lock" id="ps"></i>
                    <input  class="resetpassform" type="password" placeholder="New password" name="newpassword" id="password" required>
                    <br><br> <i class="fa fa-lock" id="cps"></i>
                    <input  class="resetpassform" type="password" placeholder=" Confirm New password" name="cnewpassword" id="cpassword" required>
                    <br><br>
                     <button type="submit" name="submit">  Change </button>
                </form>
               
               
        </div>


    </section>
 
</div>
</body>
</html>