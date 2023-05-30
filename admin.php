<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="images/logo4.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
   
    <link rel="stylesheet" href="css/nav.css">
<style>
:root{
    --yellow:rgb(254 160 0);
    --hover:rgb(255 138 0);
    --white: #ffffff;
    font-family: 'Roboto', serif;
}        
 #admin {
    background: url(../images/admin.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    color: rgb(254 160 0);
    margin: 0 3.55rem;
    border: 2px solid var(--white);
    border-top-left-radius: 3rem;
    border-top-right-radius: 3rem;
    display: flex;
    flex-direction: column;
    height: 87vh;
    font-family: 'Roboto', serif;
    text-align: center;
 }
 .img{
    border-top-left-radius: 3rem;
    border-top-right-radius: 3rem;
    height: 87vha;
    z-index: 1;
 }
.section-h{
    margin-top: 1.5rem;
    margin-bottom: 3rem;
    color: white;
    font-size: 2rem;
    z-index: 100;
    position: absolute;
    top: 95px;
    left: 20em;

}
.admin1{
    position: absolute;
    top: 13rem;
    left: 28em;
    z-index: 100;
}
.admin2{
    position: absolute;
    top: 25rem;
    left: 24em;
    z-index: 100;
}
.login-btn{
    background-color: var(--yellow);
    color: black;
    padding: 1rem;
    font-size: 1.5rem;
    font-weight: bold;    
    border: 2px solid black;
    border-radius: 1.2rem;
    width: 233%;
    cursor: pointer;
    margin-top: 2rem;
    
}
.login-btn:hover{
    background-color: var(--hover);
}
</style>
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
                <a  class="nav-item active" href="admin.php">Home
                </a>            
                <a  class="nav-item active" href="logout.php">Logout
                </a>            
            </div>
        </nav>
    </div>  

<section id="admin">
    <img src="images/admin.jpg" alt="" class="img">
    <h1 class="section-h" id="section-h">Admin Dashboard</h1>
    <div class="admin1">
    <a href="booking_report.php"><button type="submit" name="Login" value="Login" class="login-btn">Bookings</button></a>
    <a href="driver_report.php"><button type="submit" name="Login" value="Login" class="login-btn">Drivers</button></a>
    </div>
    <div class="admin2">
    <a href="customer_report.php"><button type="submit" name="Login" value="Login" class="login-btn">Customers</button></a>
    <a href="feedback_report.php"><button type="submit" name="Login" value="Login" class="login-btn">Feedbacks</button></a>
    </div>

</section>
</body>
</html>