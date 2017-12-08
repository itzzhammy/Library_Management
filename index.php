<!DOCTYPE HTML>
<html lang="en_US">
<head>
  <meta charset="UTF-8">
  <title>Library Management System</title>
  <style>
  body{background-image:url(bgimage.jpg);color:white;}
  a {color:white; font-size:30px; text-decoration:none;}
  td {font-size:20px;}
  </style>
</head>
<body>
<h3 align="right" style="margin=right:20px;"><a href="login.php">Admin Login</a></h3>
<h1 align="center">Welcome To Library Managemnet System</h1>

<form method="post" action="index.php" >
<table style="width:30%;" align="center" border="1" cellpadding="20" bordercolor="black">
   <tr>
       <td colspan="2" align="center" style="font-size:30px">Book Information</td>
   </tr>
   <tr>
       <td align="right">Enter book name</td>
       <td><input type="text" name="book_title" required style="height:30px"></td>

   </tr>
   <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" style="height:30px" value="Show Details"></td>
    </tr>





</table>
</form>
</body>
</html>



<?php
if(isset($_POST['submit']))
{
	$bookTitle=$_POST['book_title'];
	include('dbcon.php');
	
	include('function.php');
	
	showdetails_books($bookTitle);
	
}
?>