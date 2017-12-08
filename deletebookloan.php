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

<table align="center" style="margin-top:20px">

<form action="deletebookloan.php" method="post">
<tr>
<th style="font-size:20">Enter  Book id</th>
<td><input type="text" name="bid" placeholder="Enter Book id" required="required" style="height:30px"/></td>

<th style="font-size:20">Enter  Branch id</th>
<td><input type="text" name="brid" placeholder="Enter Branch id" required="required" style="height:30px"/></td>

<th style="font-size:20">Enter  Borrower card no</th>
<td><input type="text" name="borid" placeholder="Enter Borrower card no" required="required" style="height:30px"/></td>


<td colspan="2"><input type="submit" name="submit" style="height:30px" value="Search"/></td>

</tr>

</form>
</table>

<table align="center" width="80%" border="1" style="margin-top:10px;">
<tr style="background-color:000; color:#fff;">
<th>Book id</th>
<th>Branch id</th>
<th>Borrower id</th>
<th>Date out</th>
<th>Due Date</th>
<th>Edit</th>

</tr>
<?php

if(isset($_POST['submit']))
{
include('../dbcon.php');
$bid=$_POST['bid'];
$brid=$_POST['brid'];
$borid=$_POST['borid'];



 $sql="SELECT * FROM book_loans WHERE (book_id='$bid') AND (branch_id='$brid') AND (borrower_card_no='$borid')";
 $run=mysqli_query($con,$sql);


// $sql="SELECT * FROM book b, branch br , borrower bor WHERE b.book_id='$bid' AND br.branch_id='$brid' AND bor.borrower_card_no='$borid'";
// $run=mysqli_query($con,$sql);

// $sql="SELECT * FROM book_loans inner join book on book_loans.book_id = book.book_id inner join branch on book_loans.branch_id = branch.branch_id inner join borrower on book_loans.borrower_card_no = borrower.borrower_card_no WHERE book_id='$bid' AND branch_id='$brid' AND borrower_card_no='$borid'";
 
//  $run=mysqli_query($con,$sql);


// $sql="SELECT * FROM book_loans as bl inner join book as b on b.book_id = bl.book_id inner join branch as br on br.branch_id = bl.branch_id inner join borrower as bor on bor.borrower_card_no = bl.borrower_card_no WHERE bl.book_id='$bid' AND bl.branch_id='$brid' AND bl.borrower_card_no='$borid'";


if(mysqli_num_rows($run)<1)
{
echo "<tr><td colspan='6'>No Record Found</td></tr>";

}
else
{
$count=0;
while($data=mysqli_fetch_assoc($run))
{
$count++;
?>
<tr align="center">
<td><?php echo $data['book_id'];?></td>
<!-- <td><img src="../dataimg/<?php //echo $data['image']; ?>" style="max-width:100px;"/></td> -->
<td><?php echo $data['branch_id'];?></td>
<td><?php echo $data['borrower_card_no'];?></td>
<td><?php echo $data['date_out'];?></td>
<td><?php echo $data['due_date'];?></td>
<td><a href="deleteform.php?bid=<?php echo $data['book_id'];?>&brid=<?php echo $data['branch_id'];?>&borid=<?php echo $data['borrower_card_no'];?>">Delete</a></td>

</tr>
<?php
}

}

}
?>



</table>
