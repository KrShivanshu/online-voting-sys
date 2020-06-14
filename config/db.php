<?php

   require_once 'define.php';
   $conn = mysqli_connect(db_host,db_user,db_pass,db_name,db_port);
 // $conn = mysqli_connect('localhost','root','123456','ovs');

   if(mysqli_connect_errno()){

   	            echo 'Unable to connect Error: '.mysqli_coonect_errno();
         
        }
    /*else
    	echo "Passed";
    	*/
?>