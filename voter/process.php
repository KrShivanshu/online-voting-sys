<?php
   session_start();
   require('../config/db.php');



if(isset($_POST['btn']))
{
   $user =$_POST['user'];
   $pass =$_POST['pass'];

   $user =stripcslashes($user);
   $pass =stripcslashes($pass);
   $user =mysqli_real_escape_string($conn , $user);
   $pass =mysqli_real_escape_string($conn , $pass);


   $query="SELECT * from login_detail where username = '$user' and password = '$pass'";
   $result=mysqli_query($conn , $query)
   or die("can't fetch query ".mysqli_error($conn));
   $row = mysqli_fetch_array( $result);
   if($row['Username']==$user && $row['Password'] == $pass){
   	echo "Login Success";
     $_SESSION['user'] = htmlentities($_POST['user']);
   header('location:vhome.php');
   }
   else{
   	?> <script type="text/javascript">alert("Failed to login \nCheck your mail for credentials");</script> <?php
   }
   $_SESSION['user']=$user;
}
?>