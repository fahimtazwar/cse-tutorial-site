<?php
echo 'this is not workin';
$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
    {
	   echo 'Not Connected To Server';
    } else {
		echo 'connected'
	}
	
if(!mysql_select_db($con,'tutorials'))
    {
	   echo 'Database not Selected';
    }
	
	$Name = $_POST['signInUserName'];
	$Password = $_POST['signInPassword'];
	$Email = $_POST['signInEmail'];
	
	$sql = "INSERT INTO registration_table (username,password,email) VALUES ('$Name','$Password','$Email')";
	
	if(!mysqli_query($con,$sql))
	{
		 echo 'Not Inserted';
	}
	
	else
	{
		
		echo 'Inserted';
	}
	
	header("refresh:2; url=RegistrationPage.html");
	
?>