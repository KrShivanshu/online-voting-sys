<?php 
  session_start();
  //to election details in the database on server
  require('C:\xampp\htdocs\OVS\config/db.php');
   
  require_once 'C:\xampp\htdocs\OVS/date.php';

   $level='';
   $user = $_SESSION['user'];
   if(isset($_POST['btn-lvl']))
   {

     
     $voterQuery = "SELECT * FROM voters where email='$user'";
     $query = mysqli_query($conn, $voterQuery)
     or die("can't execute query".mysqli_error($conn));
     $voter = mysqli_fetch_array($query);



     $level=$_POST['level'];
     $state=$voter['state'];
     $district=$voter['district'];

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

    if($todaysDate >= $startDate && $todaysDate <= $endDate )
    {  

       $_SESSION['level']=$level;
       $_SESSION['state']=$state;
       $_SESSION['district']=$district;
       header('location:vote.php');
    }
    else{
      if($todaysDate < $startDate){
    ?>
    <script type="text/javascript">
    alert("Voting will start on <?php echo $date['startdate'] ?> :)");
    window.open ('vhome.php','_self',false);
  </script>

    <?php
  }
  elseif($todaysDate > $endDate){
    ?>
    <script type="text/javascript">
    alert("Date to vote already passed on <?php echo $date['enddate'] ?> :(");
    window.open ('vhome.php','_self',false);
  </script>
    <?php
  }
    }
   }
   else{
    ?>
    <script type="text/javascript">
    alert("No <?php echo $level ?> election is going on !");
    window.open ('vhome.php','_self',false);
  </script>
    <?php
   }
}
  ?>