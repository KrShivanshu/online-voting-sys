<?php
   
   session_start();
   $level = '';
   
   
   $errors = array();
   
   if(isset($_POST['btn-lvl']))
   {
   
   $level = $_POST['level'] ;
 
   
   if(empty($level)){
   $errors['level']='Election Level required !';}
  

   if(count($errors)==0)
   {
   if($level == "LokSabha")
   {
   header('location:LokSabha.php');
   }  
   elseif ($level == "StateLegislativeAssembly") 
   {
   header('location:StateLegislativeAssembly.php');
   }
   elseif ($level == "StateLegislativeCouncil") 
   {
   header('location:StateLegislativeCouncil.php');
   }
   elseif ($level == "LocalPanchayat") 
   {
   header('location:LocalPanchayat.php');
   }
   
   $_SESSION['level'] = $level;
   }  
}

?>
