<?php include('config.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>    
<link rel="stylesheet" href="css/review_rate.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body style="font-family:sans-serif;background-color: #d7dbd7; ">                    

<section class="book" id="book" >

<h1 class="heading">
    <p>R</p>
    <p>E</p>
    <p>V</p>
    <p>I</p>
   
    <p>E</p>
    <p>W</p> 
    <P class="space"></P>
        <P>&</P>
        <P class="space"></P>
        <P>R</P>
        <p>A</p>
    <p>T</p>
    <p>I</p>
    <p>N</p>
    <p>G</p>
</h1>
</section>
    <?php
 
    $r_id=1;
        $ratequery = "SELECT * FROM rating WHERE r_id = '$r_id' "; 
        $rateres =mysqli_query($dbc, $ratequery);    
            while($data = mysqli_fetch_assoc($rateres)){
                $rate_db[] = $data;
                $sum_rates[] = $data['rate'];
            }
            if(count($rate_db)){
                $rate_times = count($rate_db);
                $sum_rates = array_sum($sum_rates);
                $rate_value = $sum_rates/$rate_times;
                $rate_bg = (($rate_value)/5)*100;
            }else{
                $rate_times = 0;
                $rate_value = 0;
                $rate_bg = 0;
            }
    ?>

            <div class="box">
            <h1>Total rating</h1>  

            <span>Write Review Here</span><br>  
             <a  href="rating.php">Review</a>
            
            <div style="margin-top: 20px; margin-left:50px;">
                <div  style= "width:200px;"class="result-container ">
                <div class="rate-bg" style="width:<?php echo $rate_bg; ?>% ; "></div>
                <div class="rate-stars"></div>
            </div>                    
            <span class="reviewScore" style="font-size:20px;"><?php echo substr($rate_value,0,3); ?>&nbsp;/&nbsp;5</span><span style="font-size:20px;" class="reviewCount">(<?php echo $rate_times; ?> reviews)</span>
            </div>


            
        
<section id="review" class="review">

         
  
        
<div class="box-container">
<?php $records = mysqli_query($dbc,"select * from rating ORDER BY id DESC ");
        
        while($row = mysqli_fetch_array($records)){
  
        ?>
    <div class="box1">
        <img src="image/dpuser.png" alt="">
        <h3><?php  echo $row['Username'];?></h3>
        <p >“<?php  echo $row['review'];?>”</p>
        
        <?php    
       
        if( $row['rate'] == 5){
        
        ?><div>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked "></i>
			</div>

            <?php }
     
     
?>
<?php 
if( $row['rate'] == 3){
        
        ?><div>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
			</div>

            <?php }
     
    
    ?>
<?php 
if( $row['rate'] == 4){
        
        ?><div>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star "></i>
			</div>

            <?php }
     
    
    ?>
<?php 
if( $row['rate'] == 2){
        
        ?><div>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
			</div>

            <?php }
     
    
    ?>
    <?php 
if( $row['rate'] == 1){
        
        ?><div>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
            <i class="fas fa-star "></i>
			</div>

            <?php }
     
    
    ?>

            </div>
            <?php 
     
}
?>
</div>
</section>
        </body>
</html>