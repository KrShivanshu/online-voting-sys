<?php 
  session_start();
  //to election details in the database on server
  require('../config/db.php');
   //require('C:\xampp\htdocs\OVS\config/define.php');

   $states = '';
   $districts = '';
   $errors = array();
   if(isset($_POST['btn-sd']))
   {
     
     $level=$_SESSION['level'];
     $state=$_POST['state'];
     $district=$_POST['district'];

     $eQuery1 = "SELECT * FROM election_detail where level = '$level' and state = '$state' and district = '$district' limit 1"
     or die("can't fetch query ".mysqli_error($conn));
     $eRes1 = mysqli_query($conn, $eQuery1);
   
   if($eRes1->num_rows == 0)
   {
     $eQuery2  = "SELECT * FROM election_detail where level = '$level' and state = '$state' and district = ' ' limit 1"
     or die("can't fetch query ".mysqli_error($conn));
     $eRes2 = mysqli_query($conn, $eQuery2);
   
   if($eRes2->num_rows == 0)
   {
     $eQuery3  = "SELECT * FROM election_detail where level = '$level' and state = ' ' and district = ' ' limit 1"
     or die("can't fetch query ".mysqli_error($conn));
     $eRes3 = mysqli_query($conn, $eQuery3);
     $date = mysqli_fetch_array($eRes3); // array to fetch election starting and ending date
     $eRes = $eRes3;
   }
   else{
     $date = mysqli_fetch_array($eRes2); // array to fetch election starting and ending date
     $eRes = $eRes2;
   }
   }
   else {
     $date = mysqli_fetch_array($eRes1); // array to fetch election starting and ending date
     $eRes = $eRes1;
   }
   
   if(mysqli_num_rows($eRes) != 0)
   {
      $startDate  = strtotime($date['startdate']);
      $endDate    = strtotime($date['enddate']);
      $todaysDate = strtotime(date("Y-m-d H:i:s"));

    if($todaysDate < $startDate )
    {  

       $_SESSION['level']=$level;
       $_SESSION['state']=$state;
       $_SESSION['district']=$district;
       header('location:creg.php');
    }
    else{
    ?>
    <script type="text/javascript">alert("Date to enroll already passed :)");</script>
    <?php
    }
   }
   else{
    ?>
    <script type="text/javascript">alert("No election going on !");</script>
    <?php
   }
}
  ?>