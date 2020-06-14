<?php 
  
  //to election details in the database on server
  require('C:\xampp\htdocs\OVS\config/db.php');
   //require('C:\xampp\htdocs\OVS\config/define.php');
   

   $level ='';
   $sdate ='';
   $edate ='';
   $state = '';
   $districts = '';
   $errors = array();
   if(isset($_POST['btn-sd']))
   {
     
 
   $level = $_POST['level'];
   $sdate = $_POST['sdate'];
   $edate = $_POST['edate'];


     if(empty($_POST['district']))
     {
     if(empty($_POST['state']))
     {
     $eleUpQuery= "INSERT INTO election_detail(level, state, district, startdate , enddate)
     VALUES ('$level', '', '', '$sdate', '$edate') "
     or die("can't fetch query ".mysqli_error($conn));
     }
     else
     {
      $state=$_POST['state'];
      $eleUpQuery= "INSERT INTO election_detail(level, state, district, startdate , enddate)
     VALUES ('$level', '$state', '', '$sdate', '$edate') "
     or die("can't fetch query ".mysqli_error($conn));
     }
     
     }
     else
     {
     $state=$_POST['state'];
     $districts=$_POST['district'];
     foreach($districts as $district)
    
   	 {
     $eleUpQuery= "INSERT INTO election_detail(level, state, district, startdate , enddate)
     VALUES ('$level', '$state', '$district', '$sdate', '$edate') "
     or die("can't fetch query ".mysqli_error($conn));
     }
      }
     $update = mysqli_query($conn, $eleUpQuery);
 
     if($update)
     {
     	?>
                        <script type="text/javascript">
                        
                        window.open ('asuccess.html','_self',false);
                        </script>
                        <?php
     	
     }
     else 
     {
     	?>
      <script type="text/javascript">alert("Error: Failed to update X(");</script>
      <?php
     }
     
    session_destroy();
    }
    
  ?>