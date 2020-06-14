<?php 
session_start();
require 'C:\xampp\htdocs\OVS\voter\formauth.php';
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

</style>


	<title>voter reg form</title>
	<link rel="stylesheet" type="text/css" href="../candidate/cstyle.css">
</head>
<body><br>
	<div class="nav">
			<ul>
  <li><a href="../index.php">Home</a></li>
  
  <li><a href="vlog.php">Voter Login</a></li>
  <li><a href="vreg.php">Voter Registration</a></li>
  <li><a href="vlog.php">Cast Vote</a></li>
  <li><a href="../result/reslvl.php">Result</a></li>
  <li><a href="../notification.php">Notification</a></li>
</ul>
	<h1>VOTERS REGISTRATION FORM</h1>
	<div class="container" align="center" style="color : red; border: 1px solid transparent;border-radius: .50em;">
	<?php if(count($errors)>0):?>
			<div class="alert alert-danger" style="font-size: 15px;"><ol>
			   <?php foreach($errors as $error):?>
			   	<li><b><?php echo "*".$error; ?></b></li>
			   <?php endforeach; ?>
			</ol>
			</div>
		<?php endif; ?>
	<form action ="vreg.php" method="post" >
	<table align="center" cellpadding="10">
		<tr>
			<td>Name 	:</td>
			<td><input type="text" name="name" placeholder="Name" value="<?php echo $name ?>"></td>
		</tr>
		<tr>
			<td>Father's Name 	:</td>
			<td><input type="text" name="father_name" placeholder="Father's Name" value="<?php echo $father_name ?>"></td>
		</tr>
		<tr>
			<td>Email 	:</td>
			<td><input type="email" name="email" placeholder="abc@xyz.com" value="<?php echo $email ?>"></td>
		</tr>
		<tr>
			<tr>
				<td>Aadhar card number 	:</td>
				<td><input type="text" name="aadhar" placeholder="1234-1234-1234" value="<?php echo $aadhar ?>"></td>
			</tr>
			
			<td>Age 	:</td>
			<td><input type="number" name="age" placeholder="" value="<?php echo $age ?>"></td>
		</tr>
		
		<tr>
			<td>Gender 	:</td>
			<td><input type="text" name="gender" placeholder="M ,F or O" value="<?php echo $gender ?>" style="width: 40%;"></td>
		</tr>
		<tr>
			<td>Address 	:</td>
			<td><textarea rows="5" cols="40" name="addrline1" placeholder="Enter your address" value="<?php echo $addrline1 ?>"></textarea></td>
		</tr>
		<tr>
			<td>City 	:</td>
			<td><input type="text" name="city" value="<?php echo $city ?>"></td>
		</tr>
		<tr>
			<td>District 	:</td>
			<td><input type="text" name="district" value="<?php echo $district ?>"></td>
		</tr>
		<tr>
			<td>State 	:</td>
			<td><input type="text" name="state" value="<?php echo $state ?>"></td>
		</tr>
		<tr>
			<td>Pincode 	:</td>
			<td><input type="Number" name="pincode" value="<?php echo $pincode ?>"></td>
		</tr>
		<tr><td align="center" colspan="2"><input class="btn-reg" type="submit" name="submit" id="submit" value="Submit">
		<input class="btn-reg" type="reset" name="reset"></td></tr>
	</table>
    </form>
</div>
</body>
</html>