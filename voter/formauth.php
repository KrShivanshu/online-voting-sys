<?php
     
   require('../config/db.php');
   require('../date.php');
      
    $name ='';
    $father_name='';
    $addrline1='';
    $gender='';
    $age='';
    $email='';
    $aadhar='';
    $district='';
    $state='';
    $level='';
    $city='';

   $errors=array();

   if(isset($_POST['submit']))
   {
    $name        = $_POST['name'];        
    $father_name = $_POST['father_name'];
    $gender      = $_POST['gender'];
    $age         = $_POST['age'];
    $email       = $_POST['email'];
    $addrline1   = $_POST['addrline1'];
   // $addrline2   = $_POST['addrline2'];
    $city        = $_POST['city'];
    $district    = $_POST['district'];
    $state       = $_POST['state'];
    
    $aadhar      = $_POST['aadhar'];
    $pincode     = $_POST['pincode'];

    if(empty($name)){
       $errors['name']="Name required";  }
    if(empty($father_name)){
       $errors['father_name']="Father's name required";  }
    if(empty($age)){
       $errors['age']="Age required";  }
    if(empty($gender)){
       $errors['gender']="Gender required";  }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $errors['email']="Email is invalid";  }
    if(empty($email)){
       $errors['email']="Email required";  }
    if(empty($addrline1)){
       $errors['addrline1']="Address required";  }
    if(empty($city)){
       $errors['city']="City required";  }
    if(empty($district)){
       $errors['district']="District required";  }
    if(empty($state)){
       $errors['state']="State required";  }
    if(!empty($age)){
    if($age<18){
       $errors['age']="You are not 18 years old";  }}
    if(empty($aadhar)){
       $errors['aadhar']="Aadhar number required";  }
    
  if(count($errors)==0)
   {

     $emailQuery = "SELECT * FROM voters WHERE email=? LIMIT 1";
     $stmt = $conn->prepare($emailQuery);
     $stmt->bind_param('s', $email);
     $stmt->execute();
     $result = $stmt->get_result();
     $userCount = $result->num_rows;

     if($userCount>0){
     	$errors['email']="Email already exists!";
     }

     $aadharQuery = "SELECT * FROM voters WHERE aadhar=? LIMIT 1";
     $stmt = $conn->prepare($aadharQuery);
     $stmt->bind_param('i', $aadhar);
     $stmt->execute();
     $result = $stmt->get_result();
     $auserCount = $result->num_rows;

     if($auserCount>0){
      $errors['aadhar']="Aadhar already exists!";
     }
     if($userCount === 0 && $auserCount === 0){
     	               //0 means under verification
     	               //1 means rejected after verification
     	               //2 means verified and elligible

     	$insQuery = "INSERT INTO voters(aadhar, name,  father_name, age, sex, email, addrline1, city, district, state, pincode ) VALUES ('$aadhar', '$name', '$father_name', '$age', '$gender', '$email', '$addrline1', '$city', '$district', '$state','$pincode')";
      $stmt=mysqli_query($conn, $insQuery);
      if($stmt){
      ?>

  <script type="text/javascript">
   window.open ('vsuccess.html','_self',false);
  </script>

      <?php } else  { ?>


  <script type="text/javascript">
  alert("Error: Can't insert Candidate data in DB"); 
</script>
      <?php
}
    }
       }
   }
?>