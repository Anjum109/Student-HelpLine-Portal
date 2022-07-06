<?php 

include 'config.php';

error_reporting(0);


/*if (isset($_SESSION['Useremail'])) {
    header("Location: index.php");
}*/

if (isset($_POST['submit'])) {
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
    $Useremail = $_POST['Useremail'];
    $profession = $_POST['profession'];
    $Gender = $_POST['Gender'];
    $BloodGroup = $_POST['BloodGroup'];
	$password = md5($_POST['password']);
	$confirmpassword = md5($_POST['confirmpassword']);

	if ($password == $confirmpassword) {
		$sql = "SELECT * FROM userinfo WHERE Useremail='$Useremail'";
		$result = mysqli_query($dbc, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO userinfo (FirstName,LastName,Useremail,profession, Gender,BloodGroup, password)
					VALUES ('$FirstName', '$LastName', '$Useremail','$profession','$Gender','$BloodGroup ','$password')";
			$result = mysqli_query($dbc, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$FirstName = "";
				$LastName = "";
                $Useremail = "";
                $profession = "";
                $Gender= "";
				$BloodGroup   = "";
				$_POST['password'] = "";
				$_POST['confirmpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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
   <link rel="stylesheet" href="css/sinup.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  
</head>
<body>
    <div  class="wrapper">
        <div class="Container">
    <header>
    <img  src="image/logo.jpg" style="height: 80px; padding:10px ;">
      
        
   <nav>
            <ul >
                <li><a href="index.php"><b>HOME</b></a></li>
                <li><a href="">ABOUT US</a></li>
                <li><a href="">CONTAC TUS</a></li>
                <li ><a href="login.php">LOGIN</a></li>   
                <li><a href="">FEEDBACK</a></li>
    
            </ul>

   </nav>
</div>
    </header>
    <section id="signup"><br><br>
       
     
        <div class="box2">
            
                <h1>Create An Account</h1>
              <br>
               
   
                      <form id="form" action="" method="POST">
                      
                      <input  class ="sigupform" type="text" placeholder="FirstName" name="FirstName" id="FirstName" required><br><br>
                 
                      <input  class="sigupform" type="text" placeholder="LastName" name="LastName" id="LastName" required><br><br>
                    
                  <input class="sigupform" type="email" placeholder="Useremail" name="Useremail" id="Useremail" required><br><br>
                                
                                  <div id="radio" > 
                    
                                    <input type="radio"  name="profession"   value="Student"required >
                                    <label>Student</label>
                                    <input type="radio"  name="profession"  value="Teacher" required>
                                    <label>Teacher</label><br><br>
                                     
                                  </div>
                                  <ul class="dropdown" id="d"  >

                                    <input type="text" name=" Gender" value="Select Gender" readonly id="v">
                                    <i class="fa fa-chevron-down"></i>
                                    <ul class="option"id="o"  >
                                        <li Gender="Female">Female</li>
                                        <li Gender="Male">Male</li>
                                        <li Gender="Other">Other</li>
                                        
                                    </ul>
                                </ul> 

                                <script type="text/javascript">
                                var dropdown = document.getElementById('d');
                                var options = document.getElementById('o');
                                var input = document.getElementById('v');
                        
                                dropdown.addEventListener('click',function(){
                                    this.classList.toggle('show');
                                })
                                options.addEventListener('click',function(event){
                                    const listItem = event.target;
                                    console.log(listItem);
                                    const value = listItem.attributes.Gender.value;
                                    console.log(value);
                                    input.value=value;
                                });
                                </script>
                        
                        <ul class="dropdown2" id="d2" >

                            <input type="text" name="BloodGroup" value="Select BloodGroup" readonly id="v2" style="font-size: 12PX;">
                            <i class="fa fa-chevron-down"></i>
                            <ul class="option2"id="o2" >
                                <li Gender="AB+">AB+</li>
                                <li Gender="A+">A+</li>
                                <li Gender="B+">B+</li>
                                <li Gender="O+">O+</li>
                                <li Gender="AB-">AB-</li>
                                <li Gender="A-">A-</li>
                                <li Gender="B-">B-</li>
                                <li Gender="O-">O-</li>
                              
                                
                            </ul>
                        </ul> 
                                      
                        <script type="text/javascript">
                            var dropdown2 = document.getElementById('d2');
                            var options2 = document.getElementById('o2');
                            var input2 = document.getElementById('v2');
                    
                            dropdown2.addEventListener('click',function(){
                                this.classList.toggle('show2');
                            })
                            options2.addEventListener('click',function(event2){
                                const listItem2 = event2.target;
                                console.log(listItem2);
                                const value2 = listItem2.attributes.Gender.value;
                                console.log(value2);
                                input2.value=value2;
                            });
                            </script>

<input class ="sigupform" type="password" placeholder="password" name="password" id="password" required>
<input class ="sigupform" type="password" placeholder="confirm password" name="confirmpassword" required>

                                  
                                  <button type="submit" name="submit" onclick="UserRegister()" id="btn">Sign Up</button> 
                                 
   <p  style="color: rgb(14, 13, 13);"><B>Already have an account?</B> &nbsp;<a href="login.php" >Login </a></p>


                       </form> 
               
                     
                    
                 
                  
                
               
        </div>
    
   

    </section>
 
</div>
<!--<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>
<script src="signup.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

-->
  
</body>


   
  
  
</html>