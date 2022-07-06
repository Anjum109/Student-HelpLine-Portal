<?php

include 'config.php';




if (isset($_POST["submit"])) {
  $Useremail = mysqli_real_escape_string($dbc, $_POST["Useremail"]);

  $check_email = mysqli_query($dbc, "SELECT * FROM userinfo WHERE Useremail='$Useremail'");

  if (mysqli_num_rows($check_email) > 0) {
      $data = mysqli_fetch_assoc($check_email);
      
      $to = $Useremail;
      $subject = "Reset Password - Student HelpLine Portal";
    
      $message = "
      <html>
      <head>
      <title>{$subject}</title>
      </head>
      <body>
      <p><strong>Dear {$data['FirstName']},</strong></p>
      <p>Forgot Password? Not a problem. Click below link to reset your password.</p>
      <p><a href='{$base_url}reset-password.php?token={$data['token']}'>Reset Password</a></p>
      </body>
      </html>
      ";
    
      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
      // More headers
      $headers .= "From: ". $my_email;
    
      if (mail($to,$subject,$message,$headers)) {
        echo "<script>alert('We have sent a reset password link to your email - {$Useremail}.');</script>";
      } else {
        echo "<script>alert('Mail not sent. Please try again.');</script>";
      }
  } else {
      echo "<script>alert('Email not found.');</script>";
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
   <link rel="stylesheet" href="css/forgotpass.css">
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
                <li><a href="">ABOUT US</a></li>
                <li><a href="">CONTACT US</a></li>
                <li ><a href="signup.php">SIGNUP</a></li> 
                <li ><a href="login.php">LOGIN</a></li> 
                <li><a href="feedback.php">FEEDBACK</a></li>
    
            </ul>

   </nav>
</div>
   
    </header>
    <section id="forgotpass"><br><br>
       
       
        <div class="box">
            
                <h1>Forgot Password</h1>
              <br>
                <form action="" method="POST">
                <i class="fa fa-envelope" id="Useremail"></i>
                    <input  class="forgotpassform" type="email" placeholder="Enter Your Email" name="Useremail" id="email" required>
                    <br><br>
                     <button type="submit" name="submit">Send Password Reset Link</button>
                </form>
               
               
        </div>


    </section>
 
</div>
</body>
</html>