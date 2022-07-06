

<?php 

include 'config.php';

if(isset($_SESSION['USER_LOGIN'])){
    $uid=$_SESSION['USER_ID'];

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$bloodgroup = $_POST['bloodgroup'];
    $contact = $_POST['contact'];
	$location = $_POST['location'];
    $reason = $_POST['reason'];
	$date = $_POST['date'];
   
   
    $sql = "INSERT INTO blood_request (name,bloodgroup,contact,location,reason,date ,user_id,complete)
            VALUES ('$name', '$bloodgroup','$contact', '$location','$reason', '$date',' $uid','not done')";
    $result = mysqli_query($dbc, $sql);
   
    if ($result) {
        echo "<script>alert('successsfully send.')</script>";
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
    <link rel="stylesheet" href="css/blood_request.css">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Tangerine">
    <title></title>
 



</head>

<body>
    <h3 class="ribbon">Blood Request</h3><br><br>
    <div class="container">
        <h2 style="font-size: 30px;">Make Blood Request</h2>

        <form action=""  method="POST" >

            <div class="form-item">
                <input type="text" name="name" placeholder="Enter Your Name">
                <input type="text" name="bloodgroup"  placeholder="Bloodgroup">
            </div>

            <div class="form-item">
                <input type="text" name="contact"  placeholder="Enter your Contact Number">
            </div>

            <div class="form-item">
              
               
                <input type="text" name="location" placeholder="Enter your Location">
                <input type="text" name="reason"  placeholder="Enter reason why you need Blood">
                <input type="text" name="date"  placeholder="Enter the date when byou want Blood">
            </div>


            <div class="form-btns">
                <button  type="submit" name="submit">Submit</button>
               
            </div>

        </form>
    </div>

  

    

</body>

</html>