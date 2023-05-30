<?php
//index.php
include "dbconfig.php";
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
    <title>HailHack-Driver Registration</title>
    <link rel="icon" href="images/logo4.png" type="image/x-icon"/>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">  
    <link rel="stylesheet" href="css/driver_reg.css">  
    
    <link rel="stylesheet" href="css/footer.css">  
	
 
</head>

<body>
    <!--============================= HEADER =============================-->
      
<?php include "nav.php";?>

<h4 class="top-h">
   <a href="index.php" style="color:rgb(254 160 0);">HailHACK </a> 
    <span style="color:white;">❯ Driver</span>
</h4> 
    
    <section id="section-login">
	<div class="box" >
    
	<form class="form-inline " enctype="multipart/form-data" method="post">
	<h1 class="head">
                   Driver Registration
                </h1>
    Name&nbsp;<input type="text" class="form-control" name="driname" required="required" placeholder="Name">
    Mobile&nbsp; <input type="text" class="form-control"  name="mobile" required="required"  placeholder="Mobile">
    Email<input type="text" class="form-control"  name="email" required="required"  placeholder="Email">
	Address&nbsp;<input type="text" class="form-control" name="address" required="required"  placeholder="Address">
      
    Age&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" name="age" required="required" placeholder="Age">
	Password<input type="password" class="form-control" name="password" required="required"   placeholder="Password">
    Vehical&nbsp;
	<select class="form-control" name="lisence">

	Select vehical type<option>Select vehical type</option>
	<option value="LMV">LMV</option>
	<option value="HMV" >HMV</option>
   	</select> &nbsp;
    Lisence&nbsp;
	<input type="text" name="charge" class="form-control" placeholder="DL no">
   Country&nbsp;&nbsp;<select name="country" id="country" class="form-control action selectpicker">
   
    <?php echo $country; ?>
   </select>&nbsp;&nbsp;
   State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <select name="state" id="state" class="state">
   <option value="Karnataka">Karnataka</option>
	</select>&nbsp;&nbsp;
   City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <select name="city" id="city" >
   <option value="Bangalore">Bangalore</option>
   </select>&nbsp;&nbsp;
   Image&nbsp;&nbsp;<input type="file" name="myimage" class="form-control" >
   
   <input type="submit"  class="login-btn" name="register" value="Register">
  
   <div class="login" >
                       Already have an account? <a href="driver_login.php" style="color:white;">Login here</a>
   </div>
</form>

	</div>
    
    <?php
	if(isset($_REQUEST['register']))
	{
		
	    extract($_REQUEST);
	    $error=$_FILES["myimage"]["error"];

        $name=$_FILES["myimage"]["name"];
        $type=$_FILES["myimage"]["type"];
        $size=$_FILES["myimage"]["size"];
        $tmp_name=$_FILES["myimage"]["tmp_name"];

	     $query="INSERT INTO `driver_register`
	    (`name`, `age`, `address`, `mobile`, `email`, `password`,`lisence`, `charge`, `country`, `state`, `city`, `image`)values
	    ('$driname', '$age', '$address', '$mobile', '$email', '$password','$lisence', '$charge', '$country', '$state', '$city', '$name')";

	    if(move_uploaded_file($tmp_name,"images/$name"))
	    {
	    $n=iud($query);
	     if($n==1)
	     {
		 
	    	 echo"<script>alert('Registration Successful');
           	 window.location = 'driver_login.php?';
                 
	    	 </script>";
	    }
	
	    }
	    else
	    {
	    	echo"Something Wrong";
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

	