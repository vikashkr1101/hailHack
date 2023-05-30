<?php
//index.php
include 'dbconfig.php';

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
    <title>HailHack-Change Password</title>
    <link rel="icon" href="images/logo4.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/change-pass.css">
 
</head>

<body style="background-color: black;
  color: rgb(247 41 3);">
    <!--============================= HEADER =============================-->

    <div class="navbar">
 <nav>
     <div class="brand">
         <img src="images/logo4.png" alt="" class="logo">
         <a class="navbar-brand" href="#">
            <span>&nbsp; HailHACK &nbsp;</span>
         </a>
         <a class="nav-item" href="logout.php">Logout</a>
         <a class="nav-item" href="change_pass.php">Change Password</a>
         <a class="nav-item" href="feedback.php">Feedback</a>
         <a class="nav-item" href="book_ride.php">Book Ride</a>
         <a class="nav-item" href="user_profile.php">Profile</a>  
         
     </div>
 </nav>
</div> 

<section id="section_cpass">
   
     <div id="centerbox">
     <div class="cpass">
        <img src="/image/cpass_bg-rm.pg" alt="" class="cp_img">
    </div>
            <div class="form1" >
                <span class="head">
                  Change Password
                </span>
                <br><br>
                <form action="" method="post" style="align-items: center;justify-content: center;">
                    <span class="formtext">Email</span>
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" id="user" placeholder="@email">
                    <span class="formtext">New Password</span>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password1" id="password" placeholder="new pass****" required >
                    <span class="formtext">Confirm New Password</span>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password2" id="password" placeholder="confirm new pass****" required>
                    <br>
                    <button type="submit" name="change" value="Login" id="btn">Change</button>
                    <!-- <button type="submit" name="cancel" value="cancel" id="cancel-btn"><a href="book_ride.php">Cancel</a></button> -->
                </form>
                
            </div>
            </div>
            
        
    </div></br></br></br></br></br>
	
	
	</div></br></br></br></br></br></br></br></br></br></br></br>
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



    <?php
     $conn = mysqli_connect("localhost", "root", "", "hailhack");
    if(isset($_REQUEST['change']))
    {

        extract($_REQUEST);
        $email=$_REQUEST['email'];
        $pass1=$_REQUEST['password1'];
        $pass2=$_REQUEST['password2'];
        $query = mysqli_query($conn,"SELECT * from user where email='$email'");
        if (mysqli_num_rows($query)==0) 
        {
            echo '<div class="alert alert-danger alert-dismissible mx-5" role="alert" style="    margin-right: 56rem!important;
            margin-left: 30rem!important;
            position: absolute !important;
            top: 84px !important;
            height: 8%;
            width: 36.5% !important;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Email not found. Kindly enter registered email.
            </div>';
        }
        else
        {
            if($pass1!=$pass2) {
                echo '<div class="alert alert-danger alert-dismissible -mx-5" role="alert" style="    margin-right: 56rem!important;
                margin-left: 30rem!important;
                position: absolute !important;
                top: 84px !important;
                height: 8%;
                width: 36.5% !important;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 New Password and Confirm New Password do not match.
                </div>';
            }
            else
            {
                $res="UPDATE user SET password='$pass2' where email='$email'";
                $n=iud($res);
                
                if($n==1)
                {
                    echo'<script>alert("Password Changed Successfully")</script>';
                    header("location:user_login.php");
                

                }
            }

        }

    }
?>

    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

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
