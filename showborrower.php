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
<form action="showborrower.php" method="post">
<tr>
<th style="font-size:20">Enter  Borrower id</th>
<td><input type="text" name="borcard_no" placeholder="Enter card no of borrower" required="required" style="height:30px"/></td>



<td colspan="2"><input type="submit" name="submit" style="height:30px" value="Search"/></td>

</tr>

</form>
</table>




<?php
include('function.php');
if(isset($_POST['submit']))
{   

include('../dbcon.php');
$borcard_no=$_POST['borcard_no'];
showdetails_borrower($borcard_no); 
} // <---- this is missing
?>

