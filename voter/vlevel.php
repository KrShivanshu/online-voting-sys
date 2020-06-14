<?php
   require_once 'C:\xampp\htdocs\OVS/date.php';
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


</style>

 	<TITLE>
 		 Election Level
 	</TITLE>
 
 	<link rel="stylesheet" type="text/css" href="../candidate/cstyle.css"/>
 </HEAD>
 <body><br>
	<div class="nav">
			<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="vhome.php">My Home</a></li>  
  <li><a href="vreg.php">Voter Registration</a></li>
  <li><a href="vlevel.php">Refresh</a></li>
  <li><a href="../result/reslvl.php">Result</a></li>
  <li><a href="../notification.php">Notification</a></li>
  <li><a href="vlog.php">LogOut</a></li>
</ul>
	<h1>Cast Vote</h1>
 	
  

<center>
 	<h2>Election Level</h2>
  <hr />

	<form action="chkdb4ele.php"  method="POST">
        
   <div class="container">
		<p>
			<label style="font-size: 20px;">Stand for:</label>
   
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