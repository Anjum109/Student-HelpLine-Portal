<?php 
include "config.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    background-color: #d7dbd7;
}
        div{
width:600px;
            margin-left:350px; 
            background:rgb(189, 190, 189);
            text-align:center;
            padding:10px ;
            margin-top:80px;
        }
        .heading{
  text-align: center;
  padding:1rem 0;
}

.heading span{
  font-size: 2.5rem;
  background:rgba(128, 93, 185, 0.897);
  color:rgb(250, 245, 245);
  border-radius: .5rem;
  padding:.1rem 1rem;
}

.heading span.space{
  background:none;
}

    </style>
</head>
<body>

<h1 class="heading">
    <span>Q</span>
    <span>U</span>
    <span>I</span>
    <span>Z</span>
    
    <span class="space"></span>
    
    <span>A</span>
    <span>N</span>
    <span>S</span>
    <span>W</span>
    <span>E</span>
    <span>R</span>
</h1>
</section>
   <div>
   <?php $records = mysqli_query($dbc,"select * from java_quiz ");

while($data = mysqli_fetch_array($records)){


?>  
<h4><?php  echo $data['id'];?>.&nbsp;<?php  echo $data['que'];?></h4>
<span><b>ANS:&nbsp;</b><?php  echo $data['ans'];?></span>
<?php }?>
   </div> 
</body>
</html>