<?php
include "dbconfig.php";
$city = '';
$query = "SELECT * FROM country_state_city GROUP BY city ORDER BY city ASC";
$result=select($query);
while($row = mysqli_fetch_array($result))
{
 $city .=$row["city"];
}
$uid=$_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>HailHACK-Book Driver</title>
    <link rel="icon" href="images/logo4.png" type="image/x-icon"/>
	
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="css/nav.css"> 
    <link rel="stylesheet" href="css/book_ride.css"> 
    <link rel="stylesheet" href="css/footer.css">  
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

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

<section id="section_book_ride">
    <div class="br_content">
  
  <form class="form-inline" method="post" action="advance.php" style="color:black;">

  <select class="form-control1" name="city">
  <!-- <select name="city" id="city" class="form-control selectpicker"> -->
 
  <option value="<?php echo $city?>" style="color:#07090A;font-weight:bold;font-size:16px">Select City
  </option>
  <!-- <option style="color:#07090A;font-weight:bold;font-size:16px">Delhi -->
  <!-- </option> -->
  <option style="color:#07090A;font-weight:bold;font-size:16px">Bangalore
  
 
  </select>

 <select class="form-control1" name="vehical">

  <option style="color:#07090A;font-weight:bold;font-size:16px">Vehical Type
  </option>
  <option style="color:#07090A;font-weight:bold;font-size:16px">LMV
  </option>
  <option style="color:#07090A;font-weight:bold;font-size:16px">HMV
  </option>
  </select></br><br>
  <input type="submit" class="br-btn" name="booking" value="Book Now">
	
 </form>
  
  </div>
</section>
	
 <!--============================= FOOTER =============================-->
 <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <img src="images/logo4.2.png" alt="" class="logo" style="margin-left:43%; width:2.5rem; height: 2.2rem;">
                <a class="navbar-brand" href="#">
                    <span style="font-size: 1.9rem;position: relative; top: 2.5px;">&nbsp; HailHACK &nbsp;</span>
                    <!-- <span class="ah">&nbsp;Driver 4 You</span> -->
                </a>
                <span style="position: relative;
                             top: -4.5px;
                             left: -15px;
                             font-size: 1.5rem;
                             color: #cccccc;">
                        Ltd.</span>
                        
                    <div class="copyright">
                        <p><br>Copyright &copy; 2023 Listing. All rights reserved.</a></p>
                        <br>
                        <ul>
                            <li><a class="icons facebook" href="https://www.facebook.com/Vikash Kumar/"><span class="fa fa-facebook"></span></a></li>&nbsp;
                            <li><a class="icons instagram" href="https://www.instagram.com/vikash__kr__/"><span class="fa fa-instagram"></span></a></li>&nbsp;
                            <li><a class="icons linkedin" href="https://www.instagram.com/vikash__kr__/"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
</body>

</html>