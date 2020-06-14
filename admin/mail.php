<?php
   require('C:\xampp\htdocs\OVS\config/db.php');
   //require('C:\xampp\htdocs\OVS\config/define.php');
   require_once 'C:\xampp\htdocs\OVS\vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 25, 'TLS'))
  ->setUsername(Email)
  ->setPassword(Password) 
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function send_mail($emailing,$passing){
	
	global $mailer;
$body = '<!DOCTYPE HTML>
<html>
   <head>
	  <title>
		   Body
	  </title>
	 
   </head>
<body>
	<div class="wrapper">
		<p>
			Dear Voter,
			 Your details has been verified and you are elligible for casting vote.
			<h2>Your credentials to login into our site:</h2>
			<h3>Username:</h3><h3>'. $emailing.';</h3>
			<h3>Password: '.$passing.';</h3>
		</p>
</body>
</html>
';
// Create a message
$message = (new Swift_Message('Login details to vote'))
  ->setFrom([Email=> 'Online voting Portal'])
  ->setTo($emailing)
  ->setBody($body, 'text/html');
  ;

// Send the message
if($result = $mailer->send($message)){
	?><script type="text/javascript">alert("Mail successfully sent to the voters");
              window.open('ahome.php','_self',false);
              </script><?php
          }
else {
	?><script type="text/javascript">alert("Mail wasn't sent to the user");
              window.open('ahome.php','_self',false);
              </script><?php
          }
}
?>