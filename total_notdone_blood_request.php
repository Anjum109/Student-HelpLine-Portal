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
        if(!confirm('Do you want to Delete this blood request?')){
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


<div class="heading"style=" margin-left:240px; ">

   
    <span class="s">A</span>
    <span class="s" >L</span>
    <span class="s" >L</span>
    <span class="space"></span>
    <span class="s">B</span>
    <span class="s">L</span>
    <span class="s">O</span>
    <span class="s">O</span>
    <span class="s">D</span>
    <span class="space"></span>
    <span class="s">R</span>
    <span class="s">E</span>
    <span class="s">Q</span>
    <span class="s">U</span>
    <span class="s">E</span>
    <span class="s">S</span>
    <span class="s">T</span>
</div>


    


   
            

                    <?php
              
                $query = "SELECT * FROM blood_request WHERE complete='not done'";
                $query_run = mysqli_query($dbc, $query);
            ?>
                    <table class="center">
                       <tr>
                               <th>ID</th>
                               <th> NAME</th>
                                <th>Bloodgroup</th>
                               <th>Contact</th>
                               <th>Location</th>
                               <th>Reason</th>
                               <th>Date</th>
                               <th>Complete</th>
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
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['bloodgroup']; ?></td>
            <td><?php echo $data['contact']; ?></td>
            <td><?php echo $data['location']; ?></td>
            <td><?php echo $data['reason']; ?></td>
            <td><?php echo $data['date']; ?></td>
            <td><?php echo $data['complete']; ?></td>
          
            
                                <td>
                                    <span class="remove"> <a href="delete_blood_request.php?id=<?php echo $data['id']; ?>" class="delete"><i data-toggle="tooltip" data-placement="bottom" title="Delete" class="fas fa-trash" aria-hidden="true"></i></span>
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