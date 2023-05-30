<?php
include"dbconfig.php";
$uid=$_SESSION['uid'];
  if(isset($_REQUEST['final_booking']))
  {
	  
	  extract($_REQUEST);
	$query="INSERT INTO `booking`(`uid`,`city`, `date`, `duration`, `name`, `mobile`, `email`, `vehical`, `driverid`, `status` , `address`, `Time`)
	VALUES
	('$uid', '$city', '$date', '$duration', '$name', '$mobile', '$email','$vehical','$driverid','1','$address','$time')";
	
	
	 $n=iud($query);
	 if($n==1)
	 {
        header("location:payment.php?");
	}
	else
		{
		 echo'<script>alert("Something Wrong Pleace Try Again")
		 window.location = "driver_list.php?";
              </script>';
	}
	 }
  ?>