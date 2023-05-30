
<?php
include"dbconfig.php";
$uid=$_SESSION['uid'];
  if(isset($_REQUEST['booking']))
  {
	  extract($_REQUEST);
    
	
      header("location:driver_list.php?vehical=$vehical&city=$city");

	}
  ?>
	
  

  