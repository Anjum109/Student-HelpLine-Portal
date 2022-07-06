<?php 

include 'config.php';



error_reporting(0);



if (isset($_POST['submit'])) {

//profile
  //  $FirstName =$_POST['FirstName'];


	$Useremail = $_POST['Useremail'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM admininfo WHERE Useremail='$Useremail' and password='$password' and status='yes'and status1='1' ";
	$result = mysqli_query($dbc, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);

        //extra code for profile.php
        // $_SESSION['Firstname'] =$row['FirstName'];
		$_SESSION['Useremail'] = $row['Useremail'];
       $_SESSION['pic'] =$row['pic'];
        ?>
"<script>
window.location = "dashboard.php"
</script>"
<?php

	} else {
		echo "<script>alert('Woops! You cannot login until the admin approved your request.')</script>";
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    

        </header>
        <section id="login"><br><br>


            <div class="box">

                <h1 style="margin-left:110px;">Admin LOGIN</h1>
                <br>
                <form action="" method="POST">
                    <i class="fa fa-envelope" id="Useremail"></i>
                    <input class="loginform" type="email" placeholder="Useremail" name="Useremail" id="email" required>
                    <br><br>
                    <i class="fa fa-lock" id="psL"></i>
                    <input class="loginform" type="password" placeholder="password" name="password" id="password"
                        required>
                    <br>
                    <p><a href=" ">Forgot password?</a></p>
                    <br>
                    <button type="submit" name="submit"> Let's Go</button>
                </form>
                <p style="color: rgb(14, 13, 13);">Don't have an account? &nbsp;<a href="adminsignup.php">Sign Up </a></p>

            </div>

            

        </section>

    </div>
</body>

</html>