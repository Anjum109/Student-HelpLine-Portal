
<?php 

include 'config.php';

if(isset($_SESSION['USER_LOGIN'])){
    $uid=$_SESSION['USER_ID'];

if (isset($_POST['submit'])) {
	$dname = $_POST['dname'];
	$bloodgroup = $_POST['bloodgroup'];
    $location = $_POST['location'];
	$contact = $_POST['contact'];

    if(mysqli_num_rows(mysqli_query($dbc,"select * from donor_list where user_id='$uid' "))>0){
        ?>
               
         <script>
           setTimeout(function() {
            swal({
                title: "oops",
                text: "Already registered",
                type: "error"
            }, function() {
                window.location = "donor_registration.php"; 
            });
        }, 1000);
        </script>


<?php
		} 
		else {
            $sql = "INSERT INTO donor_list (dname,bloodgroup,location,contact,user_id)
            VALUES ('$dname', '$bloodgroup', '$location','$contact',' $uid')";
    $result = mysqli_query($dbc, $sql);
			?>
	   
 <script>
   setTimeout(function() {
	swal({
		title: "wow",
		text: "Successfully successfullly register",
		type: "success"
	}, function() {
		window.location = "donor_registration.php"; 
	});
}, 1000);
</script>

<?php
        }	
		}
	}		  
	
?>







   
   
   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="css/donor_registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>
<body>
    <h1 class="banner" >Donor Registration</h1>

<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br>
<section >
		<div class="box" style="margin-top:80px;">
			<div class="left">
				
				<div class="contact">
					<form action=""  method="POST" >
						<h4>Provide Below Details for Registration</h4>
                        <input style="width: 320px;" class="" type="text" placeholder="Enter Your Name" name="dname" required>	
                <ul class="dropdown2" id="d2" >

                            <input type="text" name="bloodgroup" value="Select BloodGroup" readonly id="v2" style="font-size: 12PX;">
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
                <input  style="width: 320px;"  type="text" placeholder="Enter Your Location" name="location"required>
                <input  style="width: 320px;"  type="number" placeholder="Enter Your Contact number" name="contact"required>
                
						<button class="submit"name="submit">Register</button>
					</form>
				</div>
			</div>
			<div class="right">
			
            <img src="image/rg.jpg" >

          
			
			</div>
		</div>
	</section>

    
   




</body>
</html>