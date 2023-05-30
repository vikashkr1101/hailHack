<?php 

include "dbconfig.php";
$lisence=$_REQUEST['vehical'];
$city=$_REQUEST['city'];

$query="SELECT * FROM driver_register WHERE lisence ='$lisence' and city ='$city' ";
$result = select($query);

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
    <title>HailHACK-Driver List</title>
    <link rel="icon" href="images/logo4.png" type="image/x-icon"/>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="css/nav.css"> 
    <link rel="stylesheet" href="css/driver_list.css"> 
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
         <a class="nav-item" href="user_bookings.php">Profile</a>
         
         
     </div>
 </nav>
</div>
<section id="section_driver_list">
    <h2 class="section-h">Select Your Driver</h2>  
	<div class="dl_content">
	<div class="col-lg-12">
	<?php
	while($r=mysqli_fetch_array($result))
	{
		extract($r);
	?>
	<div class="dl_content1">
	    <div class="col-lg-3">
           
            <div  style="padding: 5px">
                <img alt="" src="images/<?=$image?>" class="d_img" />
			
		    </div >
	    
	    <div class="col-lg-8" >
            
            <div class="d_name">Driver <?=ucwords($r[1]);?></div>
            <div class="d_data"><span class="d_data_fix">Charge Per Hour-</span > <?=ucwords($r[8]);?> Rs</div>
            <div class="d_data"><span class="d_data_fix">Mobile No.-</span > <?=ucwords($r[4]);?></div>
            <div class="d_data"><span class="d_data_fix">Address-</span > <?=ucwords($r[3]);?></div>
            <div class="d_data"><span class="d_data_fix">City-</span > <?=ucwords($r[11])?> </div>
            
        </div>
        </div >
        <div>
        <a href="final_book.php?vehical=<?=$_REQUEST['vehical']?>&driverid=<?=$r[0]?>&city=<?=$_REQUEST['city']?>">
            <button class="dl_btn" name="book">
                Book <?=ucwords($r[1]);?>
            </button>
        </a>
        </div>
    </div>
    <?php
	}
	?>
    </div>
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
