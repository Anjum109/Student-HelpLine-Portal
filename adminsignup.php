<?php

include 'config.php';



error_reporting(0);

  
  if (isset($_POST["submit"])) {
    $FirstName = $_POST['FirstName'];
      $LastName = $_POST['LastName'];
      $Useremail = $_POST['Useremail'];
      $Gender = $_POST['Gender'];
      $BloodGroup = $_POST['BloodGroup'];
      $password = md5($_POST['password']);
      $confirmpassword = md5($_POST['confirmpassword']);
      $token = md5(rand());
     $pic=$_POST['pic'];
     $expert=$_POST['expert'];
    $check_email = mysqli_num_rows(mysqli_query($dbc, "SELECT Useremail FROM admininfo WHERE Useremail='$Useremail'"));
  
    if ($password !== $confirmpassword) {
    
      

      ?>
      <script>
setTimeout(function() {
swal({
title: "oops",
background: '#fff',


text: "Password did not match.",
type: "error"
}, function() {
window.location = "adminsignup.php"; 
});
}, 1000);
</script>
    <?php







    } elseif ($check_email > 0) {
   
    


                    ?>
                   <script>
    setTimeout(function() {
	swal({
		title: "oops",
    background: '#fff',
 
   
		text: "Email already exists in our database.",
		type: "error"
	}, function() {
		window.location = "adminsignup.php"; 
	});
}, 1000);
</script>
                 <?php






    } else {
      $sql = "INSERT INTO admininfo (FirstName,LastName,Useremail, Gender,BloodGroup,password,token,status,status1, pic,expert)
      VALUES ('$FirstName', '$LastName', '$Useremail','$Gender','$BloodGroup ','$password','$token','','0','p.png','$expert')";
      $result = mysqli_query($dbc, $sql);
      if ($result) {
        $otp = rand(100000,999999);
          $_SESSION['otp'] = $otp;
          $_SESSION['Useremail'] = $Useremail;
          require "Mail/phpmailer/PHPMailerAutoload.php";
          $mail = new PHPMailer;

          $mail->isSMTP();
          $mail->Host='smtp.gmail.com';
          $mail->Port=587;
          $mail->SMTPAuth=true;
          $mail->SMTPSecure='tls';

          $mail->Username='fahmidakhan9819@gmail.com';
          $mail->Password='fahmida123498191234';

          $mail->setFrom('fahmidakhan9819@gmail.com', 'Student HelpLine Portal');
          $mail->addAddress($_POST["Useremail"]);

          $mail->isHTML(true);
          $mail->Subject="verification code";
          $mail->Body="<p>Dear $FirstName, </p> <h3>Your verification code is $otp <br></h3>
          <br><br>
          <p>With regrads,</p>
          <b>Student Helpline Team </b>";
          if(!$mail->send()){
                     



            ?>
                               <script>
                setTimeout(function() {
              swal({
                title: "oops",
                background: '#fff',
             
               
                text: "Register Failed, Invalid Email",
                type: "error"
              }, function() {
                window.location = "adminsignup.php"; 
              });
            }, 1000);
            </script>
                             <?php
                              }else{
                                                    
            ?>
                 
            <script>
              setTimeout(function() {
             swal({
               title: "wow",
               text: "<?php echo "Register Successfully, OTP sent to " . $Useremail ?>",
               type: "success"
             }, function() {
               window.location = "verify-admin-email.php"; 
             });
            }, 1000);
            </script>
            
            <?php
            
                                  
                              }
                  }
            
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
   <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  
</head>
<body>
  
    </header>
    <section id="signup"><br><br>
       
     
        <div class="box2">
            
                <h1>Create An Account</h1>
              <br>
               
   
                      <form id="form" action="" method="POST">
                      <i class="fa fa-user" id= fn></i>
                      <input  class ="sigupform" type="text" placeholder="FirstName" name="FirstName" id="FirstName" required><br><br>
                      <i class="fa fa-user" id= ln></i>
                      <input  class="sigupform" type="text" placeholder="LastName" name="LastName" id="LastName" required><br><br>
                      <i class="fa fa-envelope" id="em"></i>
                  <input class="sigupform" type="email" placeholder="Useremail" name="Useremail" id="Useremail" required><br><br>
                  <i class="fa fa-user" id="ex"></i>
                  <input class="sigupform" type="text" placeholder="Expert at" name="expert" id="expert" required><br><br>
                                  <ul class="dropdown" id="d" style="margin-top:4px;" >

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
                        
                        <ul class="dropdown2" id="d2"style="margin-top:4px;" >

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
<i class="fa fa-lock" id="ps"style="margin-top:55px;"></i>
<input style="margin-top:47px;"class ="sigupform" type="password" placeholder="password" name="password" id="password" required>
<i class="fa fa-lock" id="cps"style="margin-top:100px;"></i>
<input style="margin-top:16px;" class ="sigupform" type="password" placeholder="confirm password" name="confirmpassword"id="cpassword" required><br>
<input id ="checkbox" type="checkbox" required><p id= "terms">i agree to the <a href="term_and_con/term_and_cond.html"> Term And Condition</a> and <a href="term_and_con/privacy_policy.html"> Privacy Policy</a></p>

 <button type="submit" name="submit" id="btn">Sign Up</button> 
                                 
   <p id="text1" ><B>Already have an account?</B> &nbsp;<a href="adminlogin.php" >Login </a></p>


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