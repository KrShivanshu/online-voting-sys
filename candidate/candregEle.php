<?php
   
   require_once 'candElefor.php';
   
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<style>
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
  
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}
}
.active {
  background-color: #4CAF50;
}


/*the container must be positioned relative:
select  {
  position: relative;
  font-family: sans;
  font-size: 20px;
  background-color: #d7f5fa;
  color: black;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-radius: .50em;
  border-color: #d7f5fa ;
  
  
}

*/



</style>

 	<TITLE>
 		 Election Level
 	</TITLE>
  <link rel="stylesheet"  href="https://bootswatch.com/3/cerulean/bootstrap.min.css"/>
 	<link rel="stylesheet" type="text/css" href="cstyle.css"/>
 </HEAD>
 <body><br>
	<div class="nav">
			<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="../voter/vlog.php">Voter Login</a></li>
  <li><a href="../voter/vreg.php">Voter Registration</a></li>
  <li><a href="../voter/vlog.php">Vote</a></li>
  <li><a href="../result/reslvl.php">Result</a></li>
  <li><a href="../notification.php">Notification</a></li>
</ul>
	<h1>Candidate Registration Form</h1>
 	
<center>
 	<h2>Election Level</h2>
  <hr />
<div class="container">
	<?php if(count($errors)>0):?>
			<div class="alert alert-danger" align="center" style="color : red; border: 1px solid transparent;border-radius: .50em;">
			   <?php foreach($errors as $error):?>
			   	<li><?php echo "*".$error; ?></li>
			   <?php endforeach; ?>
			</div>
		<?php endif; ?>
	<form action="candregEle.php"  method="POST">
        
   <div class="container">
		<p>
			<label style="font-size: 23px;">Stand for:</label>
   
			<select name="level" style="width:300px;">
         <option value="" selected="selected">Select</option>
         <option value="LokSabha">Lok Sabha</option>
         <option value="StateLegislativeAssembly">State Legislative Assembly</option><!-- Vidhan Sabha-->  
         <option value="StateLegislativeCouncil">State Legislative Council</option><!--Assembly Election-->
         <option value="LocalPanchayat">Local Panchayat</option>
      </select>
      </div>
		</p>
		<hr/>
		<p>
			<input class="btn-lvl" type="submit" name="btn-lvl" value="Continue" />
		</p>
         
	</form>
</div>
</center>
</body>
</HTML>