<?php
include "dbconfig.php";
$uid=$_SESSION['uid'];
$query=" SELECT city FROM `country_state_city";
$result=select($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    
    <!-- Page Title -->
    <title>HailHack-Booking Details</title>
    <link rel="icon" href="images/logo4.2.png" type="image/x-icon"/>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="css/nav.css"> 
    <link rel="stylesheet" href="css/final_book.css"> 
    <link rel="stylesheet" href="css/footer.css"> 

<script>$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#txtDate').attr('min', minDate);
});
</script>
</head>

<body>

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
         
         
     </div>
 </nav>
</div>
    
<section id="section_final_book">
    <div id="centerbox">
        <h1 class="head">
        Book Your Driver 
                </h1>     
      <div class="section_content">
        <div>
  
            <form class="form" method="post" >
            <input type="date" style="color:black;font-weight:bold;" name="date" id="txtDate"  class="form-control2" required/> 
            <input type="text" style="color:black; font-weight:bold;" name="name" placeholder="Name" class="form-control form-control2" required>
            <input type="text" style="color:black; font-weight:bold;" name="mobile" placeholder="Mobile" class="form-control form-control2" required>
            <input type="text" style="color:black; font-weight:bold;" name="email" placeholder="Email (optional)" class="form-control form-control2" >
            <input type="text" style="color:black; font-weight:bold;" name="address" placeholder="Enter Your Full Address " class="form-control form-control2" required>
            <input type="text" style="color:black; font-weight:bold;" name="duration" value="duration" placeholder="Booking Duration in Hours" class="form-control form-control2" required>
            <input type="text" style="color:black; font-weight:bold;" name="time" placeholder="Time (From - To in am/pm )" class="form-control form-control2" required>
            
            <button type="submit" name="final_booking" value="Login" class="login-btn">Confirm</button>
	
            </form>
  
        </div>
        <?php

            if(isset($_REQUEST['final_booking']))
            {
	  
	              extract($_REQUEST);
                  $_SESSION['duration']=$duration;
                //   header("location:payment.php?");
	            $query="INSERT INTO `booking`(`uid`,`city`, `date`, `duration`, `name`, `mobile`, `email`, `vehical`, `driverid`, `status` , `address`, `Time`)
	            VALUES
	            ('$uid', '$city', '$date', '$duration', '$name', '$mobile', '$email','$vehical','$driverid','0','$address','$time')";
	
	
	             $n=iud($query);
	             if($n==1)
	             {
                    
                     header("location:payment.php?duration=$duration");
	            }
	            else
	            	{
	            	 echo'<script>alert("Something Wrong Pleace Try Again")
	            	 window.location = "driver_list.php?";
                          </script>';
	            }
	             }
            ?>
  
	  </div>
	</div>
		
</section>
    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 0) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>



</body>

</html>