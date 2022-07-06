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
   
    <section id="signup"><br><br>
       
     
        <div class="box2" style=" height:420px; margin-top:15px ;">
            
                <h1>Update user info</h1>
              <br>
               
   
                      <form id="form" action="" method="POST">
                      <?php 

include 'config.php';

error_reporting(0);


$ids = $_GET['id'];
$showquery ="select * from userinfo where id= $ids";
$showdata = mysqli_query($dbc,$showquery);
$arrdata = mysqli_fetch_array($showdata);




if (isset($_POST['submit'])) {

     $idu =$_GET['id'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
    $Useremail = $_POST['Useremail'];
    $profession = $_POST['profession'];
    $Gender = $_POST['Gender'];
    $BloodGroup = $_POST['BloodGroup'];
	

	    
		
            

            $query ="UPDATE userinfo SET  id=$idu , FirstName ='$FirstName', LastName='$LastName', Useremail ='$Useremail',profession ='$profession', Gender ='$Gender',BloodGroup='$BloodGroup' where id=$ids ";
            $res = mysqli_query($dbc, $query);

			if ($res) {
				echo "<script>alert('updated.')</script>";
         header("location:all_user_show.php");
                ?>
               <?php 
			

              
			} 
            else {
                echo "<script>alert(' not upddated.')</script>";
            }
		
		
}

?>






                      <i class="fa fa-user" id= fn></i>
                      <input  class ="sigupform" type="text" placeholder="FirstName" name="FirstName" id="FirstName" value=" <?php echo $arrdata['FirstName']; ?>"><br><br>
                      <i class="fa fa-user" id= ln></i>
                      <input  class="sigupform" type="text" placeholder="LastName" name="LastName" id="LastName" value=" <?php echo $arrdata['LastName']; ?>"><br><br>
                      <i class="fa fa-envelope" id="em"></i>
                  <input class="sigupform" type="email" placeholder="email" name="Useremail" id="Useremail" value=" <?php echo $arrdata['Useremail']; ?>"><br><br>

                 
      
         
<ul class="dropdown3" id="d3"  >

<input type="text" name="profession" value=" <?php echo $arrdata['profession']; ?> " readonly id="v3" style="font-size: 12PX;">
<i class="fa fa-chevron-down"></i>
<ul class="option3"id="o3" >
    <li profession="teacher">teacher</li>
    <li profession="student">student</li>
    
   
    
</ul>
</ul> 
          
<script type="text/javascript">
var dropdown3 = document.getElementById('d3');
var options3 = document.getElementById('o3');
var input3 = document.getElementById('v3');

dropdown3.addEventListener('click',function(){
    this.classList.toggle('show3');
})
options3.addEventListener('click',function(event3){
    const listItem3 = event3.target;
    console.log(listItem3);
    const value3 = listItem3.attributes.profession.value;
    console.log(value3);
    input3.value=value3;
});
</script>

                                  <ul class="dropdown" id="d"  >

                                    <input type="text" name=" Gender"  readonly id="v" value=" <?php echo $arrdata['Gender']; ?>">
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
                        
                        <ul class="dropdown2" id="d2"  >

                            <input type="text" name="BloodGroup" value=" <?php echo $arrdata['BloodGroup']; ?> " readonly id="v2" style="font-size: 12PX;">
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

<br>
<br>
<br>
<br>
<br>
<br>
               

 <button type="submit" name="submit" value="UPDATE DATA">Update</button> 
                                 
   


                       </form> 
               
                     
                    
                 
                  
                
               
        </div>
    
   

    </section>
 
</div>

  
</body>


   
  
  
</html>