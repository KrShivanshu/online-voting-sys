<?php
   
   require_once 'adminElectionfor.php';
   
   require_once '../date.php';
  
   /*
   //$_SESSION['electiontype'] = $level;
   $_SESSION['level'] = $level;
   if(count($errors)==0)
   header('location:LokSabha.php');
   else 
   	echo "Error";

   $level = $_SESSION['level'] ;
   $sdate = $_SESSION['sdate'] ;
   $edate = $_SESSION['edate'] ;
   
   */
   //session_destroy();
?>
 <!DOCTYPE HTML>
 <HTML>
 <HEAD>
 	<TITLE>
 		Organise Election
 	</TITLE>
 	<LINK rel="stylesheet" href="../candidate/cstyle.css" />
 	<style type="text/css">
 		.nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  text-align: center;
  background-color: #333;
}

.nav li {
  display: inline-block;
  border-right:1px solid white;
  
}

li:last-child {
  border-right: none;
  
}


li a {
  display: block;
  color: white;
  font-family: Verdana,Geneva,sans-serif;
  letter-spacing: 0.7px;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}
.active {
  background-color: #333;
}
 	</style>
 </HEAD>
 <body><br>
	<div class="nav">
			<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="ahome.php">Main Page</a></li>
  <!--<li><a href="../voter/vlog.php">Voter Login</a></li>-->
  <li><a href="verifyvoter.php">Voter Verification</a></li>
  <li><a href="organise.php">Organise Election</a></li>
  <li><a href="../result/reslvl.php">Result</a></li>
  
  <li><a href="../notification.php">Notification</a></li>
</ul>
</div>
	<h1>Organise Election</h1>
 	

<center>
 	
<div class="container">
	<?php if(count($errors)>0):?>
			<div class="alert alert-danger">
			   <?php foreach($errors as $error):?>
			   	<li><?php echo $error; ?></li>
			   <?php endforeach; ?>
			</div>
		<?php endif; ?>
	<form action="organise.php"  method="post">
        <div class="container">

		<p>
			<label>Election for:</label>
			<select name="level" style="width:300px;">
			   <option value="">Select</option>
               <option value="LokSabha">Lok Sabha</option>
               <option value="StateLegislativeAssembly">State Legislative Assembly</option><!-- Vidhan Sabha-->  
               <option value="StateLegislativeCouncil">State Legislative Council</option><!--Assembly Election-->
               <option value="LocalPanchayat">Local Panchayat</option>
               
            </select>
		</p>
		<p>
			<label>Starting Date:</label>
			<input type="datetime-local" name="sdate" value="d-m-Y h:i:s A" style="width:300px; border:1px solid black;"/>
			
		</p>
		<p>
			<label>Ending Date:</label>
			<input type="datetime-local" name="edate" value="d-m-Y h:i:s A" style="width:300px; border:1px solid black;"/>
			
		</p>
		<p>
			<input class="btn-sd" type="submit" name="btn-sd" value="Continue" />
		</p>
         </div>
	</form>
</div>
</body>
</HTML>