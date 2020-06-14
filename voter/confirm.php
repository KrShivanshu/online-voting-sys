<?php


    //session_start();
    //adding vote to the candidate and giving confirmation
    require('../config/db.php');
   
if(isset($_POST["vote"])){            
    if(isset($_POST["cand"]))
    {   

    	$user =$_SESSION['user'];
    	$level =$_SESSION["level"];
    	 


		$names = $_POST["cand"];
        $names =stripcslashes($names);
		$names =mysqli_real_escape_string($conn , $names);

	    $countQuery = "UPDATE candidate SET count=count + 1 where cname= '$names'";
		if($res=mysqli_query($conn, $countQuery))
			{
				$registerVotedQuery = "UPDATE login_detail SET $level = 1 where Username = '$user'"
                   or die("can't fetch registerVotedquery ".mysqli_error($conn)) ;
                   $result= mysqli_query($conn, $registerVotedQuery); 
                   if($result){
				?> <script type="text/javascript">
					window.open ('votesuccess.html','_self',false);
					</script> <?php
				}
			}
		else
			{
				?> <script type="text/javascript">
                    alert("Vote not registered try again!");
					window.open ('vlevel.php','_self',false);
					</script> 
				<?php
			}
	    mysqli_close($conn);
	    ?>
<?php
	}
	else
	{    $_SESSION['user']=$user;
         $_SESSION['level']=$level;
		?> <script type="text/javascript">
                    alert("Please  choose a candidate before submitting !");
					window.open('vote.php','_self',false);
					</script> 
				<?php
		
    }}
?>




