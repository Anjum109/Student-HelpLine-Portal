<?php 
include "config.php";
error_reporting(0);

if(isset($_POST['title'])){

    $title = $_POST['title'];

        $sql ="INSERT INTO task_manager(title) VALUE('$title')";
        $res = mysqli_query($dbc,$sql);
}
        
        if($res){
            header("Location:task_manager.php");


        
    }


        
            $id = $_GET['id'];
            $sql = "DELETE FROM task_manager WHERE id=$id ";  
            $res = mysqli_query($dbc,$sql);

         
            if($res){
                header("Location:task_manager.php");


            }




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="css/task-manager.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>
<body>
<div class="main-section">
       <div class="add-section">
          <form action="" method="POST" autocomplete="off">
          
                <input type="text" 
                     name="title" 
                     style="border: 1px solid plum"
                     placeholder="Enter Your Task "required />
              <button type="submit">Add &nbsp; <span>&#43;</span></button>
          </form>
       </div>
       
       <?php 
          $todos = $dbc->query("SELECT * FROM task_manager ORDER BY id DESC");
       ?>
       <div class="task-section">
       <?php if (mysqli_num_rows( $todos) <= 0){ ?>
                <div class="task-item">
                    <div class="empty">
                        <img src="image/f.png" width="100%" />
                        <img src="image/Ellipsis.gif" width="80px">
                    </div>
                </div>
                <?php } ?>
                <?php while($todo = $todos->FETCH_ASSOC()) { ?>
                <div class="task-item">
                    <span id="<?php echo $todo['id']; ?>"
                          class="remove-task-item">x</span>
                          <?php if($todo['checked']){ ?> 
                        <input type="checkbox"
                               class="check-box"
                               data-todo-id ="<?php echo $todo['id']; ?>"
                               checked />
                        <h2 class="checked"><?php echo $todo['title'] ?></h2>
                    <?php }else { ?>
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
                              if(data === '1'){
                                  h2.removeClass('checked');
                              }else {
                                  h2.addClass('checked');
                              }
                          }
                      }
                );
            });
        });
    </script>
</body>
</html>