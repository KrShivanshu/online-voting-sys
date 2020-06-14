<?php
    //adding vote to the candidate and giving confirmation
    session_start();
    require('../config/db.php');
            


		if(isset($_POST['btn']))
		{  

			$status = $_POST['btn'];
			$vid = $_SESSION['voter_id'];
			//$status =stripcslashes($status);
		//$status =mysqli_real_escape_string($conn , $status);
		   if($status=='accept')
       // $names =stripcslashes($names);
		//$names =mysqli_real_escape_string($conn , $names);
           {
	           $statusQuery = "UPDATE voters SET verified =2 where voter_id='$vid'";
		       $res=mysqli_query($conn, $statusQuery)
		       or die("can't fetch query 2 ".mysqli_error($conn));
		       $copyQuery = "INSERT INTO login_detail(Username, email)
		       SELECT email, email 
		       FROM voters 
		       where voter_id='$vid'";
		       $copied=mysqli_query($conn, $copyQuery)
		       or die("can't fetch query 2 ".mysqli_error($conn));

		   }   
		   else if($status=='reject')
		   {
		       $statusQuery = "UPDATE voters SET verified =1 where voter_id='$vid'";
		       $res=mysqli_query($conn, $statusQuery)
		       or die("can't fetch query 3  ".mysqli_error($conn)); 
		   }
		   
	    }
	unset($_POST['voter_id']);
?>