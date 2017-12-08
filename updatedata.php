<?php

include('../dbcon.php');
include('updateform.php');
if(isset($_POST['submit']))
{   

include('../dbcon.php');
$lbid=$_POST['lbid'];

$lbrid=$_POST['lbrid'];

$lborid=$_POST['lborid'];

$ldateout=$_POST['ldateout'];

$lduedate=$_POST['lduedate'];

// $imagename=$_FILES['simg']['name'];
// $tempname=$_FILES['simg']['tmp_name'];

// move_uploaded_file($tempname,"../dataimg/$imagename");


$q="UPDATE `student` SET `book_id`='$lbid',`branch_id`='$lbrid',`borrower_card_no`='$lborid',`date_out`='$ldateout',`due_date`='$lduedate' WHERE book_id='$lbid' AND branch_id='$lbrid' AND borrower_card_no='$lborid'";
$result=mysqli_query($con,$q);
if($result == true)

{
?>
<script>
  alert('Data Updated Successfully');
  window.open('updateform.php?lbid=<?php echo $data['book_id'];?>&lbrid=<?php echo $data['branch_id'];?>&lborid=<?php echo $data['borrower_card_no'];?>','_Self');
</script>
<?php
}


}

?>
