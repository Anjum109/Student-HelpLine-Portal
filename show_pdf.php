<?php
include "config.php";
$pdf=$_GET['pdf'];

$records = mysqli_query($dbc,"select pdf from add_book where pdf='$pdf' ");

while($data = mysqli_fetch_array($records)){
    ?>
      <embed type="application/pdf" src="pdf/<?php echo $data['pdf'] ; ?>" width="1400" height="600">
    <?php
}
?>