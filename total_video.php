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


<div class="heading">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
    <span class="s">A</span>
    <span class="s" >L</span>
    <span class="s" >L</span>
    <span class="space"></span>
    <span class="s">V</span>
    <span class="s">I</span>
    <span class="s">D</span>
    <span class="s">E</span>
    <span class="s">O</span>
    <span class="s">S</span>
    
    
</div>



    </div>





   
            

                    <?php
              
                $query = "SELECT * FROM videos";
                $query_run = mysqli_query($dbc, $query);
            ?>
                    <table class="center" style=" margin-bottom:20px;">
                       <tr>
                               <th> ID</th>
                               <th>VIDEO</th>
                                <th>COVER</th>
                               <th>TITLE</th>
                               
                             <th >CATEGORY</th>
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
            <td><video   width="100" height="100" controls >
    <source src="videos/<?php echo  $data['name']; ?>" type="video/mp4"></video></td>

            <td><img style=" width:50px;"src="image/<?php echo $data['poster']; ?>" alt="No image"></td>
            <td><?php echo $data['content']; ?></td>
            <td><?php echo $data['category']; ?></td>
          
            
            <td>
                                    <span class="remove"> <a href="delete_video.php?id=<?php echo $data['id']; ?>" class="delete"><i data-toggle="tooltip" data-placement="bottom" title="Delete" class="fas fa-trash" aria-hidden="true"></i></a></span>
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