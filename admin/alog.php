<?php
 require_once 'C:\xampp\htdocs\OVS\admin/adminloginveri.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../voter/styles.css">
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
  <li><a href="alog.php">Refresh</a></li>
  
</ul>

		<div class="login-box">
			<h1>Admin Login</h1>
<form action="alog.php" method="post">
			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>

				<input type="text" placeholder="Admin id" name="user" id="user"  required/>
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