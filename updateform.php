<?php
session_start();
    if(isset($_SESSION['uid']))
      {
           echo "";

        }
    else
        {
       header('location: ../login.php');
       }
?>

<?php
include('header.php');
include('title.php');
include('../dbcon.php');

$bid=$_GET['bid'];
$brid=$_GET['brid'];
$borid=$_GET['borid'];


$sql="SELECT * FROM book_loans WHERE book_id='$bid' AND branch_id='$brid' AND borrower_card_no='$borid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);



?>


<form method="post" action="updatedata.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;">

<tr>
<th>Book Id</th>
<td><input type="text" name="lbid" value=<?php echo $data['book_id'];?> required></td>
</tr>

<tr>
<th>Branch Id</th>
<td><input type="text" name="lbrid"  value=<?php echo $data['branch_id'];?> required></td>
</tr>

<tr>
<th>Borrower Card No</th>
<td><input type="text" name="lborid" value=<?php echo $data['borrower_card_no'];?> required></td>
</tr>

<tr>
<th>Date Out</th>
<td> <input type="text" name="ldateout" value=<?php echo $data['date_out'];?> required></td>
</tr>
<tr>
<th>Due Date</th>
<td><input type="text" name="lduedate"  value=<?php echo $data['due_date'];?> required></td>
</tr>
<!-- 
<tr>
<th>Image</th>
<td><input type="file" name="simg" required></td>
</tr> -->

<tr>



<td colspan="2" align="center">
 
 
<input type="submit" name="submit" value="Submit">
</td>

</tr>

</table>
</form>
</body>
</html>

