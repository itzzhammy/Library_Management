<?php
function showdetails_borrower($borcard_no)
{
	include('../dbcon.php');
	$sql="SELECT * FROM `borrower` WHERE `borrower_card_no`='$borcard_no'";
	$run=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($run)>0)
	{
		
		$data=mysqli_fetch_assoc($run);
		?>
		<table align="center" border="1" width="80%;" >
		<tr>
		<th colspan="3">Borrower Details</th>
		</tr>
		
		<!-- <tr>
		<td rowspan="5"> <img src="dataimg/<?php //echo $data['image']; ?>" style="max-height:150px; max-width:120px;" /> </td> -->
		<th>Borrower Card NO.</th>
		<td><?php echo $data['borrower_card_no'];?></td>
		</tr>
		
		<tr>
		  <th>Borrower Name</th>
		  <td><?php echo $data['borrower_name'];?></td>
		</tr>
         
        <tr>
		  <th>Borrower Addtress</th>
		  <td><?php echo $data['borrower_address'];?></td>
		</tr>
		
		<tr>
		  <th>Borrower phone</th>
		  <td><?php echo $data['borrower_phone'];?></td>
		</tr>
		
	
		
		
		
		</table>
		
		
		
		
		
		
		<?php
	}
else
{
	echo "<script>alert('No Such Id exist');</script>";
	
	
}
	
	
	
}









?>