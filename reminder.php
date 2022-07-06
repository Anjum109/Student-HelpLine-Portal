


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
        <style>

        
           table{

                width: 900px;
            }
        </style>
<body>


<div class="heading">

   
<span class="s">A</span>
    <span class="s">L</span>
    <span class="s">L</span>
   
    <span class="space"></span>
    <span class="s">R</span>
    <span class="s">E</span>
    <span class="s">M</span>
    <span class="s">I</span>
    <span class="s">N</span>
    <span class="s">D</span>
    <span class="s">E</span>
    <span class="s">R</span>
    
    
</div>


    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h1 > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="backgroud-color:black;"class="fas fa-exclamation-circle"></i> </h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete_reminder.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Reminder??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>





   
            

                    <?php
              
$uid=$_SESSION['USER_ID'];

                $query = "SELECT * FROM reminder WHERE  user_id='$uid'";
                $query_run = mysqli_query($dbc, $query);
            ?>
                    <table class="center">
                       <tr>
                               <th>ID</th>
                               <th>TASK NAME</th>
                                <th>DATE</th>
                            
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
            <td><?php echo $data['tname']; ?></td>
            <td><?php echo $data['date']; ?></td>
            
          
            
                                <td>
                                    <span class="remove"> <i data-toggle="tooltip" data-placement="bottom" title="Delete" class="fas fa-trash" aria-hidden="true"></i></span>
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

   

</body>

