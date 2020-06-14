<?php
   session_start();
   
   $level = '';
   $sdate = '';
   $edate = '';
   
   $errors = array();
   
   if(isset($_POST['btn-sd']))
   {
   


   
   $level = $_POST['level'];
   $sdate = $_POST['sdate'];
   $edate = $_POST['edate'];
   
   if(empty($level)){
   $errors['level']='Election Level required !';}
   if(empty($sdate)){
   $errors['sdate']='Election starting date required !';}
   if(empty($edate)){
   $errors['edate']='Election ending date required !';}



   if(count($errors)==0)
   {
   $_SESSION['level']=$_POST['level'];
   $_SESSION['sdate']=$_POST['sdate'];
   $_SESSION['edate']=$_POST['edate'];
   header('location:LokSabha.php');
   if($level == "LokSabha")
   {
   
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
}

}







?>
