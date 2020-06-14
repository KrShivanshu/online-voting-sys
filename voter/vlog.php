<?php
 require_once 'C:\xampp\htdocs\OVS\voter/process.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">
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
.active {
  background-color: #333;
}
</style>
<body><br>
  <div class="nav">
    <ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="vlog.php">Reset</a></li>
  <li><a href="vreg.php">Voter Registration</a></li>
  <li><a href="../notification.php">Notification</a></li>
  <li><a href="../result/reslvl.php">Result</a></li>
 
</ul>

		<div class="login-box">
			<h1>Voter Login</h1>
<form action="vlog.php" method="post">
			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>

				<input type="text" placeholder="Voter id" name="user" id="user"  required/>
			</div>
			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="Password" placeholder="Password" name="pass" id="pass" required/>
			</div>
			<input class="btn" type="submit" name="btn" value="login">
		</div>	
</form>	
</head>
</body>
</html>