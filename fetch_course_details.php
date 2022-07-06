<?php
include "config.php";

	
		 $id=$_POST['txt1'];

		$q="select * from courses where id=$id";
		$result=mysqli_query($dbc,$q);
		$res=mysqli_fetch_array($result); 

	?>
      <div class="card col-md-6">
           <?php $_SESSION['message']=$res['description'];
           	
         
            header("location:course_details_show.php?course_name=".$res['course_name']); ?>


      </div>

	
	<?php ?>