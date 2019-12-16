<?php require "header.php"; ?>


<script>
function validate()
{
	var name=document.forms["reg"]["name"].value;
	
	if(name=="")
	{
		alert("enter first name");
		document.forms["reg"]["name"].focus();
		return false;
	}
	
	var username=document.forms["reg"]["username"].value;
	if(username=="")
	{
		alert("enter user name");
		document.forms["reg"]["username"].focus();
		return false;
	}
	var email=document.forms["reg"]["email"].value;
	if(email=="")
	{
		alert("enter email");
		document.forms["reg"]["email"].focus();
		return false;
	}
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
	{
		alert("enter a valid email");
		document.forms["reg"]["email"].focus();
		return false;
		
	}
	
	var password=document.forms["reg"]["password"].value;
	if(password=="")
	{
		alert("enter password");
		document.forms["reg"]["password"].focus();
		return false;
	}
	
	var mobile=document.forms["reg"]["mobile"].value;
	if(mobile=="")
	{
		alert("enter mobile number");
		document.forms["reg"]["mobile"].focus();
		return false;
	}
	if(mobile.length<10)
	{
		alert("enter a valid mobile number");
		document.forms["reg"]["mobile"].focus();
		return false;
	}
	
	
		
	
	
}


</script>


<center>
<div style="border:2px solid black; width:30%; height:300px;">


<form method="post" name="reg" onsubmit="return validate()" action="database.php">
<table align="center" width="50%" border="0" style="padding:20px;">
<tr> 
<td>Name</td><td><input type="text" name="name"> </td>
</tr>
<tr> 
<td>Username</td><td><input type="text" name="username"> </td>
</tr>
<tr> 
<td>Email</td><td><input type="text" name="email"> </td>
</tr>
<tr> 
<td>Password</td><td><input type="password" name="password"> </td>
</tr>
<tr> 
<td>Mobile</td><td><input type="number" name="mobile"> </td>
</tr>
<tr> 
<td></td><td><input type="submit" name="register"value="Register"> </td>
</tr>
</table>
</form>
</div>
</center>




<?php include "footer.php"; ?>