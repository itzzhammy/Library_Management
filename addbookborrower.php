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
<form method="post" action="addbookborrower.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;" cellpadding="5">



<tr>
<th>Borrower Name</th>
<td><input type="text" name="borname" placeholder="Enter name of borrower" required></td>
</tr>

<tr>
<th>Borrower Address</th>
<td><input type="text" name="boraddr" placeholder="Enter address of borrower " required></td>
</tr>

<tr>
<th>Borrower Phone</th>
<td><input type="text" name="borphone" placeholder="Enter phone of borrower " required></td>
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
$bname=$_POST['borname'];

$baddress=$_POST['boraddr'];

$bphone=$_POST['borphone'];

// $imagename=$_FILES['simg']['name'];
// $tempname=$_FILES['simg']['tmp_name'];

// move_uploaded_file($tempname,"../dataimg/$imagename");


$w="INSERT INTO `borrower`(`borrower_name`, `borrower_address`, `borrower_phone`) VALUES ('$bname','$baddress','$bphone')";
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