<?php
   
  session_start(); 
   
   require_once '../date.php';
  

  if(isset($_POST['v-lvl-btn'])){
   $level = $_POST['level'] ;
   $_SESSION['level'] = $level;
   header('location:vote.php');

  }
  
   
   
   //session_destroy();
?>
 <!DOCTYPE HTML>
 <HTML>
 <HEAD>

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
 	<link rel="stylesheet" type="text/css" href="cstyle.css">
 </HEAD>
 <body><br>
	<div class="nav">
			<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="vhome.php">My Home</a></li>
  <li><a href="vlog.php">Voter Login</a></li>
  <li><a href="vreg.php">Voter Registration</a></li>
  <li><a href="vlog.php">Vote</a></li>
  <li><a href="../result/reslvl.php">Result</a></li>
  <li><a href="../notification.php">Notification</a></li>
</ul>
	<h1>casting Vote</h1>
 	

<center>
 	<h2>Election Level</h2>
<div class="custom-select">
	
	<form action="voterLvl.php"  method="POST">
        <div class="custom-select">

		<p>
			<label>Election for:</label>
			<select name="level" required>
			   <option value="" selected="selected">------Select------</option>
               <option value="LokSabha">Lok Sabha</option>
               <option value="StateLegislativeAssembly">State Legislative Assembly</option><!-- Vidhan Sabha-->  
               <option value="StateLegislativeCouncil">State Legislative Council</option><!--Assembly Election-->
               <option value="LocalPanchayat">Local Panchayat</option>
            </select>
		</p>
		
		<p>
			<input type="submit" name="v-lvl-btn" value="Continue" />
		</p>
         </div>
	</form>
</div>
</center>
</body>
</HTML>