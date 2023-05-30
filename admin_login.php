<?php
//index.php
include"dbconfig.php";

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
    <title>HailHack-Admin Login</title>
    <link rel="icon" href="images/logo4.png" type="image/x-icon"/>
    <!-- Google Fonts --> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/login.css"> 
    <link rel="stylesheet" href="css/footer.css">  
	  
 
</head>

<body style="background-color: black;
  color: white;">
    <!--============================= HEADER =============================-->
    <?php include "nav.php";?>
       
    <h4 class="top-h">
    <a href="index.php" style="color:rgb(254 160 0);">HailHACK </a>  
        <span style="color:white;">❯ Driver</span>
    </h4>

    <section id="section-login">
        <div id="centerbox">
            <div class="forms"  style="border-radius:0px;">
                <span class="head">
                    Admin LogIn
                </span>
                <br><br>
                <form method="post">
                    <span class="formtext">Admin Name</span>
                    <i class="fas fa-user"></i>
                    <input type="text" name="a_name" id="admin" placeholder="admim name">

                    <span class="formtext">Password</span>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="pass****">

                    <button type="submit" name="Login" id="btn" value="Login" class="login-btn">Login</button>
                </form>
                
            </div>
        </div>
        <?php
           
            if(isset($_REQUEST['Login']))
                {
                    $query="select * from admin_login where a_name='$a_name' and password='$password'";
                    if($query){
                        echo'<script>alert("Login Suceess")
                        window.location = "admin.php?";
                             </script>';

                    }

                }
        ?>

            
        
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