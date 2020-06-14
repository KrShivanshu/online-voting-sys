<?php
    //adding vote to the candidate and giving confirmation
    session_start();
    require('C:\xampp\htdocs\OVS\config/db.php');
            


		if(isset($_POST['btn']))
		{  

			$status = $_POST['btn'];
			$cid = $_SESSION['c_id'];
			//$status =stripcslashes($status);
		//$status =mysqli_real_escape_string($conn , $status);
		   if($status=='accept')
       // $names =stripcslashes($names);
		//$names =mysqli_real_escape_string($conn , $names);
           {
	           $statusQuery = "UPDATE candidate SET verified =2 where c_id='$cid'";
		       $res=mysqli_query($conn, $statusQuery)
		       or die("can't fetch query 2 ".mysqli_error($conn));
		       $copyQuery = "INSERT INTO login_detail(Username, email)
		       SELECT email, email 
		       FROM voters 
		       where voter_id='$cid'";
		       $copied=mysqli_query($conn, $copyQuery)
		       or die("can't fetch query 2 ".mysqli_error($conn));

		   }   
		   else if($status=='reject')
		   {
		       $statusQuery = "UPDATE candidate SET verified =1 where c_id='$cid'";
		       $res=mysqli_query($conn, $statusQuery)
		       or die("can't fetch query 3  ".mysqli_error($conn)); 
		   }
		   
	    }
	unset($_POST['c_id']);
?>