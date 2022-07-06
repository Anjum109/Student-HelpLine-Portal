<?php
  include 'config.php';?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/all_user_show.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script language="JavaScript" type="text/javascript">
    $(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Do you want to Delete this question?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
        <style>

        
           table{

                width: 900px;
             
            }
        </style>
<body>


<div class="heading">
&nbsp;&nbsp;
   
    <span class="s">A</span>
    <span class="s" >L</span>
    <span class="s" >L</span>
    <span class="space"></span>
    <span class="s">Q</span>
    <span class="s">U</span>
    <span class="s">E</span>
    <span class="s">S</span>
    <span class="s">T</span>
    <span class="s">I</span>
    <span class="s">O</span>
    <span class="s">N</span>
    
</div>


    </div>





   
            

                    <?php
              
                $query = "SELECT * FROM post";
                $query_run = mysqli_query($dbc, $query);
            ?>
                    <table class="center" style=" margin-bottom:20px;">
                       <tr>
                               <th>Post ID</th>
                               <th>User ID</th>
                                <th>Post Image</th>
                               <th>Content</th>
                               
                             <th >Created</th>
                             <th >OPERATION</th>
        </tr>
        

                        <?php
                if($query_run)
                {
                    foreach($query_run as $data)
                    {
            ?>
                        <tbody>
                        <tr>
            <td><?php echo $data['post_id']; ?></td>
            <td><?php echo $data['user_id']; ?></td>
            <td><img style=" width:50px;"src="<?php echo $data['post_image']; ?>" alt="No image"></td>
            <td><?php echo $data['content']; ?></td>
            <td><?php echo $data['created']; ?></td>
          
            
            <td>
                                    <span class="remove"> <a href="delete_question.php?id=<?php echo $data['id']; ?>" class="delete"><i data-toggle="tooltip" data-placement="bottom" title="Delete" class="fas fa-trash" aria-hidden="true"></i></a></span>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>


        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    




   

</body>