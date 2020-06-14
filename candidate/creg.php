<?php
session_start();
require 'cFornAuth.php';
?>
<!DOCTYPE html>
<html>
<head>
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
h2 {
font-family: all;
color: black;
}

</style>
	<title>candidate reg form</title>
	
	<link rel="stylesheet" type="text/css" href="cstyle.css">
</head>
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
	<h1>CANDIDATE REGISTRATION FORM</h1>
	<h2>Personal Details</h2>
	<div class="container" align="center" style="color : red; border: 1px solid transparent;border-radius: .50em;">
	<?php if(count($errors1)>0):?>
			<div class="alert alert-danger" style="font-size: 15px;"><ol>
			   <?php foreach($errors1 as $error):?>
			   	<li><b><?php echo "*".$error; ?></b></li>
			   <?php endforeach; ?></ol>
			</div>
		<?php endif; ?>
	<center>
		<form action = "creg.php" method="post" >
			<table align="center" cellpadding="10">
				
				<tr>
					<td>Name 	:</td>
					<td><input type="text" name="name" placeholder="Name" value="<?php echo $name ?>" ></td>
				</tr>
				<tr>
					<td>Father's Name 	:</td>
					<td><input type="text" name="father_name" placeholder="Father" value="<?php echo $father_name ?>"></td>
				</tr>
				<tr>
					<td>Party Name 	:</td>
					<td><input type="text" name="party_name" placeholder="Party" value="<?php echo $party_name ?>"></td>
				</tr>
				<tr>
					<td>Email 	:</td>
					<td><input type="email" name="email" placeholder="eg: abc@xyz.com" value="<?php echo $email ?>"></td>
				</tr>
				<tr>
					<td>Aadhar  :</td>
					<td><input type="text" name="aadhar" placeholder="1234-1234-1234" value="<?php echo $aadhar ?>"></td>
				</tr>
				<tr>
					<td>Age 	:</td>
					<td><input type="text" name="age"  placeholder="" value="<?php echo $age ?>"></td>
				</tr>
				<tr>
					<td>Gender 	:</td>
					<td><input type="text" name="gender" placeholder="Male, Female, Other" value="<?php echo $gender ?>"></td>
				</tr>
				<tr><td align="center" colspan="2"><input class="btn-reg" type="submit" name="sub" id="sub" value="Submit">
				<input class="btn-reg" type="reset" name="reset" value="Reset"></td></tr>
			</table>
	    </form>
  </center>
</div>
</body>
</html>