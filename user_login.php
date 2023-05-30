<?php
//index.php
include"dbconfig.php";
$country = '';
$state = '';
$city = '';
$query = "SELECT * FROM country_state_city GROUP BY country ORDER BY country ASC";
$result = select($query);
while($row = mysqli_fetch_array($result))
{
 $country .= '<option value="'.$row["country"].'">'.$row["country"].'</option>';
 $state .=$row["state"];
 $city .=$row["city"];
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
    <title>HailHAIL-Customer Login</title>
    <link rel="icon" href="images/logo4.png" type="image/x-icon"/>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">  
    <link rel="stylesheet" href="css/login.css">  
    <link rel="stylesheet" href="css/footer.css">  

    
	  
 
</head>

<body>
    
<?php include "nav.php";?>

    <h4 class="top-h">
       <a href="index.php" style="color:rgb(254 160 0);">HailHACK </a> 
        <span style="color:white;">❯ Customer</span>
    </h4>

    <section id="section-login">
        <div id="centerbox">
            <div class="customer-content">
            <h1 class="head">
                   Why to use HailHACK ?
                </h1>
                <br>
                    HailHACK provides you trained professional drivers who can drive your car with utmost safety and meanwhile you can do whatever you want untill you reach your destination.
                    Want to go home after a party , our drivers will driver you to your home safe and secure. 
                    <!-- Dear Customer, Hire drivers from <b>HailHACK</b> to drive you around. Let our professional driver take the wheel and drive your car. In the mean while you can catch up on your sleep;
                    Complete your office presentation; Complete your unfinished conversations; Continue your book reading. Experience the professionalism of driving with
                    <span class="span">
                        <b>HailHACK.</b> -->
                    </span> 
                    <br><br><br>
                    <div class="reg_content">
                        <div class="reg_sub">
                            <img src="images/reg2.png" alt="" class="reg_img">
                            Trained <br>Drivers
                        </div>
                        <div class="reg_sub">
                            <img src="images/reg3.png" alt="" class="reg_img">
                            Verified <br> Drivers
                        </div>
                        <div class="reg_sub">
                            <img src="images/reg4.png" alt="" class="reg_img">
                            Book Driver <br>&nbsp;&nbsp;&nbsp;&nbsp; 24/7 <br>
                        </div>
                        <div class="reg_sub">
                            <img src="images/reg5.png" alt="" class="reg_img">
                            Insaured &check; <br> &nbsp;&nbsp;&nbsp;&nbsp;Rides
                        </div>
                        <div class="reg_sub">
                            <img src="images/reg6.png" alt="" class="reg_img">
                            Affordable <br> &nbsp;&nbsp;Charges

                           
                        </div>
                    </div>   
                   
                    <a href="user_reg.php">
                    <button type="submit" name="Login" value="Login" class="login-btn">Register</button>
                    </a> 
                </div>
            <div class="forms">
                <h1 class="login-head" >
                   Existing Customer Login
                </h1>
                <br><br>
                <form action="c.php" method="post" style="align-items: center;
                    justify-content: center;">
                    
                    <span class="formtext"><i class="fas fa-user"></i> Email</span>
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" id="user" placeholder="@Registered email">
                  
                    <span class="formtext"><i class="fas fa-lock"></i> Password</span>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="pass****">

                    <button type="submit" name="Login" value="Login" class="login-btn">Login</button>
                    <br>
                    <div class="login">
                        <a href="change_pass.php" target="_blank">Forgot Password?</a>
                    </div>
                </form>
                <!-- <div class="login2">
                    Dont have an account? <a href="user_reg.php" target="_blank">Register here</a>
                </div> -->
            </div>
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

            if ($(window).scrollTop() > 0) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>

</html>
