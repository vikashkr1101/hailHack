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
     <title>HailHack-User Registration</title>
    <link rel="icon" href="images/logo4.png" type="image/x-icon"/>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">  
    <link rel="stylesheet" href="css/driver_reg.css"> 
    <link rel="stylesheet" href="css/footer.css">  
</head>

<body style="background-color: black;
  color: white">
    <!--============================= HEADER =============================-->
    <?php include "nav.php";?>
    
    <h4 class="top-h">
    <a href="index.php" style="color:rgb(254 160 0);">HailHACK </a> 
    <span style="color:white;">❯ Driver</span>
    </h4> 
    
    <section id="section-login" style="height: 69vh;">
	
	<div class="box">
    <form enctype="multipart/form-data" method="post" class="ureg_form">
    <h1 class="head">
                   User Registration
    </h1>
	Name&nbsp;<input type="text" class="form-control" name="name" required="required" placeholder="Name">
	Mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control"  name="mobile" required="required"  placeholder="Mobile">
	Email&nbsp; <input type="text" class="form-control"  name="email" required="required"  placeholder="Email">
    Password&nbsp;<input type="password" class="form-control" name="password" required="required"  placeholder="Password">
    &nbsp;

   
   <input type="submit"  id="btn" name="register" value="Register" class="login-btn">
 
   
   <div class="login">
       Already have an account? <a href="user_login.php" style="color:white;">Login here</a>
    </div>
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
	<?php
    if(isset($_REQUEST['register']))
    {    
         $name = $_REQUEST['name'];
         $email = $_REQUEST['email'];
         $mobile = $_REQUEST['mobile'];
         $password=$_REQUEST['password'];
         $query = "INSERT INTO `user` (`name`, `email`, `password`,`Mobile`) values
         ('$name', '$email', '$password', '$mobile')";
         $n=0;
         $n=iud($query);
         if ($query) {
            echo"<script>alert('Ragistration successful');
            </script>";
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($cid);
         }
    }
    // if(isset($_REQUEST['register']))
	// {
    //     extract($_REQUEST);
    //     $query="INSERT INTO `user` (`name`, `email`, `password`,`Mobile`) values
	// ('$name', '$email', '$password', '$mobile')";

	// if($query)	
	//  {
	// 	 echo"<script>alert('Registration successful');
	// 	 </script>";
	//  }
	// // else
	// // {
	// // 	echo"<script>alert('Something Wrong');
    // //     </script>";
	// // }

    // }
	
	?>
	
	



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

	