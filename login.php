










<?php require "header.php"; 
session_start();
?>

<script>
function validate()
{
	
	
	var username=document.forms["login"]["username"].value;
	if(username=="")
	{
		alert("enter user name");
		document.forms["login"]["username"].focus();
		return false;
	}
	
	
	
	var password=document.forms["login"]["password"].value;
	if(password=="")
	{
		alert("enter password");
		document.forms["login"]["password"].focus();
		return false;
	}

	
	
		
	
	
}


</script>




<center>
<div style="border:2px solid black; width:30%; height:300px;">


<form method="POST" name="login" onsubmit="return validate()" action="logindb.php">
<table align="center" width="50%" border="0" style="padding:20px;">
 
<td>Username</td><td><input type="text" name="username"> </td>
</tr>
<tr>
<td>Password</td><td><input type="password" name="password"> </td>
</tr>
 
<td></td><td><input type="submit" name="login"value="login"> </td>
</tr>
</table>
</form>
New user?<a href="registration.php"> Register here </a>
</div>
</center>
<?php 
$_SESSION['loginuser']="true";
?>







<?php include "footer.php"; ?>