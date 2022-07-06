


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
    
    <link rel="stylesheet" href="css/feedback_display.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.css">

        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script language="JavaScript" type="text/javascript">
            
    $(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Do you want to Delete this teacher data?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
<body>

<div class="heading">
    <span class="s">A</span>
    <span class="s" >L</span>
    <span class="s" >L</span>
    <span class="space"></span>
    <span class="s">F</span>
    <span class="s">E</span>
    <span class="s">E</span>
    <span class="s">D</span>
    <span class="s">B</span>
    <span class="s">A</span>
    <span class="s">C</span>
    <span class="s">K</span>
</div>

    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Reply to The Feedback </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


<!-- starting php code -->
<?php
                  
                 
                  if(isset($_POST['submit'])){
                     
                     $email = $_POST['email'];
                     $subject = $_POST['subject'];
                     $message = $_POST['message'];
                     $sender = "From: sharminbinty41@gmail.com";
                     
                     
                     if(mail( $email, $subject, $message, $sender)){
                    
                        $subject = "";
                        $message = "";
               
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { sweetAlert("Success","  Email successfully Send to ' . $email . ' ","success");';
                        echo '}, 500);</script>';
               
              

                  }else{
                   
               
  
                    echo '<script type="text/javascript">';
                    echo 'setTimeout(function () { sweetAlert("<b>Oops...","Mail not sent!...</b>","error");';
                    echo '}, 500);</script>';
               
                  }
                
                  }
                  ?>





                <form action="" method="POST">

                    <div class="modal-body">

                        

                        
                        <div class="form-group">
                            <label> TO: </label>
                            <input type="email" name="email" id="email" class="form-control"
                              >
                        </div>

                        <div class="form-group">
                            <label> Subject </label>
                            <input type="text" name="subject" id="Subject" class="form-control"
                                placeholder="Enter Subject" required>
                        </div>

                        <div class="form-group">
                            <label> Message </label>
                            
                               <textarea id="message" name="message"style="height:90px ;"class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" id="btn" class="btn btn-primary">Send</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

  

    </div>





   
            

                    <?php
              
                $query = "SELECT * FROM feedback";
                $query_run = mysqli_query($dbc, $query);
            ?>
   <table class="center">
                       <tr>
                       <th>ID</th>
                       <th>User NAME</th>
                        <th>USER EMAIL</th>
                        <th>COMMENTS</th>
                        <th colspan="2" >ACTION</th>
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
            <td><?php echo $data['UserName']; ?></td>
            <td><?php echo $data['Useremail']; ?></td>
            <td>"<?php echo $data['comments']; ?>"</td>
            
                                <td>
                                    <span class="reply"> <i  data-toggle="tooltip" data-placement="bottom" title="Reply"  class="fas fa-pen" aria-hidden="true"></i></span>
                                </td>
                                <td>
                                    <span class="remove"> <a href="delete_feedback.php?id=<?php echo $data['id']; ?>" class="delete"><i data-toggle="tooltip" data-placement="bottom" title="Delete" class="fas fa-trash" aria-hidden="true"></i></a></span>
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.js"></script>


   

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

    <script>
        $(document).ready(function () {

            $('.reply').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#email').val(data[2]); 
                $('#message').val(data[3]);   
                      
            });
        });
    </script>


</body>




























