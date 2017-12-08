<?php
session_start();
if(isset($_SESSION['uid']))
{
header('location:admin/admindash.php');
}
?>



<!DOCTYPE HTML>
<html lang="en_US">
<head>
<title align="center">Admin Login Page</title>
<style>
body{background-image:url(bgimage.jpg);color:white;}
</style>
</head>

<body>

<input type="button" value="Back" onclick="window.location='index.php';" style="margin:20px 0px 0px 20px; color:blue; height:40px; width:80px; font-size:20px"/>

<h1 align="center" >Admin Login</h1>
<form action="login.php" method="post">
<table align="center" border="1" cellpadding="5" >
<tr>
<td>User Name</td>
<td><input type="text" name="uname" required></td>

</tr>


<tr>
<td>Password</td>
<td> <input type="password" name="pass" required> </td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
</tr>
</table>





</form>

</body>
</html>





<?php

include('dbcon.php');
if(isset($_POST['login']))
{
 $user=$_POST['uname'];
 $passw=$_POST['pass'];
 
 $qry="SELECT * FROM admin WHERE username='$user' AND password='$passw';" ;
 $run=mysqli_query($con,$qry);
 $data=mysqli_fetch_assoc($run);
 
 $row=mysqli_num_rows($run);//count no. of rows of our query
 if($row==1)
 {
 $id=$data['admin_id'];
 $_SESSION['uid']=$id;
 header('location:admin/admindash.php');
 

}
else
{
	?>
	<script>
	alert('id and password are not correct');
	window.open('login.php','_SELF');
	</script>
<?php

}
}
?>