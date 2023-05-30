<?php
include"dbconfig.php";
if(isset($_REQUEST['Login']))
	{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	$query="select * from user where email='$email' and password='$password'";
	
	$id="";
	if($valid)
	{
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_assoc($login_data))
		{
			$id=$data['u_id'];
		}
		
		$_SESSION['uid']=$id;
		header("location:book_ride.php");
			}
	else
	{
		echo"email or password is incorrect";
	}
	}
		
	}
    
  ?>