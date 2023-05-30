<?php
//index.php
include "dbconfig.php";
$uid=$_SESSION['uid'];
// $query = "SELECT * FROM driver_register where reg_id=".$_SESSION['id']."";
$query1 = "SELECT * FROM booking where uid=$uid";
$result1 = select($query1);

$query2 = "SELECT name FROM user WHERE u_id=$uid";
$result2 = select($query2);
// $uname= $result2['name'];

if ($result = select($query1)) {
    $rowcount = mysqli_num_rows( $result );
 }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>HailHACK-Booking Report</title>
    <link rel="icon" href="images/logo4.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/mybooking.css">
    <link rel="stylesheet" href="css/footer.css">
	  
 
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="navbar">
        <nav>
            <div class="brand">
                <img src="images/logo4.png" alt="" class="logo">
                <a class="navbar-brand" href="#">
                    <span>&nbsp; HailHACK &nbsp;</span>
                    <!-- <span class="ah">&nbsp;Driver 4 You</span> -->
                </a>
                <a class="nav-item" href="logout.php">Logout</a>
         <a class="nav-item" href="change_pass.php">Change Password</a>
         <a class="nav-item" href="feedback.php">Feedback</a>
         <a class="nav-item" href="book_ride.php">Book Ride</a>
         <a class="nav-item" href="user_profile.php">Profile</a>
                </a>            
            </div>
        </nav>
    </div>
    <h4 class="top-h">
       <a href="index.php" style="color:rgb(254 160 0);">HailHACK </a> 
        <span style="color:white;">❯ Customer</span>
    </h4>
    <section id="mybooking">
        <h1 style="font-size:2.5rem;">Welcome <span>
            
            <?php 
            while ($row = mysqli_fetch_array($result2)) {
                echo $row{'name'};
            }
                ?>
            </span></h1>
           
        <h3 style="border:2px solid white;margin-left: 46%;width: 8%;
             margin-top: 1rem;"><?php echo $rowcount ?>  Bookings</h3>
    </br></br>
    <div class="container-fluid">
	<div class="blank-page" id="display">
							<div class="row">
	<div class="col-lg-12" >
	<div class="col-lg-12" >
	<table border = "1" class="table table-hover">
	    <tr style="font-weight:bold">
           
            <th>Book Id</th>
            <th>Cust. Id</th>
            <th>Driver Id</th>
	        <th>Name</th>
	        <th>Contact Number</th>
            <th>Vehical</th>
	        <th>Date</th>
	        <th>Duration</th>
	        <th>Time</th>
            <th>Address</th>
	        <th>Status</th>
        </tr>
	
	
	
	
	<?php
	//include"dbconfig.php";
	while($r=mysqli_fetch_array($result1))
	{
		extract($r);
	?>
	
    <tr>
	<td><?=$b_id?></td>
	<td><?=$uid?></td>
	<td><?=$driverid?></td>
	<td><?=$name?></td>
	<td><?=$mobile?></td>
	<td><?=$vehical?></td>
	<td><?=$date?></td>
	<td><?=$duration?></td>
	<td><?=$Time?></td>
	<td><?=$address?></td>
	
    <?php 
    if($status==0){ ?>
					<td>Booked
                    </td>
					<?php }
	else if($status==1) { ?>
					<td>Confirmed
                   </td>
                   <?php }
	else if($status==2) { ?>
					<td>
                       Completed
                 
					<?php }  ?>
					
				
                    <script>
                        function myFunction() {
                          document.getElementById("demo").innerHTML = "Completed";
                        }
                    </script>
	
	

	
	</tr>
	<?php
	}
	?>
	<table>
	</div>
	</div>
	
	
	</div>
	</div>
</section>
	
	
	
<!--============================= FOOTER =============================-->
<!-- <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright &copy; 2023 Listing. All rights reserved </p>
                        <ul>
                        <li><a class="icons facebook" href="https://www.facebook.com/Vikash Kumar/"><span class="fa fa-facebook"></span></a></li>&nbsp;
                            <li><a class="icons instagram" href="https://www.instagram.com/vikash__kr__/"><span class="fa fa-instagram"></span></a></li>&nbsp;
                            <li><a class="icons linkedin" href="https://www.instagram.com/vikash__kr__/"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
	
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "country")
   {
    result = 'state';
   }
   else
   {
    result = 'city';
   }
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
});
</script>
    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>

</html>
