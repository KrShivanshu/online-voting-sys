<?php
      
   require('C:\xampp\htdocs\OVS\config/db.php');
   require('C:\xampp\htdocs\OVS/date.php');
      
    $name='';
    $father_name='';
    $party_name='';
    $gender='';
    $age='';
    $email='';
    $aadhar='';
    $district='';
    $state='';
    $level='';
    
    $errors1 = array();

   if(isset($_POST['sub']))
   {
    $name        = $_POST['name'];        
    $father_name = $_POST['father_name'];
    $party_name  = $_POST['party_name'];
    $gender      = $_POST['gender'];
    $age         = $_POST['age'];
    $email       = $_POST['email'];
    //$addrline1   = $_POST['addrline1'];
   // $addrline2   = $_POST['addrline2'];
    //$city        = $_POST['city'];
    $district    = $_SESSION['district'];
    $state       = $_SESSION['state'];
    $level       = $_SESSION['level'];
    //$dob         = $_POST['dob'];
    $aadhar      = $_POST['aadhar'];
    /*
    $date        = date("Y-m-d"); // to know todays day
    $datediff     = date_diff($dob,$date);//to know difference
    $years = floor($datediff / (365*60*60*24)); // to know age of voter
*/
    if(empty($name)){
       $errors1['name']="Name required";  }
    if(empty($father_name)){
       $errors1['father_name']="Father's name required";  }
    if(empty($party_name)){
       $errors1['party_name']="Party name required";  }
    if(empty($gender)){
       $errors1['gender']="Gender required";  }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $errors1['email']="Email is invalid";  }
    if(empty($email)){
       $errors1['email']="Email required";  }
    if($age<18){
       $errors1['age']="You are not 18 years old";  }
    if(empty($age)){
       $errors1['age']="Age required";  }
    if(empty($aadhar)){
       $errors1['aadhar']="Aadhar number required";  }
    
     
  if(count($errors1)==0)
   {

     $emailQuery = "SELECT * FROM candidate WHERE email='$email' LIMIT 1";
     $stmt=mysqli_query($conn, $emailQuery)
     or die("Can't  fetch query: ".mysqli_error($conn));
     
     $userCount = mysqli_num_rows($stmt);

     if($userCount>0){
     ?>
      <script type="text/javascript">alert("Error: Email already exists");</script>
      <?php
     }

     $aadharQuery = "SELECT * FROM candidate WHERE aadhar='$aadhar' LIMIT 1";
     $res=mysqli_query($conn, $aadharQuery)
     or die("Can't  fetch query: ".mysqli_error($conn));
     
     $auserCount = mysqli_num_rows($res);

     if($auserCount>0){
     ?>
      <script type="text/javascript">alert("Error: Aadhar already exists ");</script>
      <?php
     }
  
     if($userCount === 0 && $auserCount === 0){
     	               //0 means under verification
     	               //1 means rejected after verification
     	               //2 means verified and elligible

     	$insQuery = "INSERT INTO candidate (aadhar, cname, party, father_name, age, gender, level, email, district, state ) VALUES ('$aadhar', '$name', '$party_name', '$father_name', '$age', '$gender', '$level', '$email', '$district', '$state') ";
     	$stmt=mysqli_query($conn, $insQuery);
      if(!$stmt){
      ?>
<script type="text/javascript">
  alert("Error: Can't insert Candidate data in DB");
  alert("Error: <?php echo(mysqli_error($conn));  ?>  ");
</script>

      <?php } else  { ?>

  <script type="text/javascript">
   window.open ('csuccess.html','_self',false);
</script>


      <?php

    }
       }
      }
       $_SESSION['name']=$name;
   }
?>