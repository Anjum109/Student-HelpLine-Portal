<?php 

//session_start() ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/feedback.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Sign Up Verification</title>
    <style>
        button{

            outline:none ;
        }
    </style>
</head>
<body>
<br><br><br><br>
<div class="box" style="height: 300px;">
            <br><br>
            <h1 style="margin-left:60px;"><b>Verify Your Account</b></h1>
          <br>
            <form action="" method="POST">
            
                <br><br>
                <input style="margin-top: -50px;"class="feedbackform" type="text" placeholder="Enter Verification Code"  id="Useremail" name="otp_code" required autofocus><br>
               
              
                 <button style="width:150px;"type="submit" name="verify">  verify</button>
            </form>
           
           
    </div>


</main>
</body>
</html>
<?php 
    include('config.php');
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $Useremail = $_SESSION['Useremail'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
            ?>
           <script>
               alert("Invalid OTP code");
           </script>
           <?php
        }else{
            mysqli_query($dbc, "UPDATE userinfo SET status = '1' WHERE Useremail = '$Useremail'");
            ?>
             <script>
                 alert("Verfiy account done, you may sign in now");
                   window.location.replace("login.php");
             </script>
             <?php
        }

    }

?>






