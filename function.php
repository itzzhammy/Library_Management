<?php
function showdetails_books($bookTitle)
{
	include('dbcon.php');
	$sql="SELECT * FROM `book` WHERE `book_title`='$bookTitle'";
	$run=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($run)>0)
	{
		
		$data=mysqli_fetch_assoc($run);
		?>
		<table border="1" align="center" style="width:50%; margin-top:40px;" >
		<tr>
		<th colspan="3">Book Details</th>
		</tr>
		
		<tr>
		<!-- <td rowspan="5"> <img src="dataimg/<?php// echo $data['image']; ?>" style="max-height:150px; max-width:120px;" /> </td> -->
		<th>Book Id</th>
		<td><?php echo $data['book_id'];?></td>
		</tr>
		
		<tr>
		  <th>Book Name</th>
		  <td><?php echo $data['book_title'];?></td>
		</tr>
         
        <tr>
		  <th>Publisher Name</th>
		  <td><?php echo $data['publisher_name'];?></td>
		</tr>
		
	
		
		</table>
		
		
		
		
		
		
		<?php
	}
else
{
	echo "<script>alert('No Such book exist');</script>";
	
	
}
	
	
	
}




?>