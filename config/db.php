<?php

   require_once 'C:\xampp\htdocs\OVS\config/define.php';
   $conn = mysqli_connect(db_host,db_user,db_pass,db_name);
 // $conn = mysqli_connect('localhost','root','123456','ovs');

   if(mysqli_connect_errno()){

   	            echo 'Unable to connect Error: '.mysqli_coonect_errno();
         
        }
    /*else
    	echo "Passed";
    	*/
?>