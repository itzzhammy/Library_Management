<?php

include('../dbcon.php');
$bid=$_REQUEST['bid'];
$brid=$_REQUEST['brid'];
$borid=$_REQUEST['borid'];

$w="DELETE FROM `book_loans` WHERE `book_id`='$bid' AND `branch_id`='$brid' AND `borrower_card_no`='$borid'";
$result=mysqli_query($con,$w);

if($result == true)


{
?>
<script>
  alert('Data Deleted Successfully');
  window.open('deletebookloan.php','_Self');
</script>
<?php
}




?>
