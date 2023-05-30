<?php

include 'dbconfig.php';
$uid=$_SESSION['uid'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>HailHACK-Feedback Form </title>
    <link rel="icon" href="images/logo4.png" type="image/x-icon"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/feedback.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/driver_reg.css">  -->
    <link rel="stylesheet" href="css/footer.css">  
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<section id="section_feedback">
           
      
        <div class="form">
            <form id="form" method="post" >
                <h1 class="head">
                    FEEDBACK FORM
                </h1>
                <label for="u_name">Your Name</label>
                <input name="u_name" type="text" id="name" required/>
              
                <label for="d_name">Driver Name</label>
                <input name="d_name" type="text" id="d_name" required/>

                <label for="d_o_t">Date of Travel</label>
                <input name="d_o_t" type="date" id="d_o_t" required/>

                <label for="feedback">Feedback</label>
                <textarea name="feedback" id="feedback" required></textarea>
                <br>
                <button type="submit" name="submit" id="btn" class="login-btn">SUBMIT</button>
            </form>
        </div>

    </div>

    <?php
     
    if(isset($_REQUEST['submit']))
    {
        extract($_REQUEST);
        $query="INSERT into feedback (`uid` , `u_name` , `d_name` , `d_0_t` , `msg`)
                              VALUES ('$uid' , '$u_name' , '$d_name' , '$d_o_t' , '$feedback') ";
        $n=iud($query);
        if($n==1)
        {
                 echo'<script>alert("Thank You for the valuable Feedback!!!")
                 window.location = "book_ride.php?";
                      </script>';
       }
       else
           {
            echo '<script>alert("Something Wrong Pleace Try Again")
            window.location = "feedback.php?";
                 </script>';
       }
    

    }
    ?>

    
    
    <br><br><br>
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