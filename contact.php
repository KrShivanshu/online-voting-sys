 <?php
 require('C:\xampp\htdocs\OVS\config/db.php');
   //require('C:\xampp\htdocs\OVS\config/define.php');
   require_once 'C:\xampp\htdocs\OVS\vendor/autoload.php';
$msg='';
$msgClass='';
if(filter_has_var(INPUT_POST,'submit')){
	//echo 'good';
	$email_id='---';
	$name = $_POST['name'];
	$email = Email;
	$message=$_POST['message'];
	//this gets data from form
	 if(!empty($email)&& !empty($name) && !empty($message))
	 { //cheked if any field is empty or notes
	 	if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
	 		//failed
	 		$msg='Please use a valid Email';
	 		$msgClass='alert-danger';
	 	}
	 	else{ 
	 		//passed
	 		
	 		// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 25, 'TLS'))
  ->setUsername($email_id)
  ->setPassword('----') 
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function send_mail($emailing,$passing){
	
	global $mailer;

// Create a message
$message = (new Swift_Message('Query of OVS user'))
  ->setFrom($email_id)
  ->setTo($email)
  ->setBody($message);
  

// Send the message
if($result = $mailer->send($message))
	echo "Sent";
else 
	echo "failed";
};            }
            }
	 	}
	 else {
	 	//failed
	 	$msg = 'Please fill in all feilds';
	 	$msgClass = 'alert-danger';
	 }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact US</title>
	<link rel="stylesheet" href="https://bootswatch.com/3/slate/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Online Voting System</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<?php if($msg !=''):?>
			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
		<?php endif; ?>
		<form method="post" action="contact.php">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name: '';?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email: '';?>">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea type="text" name="message" class="form-control"><?php echo isset($_POST['message']) ? $message: '';?></textarea>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>