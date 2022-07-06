<?php 

include 'config.php';

error_reporting(0);  


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="css/editprofile.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Edit profile portal</title>

   
 
  
</head>
<body >


<section id="signup"><br><br>
       
     
       <div class="box2">
           
               <h1>Edit Information </h1>
             <br>

<?php
$selectquery ="select * from userinfo where Useremail='$_SESSION[Useremail]'" ;

$result = mysqli_query($dbc,$selectquery);
while($row = mysqli_fetch_assoc($result)){

    $FirstName =$row['FirstName'];
    $LastName =$row['LastName'];
    $Useremail =$row['Useremail'];
    $profession =$row['profession'];
    $Gender =$row['Gender'];
    $BloodGroup =$row['BloodGroup'];
    $password =$row['password'];

}

?>

<!--
<div class="profile-info" style="text-align: center;">
<span style="color: chartreuse;"> Welcome, </span>
<h4><?php echo $_SESSION['FirstName']; ?> </h4>




</div>

-->

<form action="" method="POST" enctype="multipart/form-data">

<?php

echo " <div class='card-img'>
 <img  src='image/".$_SESSION['pic']."', style='width:80px; height: 70px;border-radius: 50%;	margin-left: 180px;;margin-top:-10px;	
 ' > </div>";
?> 
<label style="margin-left:30px;"> <b> Profile Picture: </b>  </label>

<div class="file-upload-wrapper" data-text="Choose Picture"></i>
                  <input name="file" type="file" class="file-upload-field" value=""  require>
                  
                      </div><br>
<label style="margin-left:30px; "><b> FirstName:</b> </label>

<input class="sigupform" type="text" id="FirstName" name="FirstName" value="<?php echo $FirstName; ?> "> 

<label style="margin-left:30px;"> <b> LastName: </b>  </label>
<input class="sigupform" type="text" id="LastName" name="LastName" value="<?php echo $LastName; ?> "> 

<label style="margin-left:30px;"> <b> Useremail: </b>  </label>
<input  class="sigupform" type="text" name="Useremail" id="Useremail"value="<?php echo $Useremail; ?> "> <br>  <br>
      
<label style="margin-left:30px;"  > <b> Profession: </b>  </label>   
<ul class="dropdown3" id="d3"  >

<input type="text" name="profession" value=" <?php echo $profession ?> " readonly id="v3" style="font-size: 12PX;">
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
                                   
                                    <input type="text" name=" Gender"  readonly id="v" value=" <?php echo $Gender ?>">
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
                                </script><br><br><br><br>
                                <label style="margin-left:40px; " > <b> Gender: </b>  </label>  
                        <label style="margin-left:-5px;" > <b> BloodGroup: </b>  </label>  
                        <ul class="dropdown2" id="d2"  >

                            <input type="text" name="BloodGroup" value=" <?php echo $BloodGroup ?> " readonly id="v2" style="font-size: 12PX;">
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




<div style="padding-left: 100px;">
<button class="btn btn-default" type="submit" name="submit" >save</button>

</div>


</form>
  
<?php 
if (isset($_POST['submit'])) { 
    move_uploaded_file($_FILES['file']['tmp_name'],"image/".$_FILES['file']['name']);
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Useremail = $_POST['Useremail'];
$profession = $_POST['profession'];
$Gender = $_POST['Gender'];
$BloodGroup = $_POST['BloodGroup'];
$password =$_POST['password'];
$pic=$_FILES['file']['name'];


    
   
        

        $query ="UPDATE userinfo SET pic='$pic', FirstName ='$FirstName', LastName='$LastName', Useremail ='$Useremail',profession ='$profession', Gender ='$Gender',BloodGroup='$BloodGroup' where Useremail='$_SESSION[Useremail]'; ";
        $res = mysqli_query($dbc, $query);

        if ($res) {
            ?>

            <script type="text/javascript">alert('updated.');
            window.location="profile.php";
            </script>

           

           <?php 
        

          
        } 
        else {
            echo "<script>alert(' not upddated.')</script>";
        }
    
    
}

?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/add-book.js"></script>
</body>
</html>
           


