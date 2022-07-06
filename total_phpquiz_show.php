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
    <link rel="stylesheet" href="css/total_quiz.css">
    <link rel="stylesheet" href="css/all_user_show.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script language="JavaScript" type="text/javascript">
    $(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Do you want to Delete this php quiz?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
        <style>
 .h{

    margin-left:280px ;
 }
       

           table{
           
                width: 900px;
                margin-top:130px ;
               
            }
        </style>

        </head>
<body>

		

<div class="h">
&nbsp;&nbsp;
   
<span class="s">Q</span>
    <span class="s" >U</span>
    <span class="s" >I</span>
    <span class="s">Z</span>
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



<?php 
       
		$sql= "SELECT * FROM php_quiz  ";
		$res = mysqli_query($dbc,$sql);
		if($data = mysqli_num_rows($res)){
            ?><br><br>
        
   
           <p> <?php echo '<p style="margin-left:1100px; font-size:20px;" ><b>Total question &nbsp;( '.$data.' )</p>';?></b></p>
            <?php    
        
        }

        
			?>

    

    </div>





   
            
    <?php
            
                $query = "SELECT * FROM php_quiz ";
                $query_run = mysqli_query($dbc, $query);
            ?>
                    <table class="center" style=" margin-bottom:20px;">
                       <tr>
                               <th>ID</th>
                               <th>QUESTIONS</th>
                                <th>OPTION1</th>
                                <th>OPTION2</th>
                                <th>OPTION3</th>
                                <th>OPTION4</th>
                               <th>Answer</th>
                               
                             
                             <th colspan=2>OPERATION</th>
                             
                             
                            
        

                        <?php
              
                if($query_run)
                {
                    foreach($query_run as $data)
                    {
            ?> 


                        <tbody>
                        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['que']; ?></td>
            <td><?php echo $data['option1']; ?></td>
            <td><?php echo $data['option2']; ?></td>
            <td><?php echo $data['option3']; ?></td>
            <td><?php echo $data['option4']; ?></td>
            <td><?php echo $data['ans']; ?></td>
            <td>
                                   <a href="add_php_quiz.php?id=<?php echo $data['id']; ?>">  <i data-toggle="tooltip" data-placement="bottom" title="ADD" class="fas fa-edit" ></i></a></span>
                                
                                </td>
                                <td>
                                    <span class="remove"> <a href="delete_phpquiz_question.php?id=<?php echo $data['id']; ?>" class="delete"><i data-toggle="tooltip" data-placement="bottom" title="Delete" class="fas fa-trash" aria-hidden="true"></i></a></span>
                                </td>
                                
                              
                               
                            </tr>
                          
                        </tbody>
<tbody>

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

    


   

    <script>
        $(document).ready(function () {

            $('.remove').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

  <script src="jquery-3.2.1.min.js"></script>


  



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>







    





   
            
