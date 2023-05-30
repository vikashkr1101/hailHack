<?php
include 'dbconfig.php';
if(isset($_REQUEST['submit']))
    {
        extract($_REQUEST);
        $did=$_POST['d_id'];
        $query="DELETE FROM driver_register WHERE reg_id=$did";
        $n=iud($query);
        if($n==1)
        {
                 echo'<script>alert("Driver deleted from database!!!")
                 window.location = "driver_report.php?";
                      </script>';
       }
       else
           {
            echo '<script>alert("Something Wrong Pleace Try Again")
            window.location = "driver_report.php?";
                 </script>';
       }
    }    
