<?php
$name=$_POST['name'];
$uname=$_POST['username'];
$email=$_POST['email'];
$pswd=md5($_POST['password']);
$mobile=$_POST['mobile'];
if (isset($_POST['register']))
{
    if ((isset($_POST['name'])) and (isset($_POST['username']))and (isset($_POST['email'])) and (isset($_POST['password']))and (isset($_POST['mobile']))) 
	{
		
		$servername="localhost";
		$password="";
		$username="root";
		$dbname="linu";

		$conn=new mysqli($servername,$username,$password,$dbname);
		if($conn->connect_error)
		{
			die("connection error".$conn->connect_error);
		}
		$sql1="select * from register where Email='$email'";
		$result = $conn->query($sql1);
		if($result->num_rows >= 1) 
		{
		   echo "Email or Username already exist, try something else.";
        }
		else
		{
		
		
		$sql="insert into register(Name,Username,Email,Password,Mobile) values ('".$name."','".$uname."','".$email."','".$pswd."','".$mobile."')";
		$s=$conn->query($sql);
		echo "you have registered successfully.";
		?><br>
		<a href="login.php">login here </a>
		<?php
		}
		

	}	
        
	    
}
?>
