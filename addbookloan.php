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
include('title.php');
?>

<style>
.admintitle
{
background-color:#530602;
color:#fff;
margin-right:50px;
margin-left:50px;
height:100px;
border-radius:20px;
}

h1 {position:absolute;
	z-index:1;
	margin-top:25px;
	margin-left:400px;
	;}

	a,td {text-decoration:none; color:white;
			font-size:25px;}
	
body{background-image:url(bgimage.jpg);}	



</style>
<form method="post" action="addbookloan.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;" cellpadding="5">



<tr>
<th>Book id</th>
<td><input type="text" name="lbid" placeholder="Enter id of book" required></td>
</tr>

<tr>
<th>Branch id</th>
<td><input type="text" name="lbrid" placeholder="Enter id of branch " required></td>
</tr>

<tr>
<th>Borrower card No.</th>
<td><input type="text" name="lborid" placeholder="Enter card no. of borrower " required></td>
</tr>


<tr>
<th>Date out</th>
<td><input type="text" name="ldateout" placeholder="Enter Date out " required></td>
</tr>

<tr>
<th>Due Date</th>
<td><input type="text" name="lduedate" placeholder="Enter Due Date " required></td>
</tr>
<!-- <tr>
<th>Image</th>
<td><input type="file" name="simg"></td>
</tr> -->

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
</tr>

</table>
</form>
</body>
</html>

<?php
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


$w="INSERT INTO `book_loans`(`book_id`, `branch_id`, `borrower_card_no`, `date_out`, `due_date`) VALUES ('$lbid','$lbrid','$lborid','$ldateout','$lduedate')";
$result=mysqli_query($con,$w);

if($result == true)

{
?>
<script>
 alert('Data Inserted Successfully');
</script>
<?php
}

}

?>