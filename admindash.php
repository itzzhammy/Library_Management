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
<div class="admintitle" align="center">
<h1 >Welcome to Admin Dashboard</h1>
<h4   style="float:right; margin:20px 20px 0px 0px; color:#fff; font-size:20px;"><a href="logout.php">Logout</a></h4>
</div>


<table border="1" align="center" style="margin-top:50px;" cellpadding="10">
<tr >
<td>1.<a href="addbookborrower.php">Insert borrower</a></td>
</tr>

<tr>
<td>2.<a href="addbookloan.php">insert LOan details </a></td>
</tr>


<tr>
<td>3.<a href="deletebookloan.php">delete LOan details </a></td>
</tr>


<tr>
<td>4.<a href="showborrower.php">show borrower details </a></td>
</tr>
</table




</body>
</html>
