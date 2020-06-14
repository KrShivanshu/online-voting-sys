<?php
session_start();
   require('../config/db.php');
   //require('C:\xampp\htdocs\OVS\config/define.php');
   $user = '';
   $pass = '';
   

if(isset($_POST['btn']))
{
   $user = $_POST['user'];
   $pass = $_POST['pass'];

   $user =stripcslashes($user);
   $pass =stripcslashes($pass);
   $user =mysqli_real_escape_string($conn , $user);
   $pass =mysqli_real_escape_string($conn , $pass);
   
   



   $query="SELECT * from admin 
   where 
   username = '$user' 
   and
   password = '$pass'";
   $result=mysqli_query($conn, $query)
   or die("can't fetch query ".mysqli_error($conn));
   $row = mysqli_fetch_array($result);
   if($row){
      
      header('location:ahome.php');
   }
   else{
   	
   ?>
    <script type="text/javascript">alert("Error: Wrong id or password ;( \nRetry");</script>
   <?php
   //
   }

}
session_destroy();
?>


 