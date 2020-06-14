<?php

   require('C:\xampp\htdocs\OVS\config/db.php');
   require('mail.php');
   //require('C:\xampp\htdocs\OVS\config/define.php');
   
   $query="SELECT * from login_detail"; 
   if($result=mysqli_query($conn , $query))
   {
   while($row = mysqli_fetch_array($result))
   {
   $emailing=$row['email'];
   $passing=$row['Password'];
   send_mail($emailing,$passing);
   
}
}
mysqli_close($conn);
?>