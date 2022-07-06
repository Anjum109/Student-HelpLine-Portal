<?php 
include "config.php";
?>

<?php 

if(isset($_SESSION['USER_LOGIN'])){
   $uid=$_SESSION['USER_ID'];
}
if(isset($_POST["SET"])){

    $tname=mysqli_real_escape_string($dbc,$_POST["tname"]);
    $date=date('Y-m-d', strtotime($_POST['date']));
   
    $uid=$_SESSION['USER_ID'];
    $sql="insert into reminder (tname,date,user_id) values ('{$tname}','{$date}','$uid')";
    if($dbc->query($sql)){
        ?>
	   
	   
        <script>
    setTimeout(function() {
     swal({
         title: " Reminder Successfully Set",
         text: "",
         type: "success"
     }, function() {
         window.location = "task_manager.php"; 
     });
 }, 1000);
 </script>
 <?php	   
    }else{
        echo"<div class='alert alert-danger'>Failed Try Again</div>";
    }
}

 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/task-manager.css">
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
</head>
<style>

    #bell{
     color: #eae5eb;
     position: absolute;
     top: 9%;
     transform: translateY(-50%);
     right: 55px;
     background: none;
     padding: 10px 20px;
     font-size: 20px;
     font-weight: 500;
     color: #fafafa;
     cursor: pointer;
     position: absolute;
     color: #c864d1;
     text-decoration: none;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }

</style>
</head>
<body>
<div id="r"><a href="reminder.php"class="show-btn2">reminder</a></div>
<br><br>
<?php 
       $uid=$_SESSION['USER_ID'];

       $today = date('m-d');
		$sql= "SELECT * FROM reminder WHERE DATE_FORMAT( date, '%m-%d')= '$today' AND user_id='$uid'";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){
            ?>
           
        
<ul class="dropdown2" id="d2" >

<?php echo '<i class="fa fa-bell" ><sup> '.$data.'</sup> </i>';?>
<?php    
        
    }else{ ?>
        <i class="fa fa-bell"id="bell" ><sup> 0</sup></i>
        <?php 
      }
      ?>  
                            <ul class="option2"id="o2" >
                            <?php 

$uid=$_SESSION['USER_ID'];

$today = date('m-d');
$sql = mysqli_query($dbc,"SELECT * FROM reminder WHERE DATE_FORMAT( date, '%m-%d')= '$today' AND user_id='$uid'");

while($data = mysqli_fetch_array($sql)){?>
                                <li Gender="AB+"><i id="fa-bell"class="fa fa-bell"></i>&nbsp;&nbsp;You have a task &nbsp;<b><?php echo $data['tname'] ?></b>&nbsp;Today.</li>
                               
                                <?php } ?>
                                
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
<div class="main-section">
       <div class="add-section">
          <form action="add_todo.php" method="POST" autocomplete="off">
          
                <input type="text" 
                     name="title" 
                     style="border: 1px solid gray;font-size:16px;"
                     placeholder="Enter Your Task "required />
              <button type="submit">Add</button>
          </form>
       </div>
       
       <?php 
          $uid=$_SESSION['USER_ID'];
          $todos = $dbc->query("SELECT * FROM task_manager where user_id='$uid'");
       ?>
       <div class="task-section" style="margin-bottom:60px;">
       <?php if (mysqli_num_rows( $todos) <= 0){ ?>
               
                <?php } ?><br>
                <div class="center">
<input type="checkbox" id="show">
<label for="show" class="show-btn">Add Reminder</label>
<div class="container">
<label for="show" class="close-btn fas fa-times" title="close"></label>
<div class="text">
ADD REMINDER
</div>
<form action="" method="POST">
<div class="data">
<label>TASK NAME</label>
<input type="text" name="tname" required>
</div>
<div class="data">
<label>Date</label>
<input type="date" name="date" required>
</div>

<div class="btn">
<div class="inner"></div>
<button type="submit" name="SET">SET</button>
</div>

</form>
</div>
</div>
                <a class="cmt"href="" style="margin-left:200px;"id="acmt"><b>All Task</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="cmt"href="complete_task.php" ><b>Completed Task</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="cmt" href="not_complete_task.php"><b>Not Completed Task</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php 
        $uid=$_SESSION['USER_ID'];
		$sql= "SELECT * FROM task_manager where user_id='$uid'AND task='not complete'";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){
            ?>
          <?php echo '<a style=" font-size:18px;color:red; margin-top:-10000px;" ><b> Left Task &nbsp;( '.$data.' )</a>';?></b>
            <?php    
        
        }else{
            ?>
            <?php echo '<a style=" font-size:18px;color:red; margin-top:-10000px;" ><b> Left Task &nbsp;( 0 )</a>';?></b>
              <?php       
        }
			?>
                <br><br><br>
                <?php while($todo = $todos->FETCH_ASSOC()) { ?>
                   
                    
                   <div class="task-item">
                   <span id="<?php echo $todo['id']; ?>"
                         class="remove-task-item">x</span>
                         <?php if($todo['checked']){ 
                             ?> 
                       <input type="checkbox"
                              class="check-box"
                              data-todo-id ="<?php echo $todo['id']; ?>"
                              checked />
                       <h2 class="checked"><?php echo $todo['title'] ?></h2>

                   <?php
                      }else { ?>
                       <input type="checkbox"
                              data-todo-id ="<?php echo $todo['id']; ?>"
                              class="check-box" />
                       <h2><?php echo $todo['title'] ?></h2>
                   <?php } ?>
                   <br>
                   <small>created: <?php echo $todo['date_time'] ?></small> 
               </div>
           <?php } ?>
      </div>
   </div>


   <script src="jquery-3.2.1.min.js"></script>


  
   <script>
       $(document).ready(function(){
           $('.remove-task-item').click(function(){
               if(confirm('Are you sure to delete this record ?')) {

               const id = $(this).attr('id');

               $.post("delete-task.php", 
                     {
                         id: id
                     },
                     (data)  => {
                        if(data){
                            $(this).parent().hide(600);
                        }
                     }
               )};
           });
           $(".check-box").click(function(e){
               const id = $(this).attr('data-todo-id');
               
               $.post('check-task.php', 
                     {
                         id: id
                     },
                     (data) => {
                         if(data != 'error'){
                             const h2 = $(this).next();
                             
                                 
                                 h2.addClass('checked');
                             
                         }
                     }
               );
           });
       });
   </script>
</body>
</html>