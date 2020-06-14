<?php
require('C:\xampp\htdocs\OVS\config/db.php');
//require('C:\xampp\htdocs\OVS\config/define.php');

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


$query="SELECT * from login_detail WHERE Password =' '"; 
   if($result=mysqli_query($conn , $query))
   {
    if(mysqli_num_rows($result))
   {
    while($row = mysqli_fetch_array($result))
        {    
             $r = generateRandomString();
             $emailing=$row['email'];
             $query="UPDATE `login_detail` SET `Password` = '$r' WHERE `login_detail`.`email` = '$emailing'";
              if(mysqli_query($conn, $query)) {
              ?><script type="text/javascript">alert("Password created successfully for new voters");
              window.open('ahome.php','_self',false);
              </script><?php
              } else {
              ?><script type="text/javascript">alert("Password wasn't created for new voters");
              window.open('ahome.php','_self',false);
              </script><?php
              }
         }
     }  
     else
     {
      ?><script type="text/javascript">alert("No new voter left for password generation");
              window.open('ahome.php','_self',false);
              </script><?php
     }
   }
  mysqli_close($conn);
?> 