<?php
   session_start();
   require('../config/db.php');
    require_once('../date.php');

$level = $_SESSION["level"]; 

if(isset($_POST['btn-sd']))
{
  $district = $_POST["district"];
   $state = $_POST["state"];

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
    $endDate    = strtotime($date['enddate']);
    $todaysDate = strtotime(date("Y-m-d H:i:s"));
if($todaysDate > $endDate)
    {
      $candQuery = "SELECT * FROM candidate where level = '$level' and district = '$district' ORDER BY count DESC";
           
      $result= mysqli_query($conn, $candQuery)
      or die("can't fetch candQuery ".mysqli_error($conn));
      $candCount = $result->num_rows;

      if($candCount>0)
      {       
      ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>
        Candidate list
    </title>
    <link rel="stylesheet" href="../candidate/cstyle.css" />
        
    <style>

       table,tr{
             width:80%;
             margin-top:50px;
                 border:10px; 
       }
       td{
          font-family: sans-serif;
          background: white;
         }
       table {
                 counter-reset: section;
                 
               }
           
       .count:before {
                      counter-increment: section;
                      content: counter(section);
             }
       .nav ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          text-align: center;
          background-color: #333;
        }

        .nav li {
          display: inline-block;
          border-right:1px solid white;
          
        }

        li:last-child {
          border-right: none;
          
        }


        li a {
          display: block;
          color: white;
          font-family: sans-serif;
          padding: 14px 16px;
          text-decoration: none;
        }

        li a:hover:not(.active) {
          background-color: #111;
        }
        .active {
          background-color: #333;
        }       
    </style>
  </head>
  <body>
    <div class="nav">
      <ul>
        <li><a href="<?php echo($level); ?>.php">Back</a></li>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../admin/alog.php">Admin</a></li>
        <li><a href="../voter/vlog.php">Voter Login</a></li>
        <li><a href="../voter/vreg.php">Voter Registration</a></li>
        <li><a href="../voter/vlog.php">Vote</a></li>
        <li><a href="../notification.php">Notification</a></li>
      </ul>
    </div>
    <center><p style="font-size: 50px; color:pink; ">Welcome Voter</p></center>
      <div class ="container">
        <form name="candi" method="POST" action="reslvl.php">
              <table align = "center" border="1px" class="table table-striped" >
                     <p>
                     <tr class= "table-primary">
                       <th>#</th>
                       <th>Candidate Name</th>
                       <th>Party Name</th>
                       <th>Vote</th>
                     </tr>
                     </p>
                    <p>
                     <?php
                         while($row=mysqli_fetch_array($result))
                         {
                     ?>      
                     <tr>
                       <td class = "count"></td>
                       <td><?php echo $row['cname']; ?></td>
                       <td><?php echo $row['party']; ?></td>
                       <td ><?php echo $row['count']; ?></td>
                     </tr>
                     <?php
                         }
                     ?>
                    </p>     
              </table>
                    <p>
                        <center>
                          <input type="submit" style="width: 8%; background: #26b0ff; border: 2px solid black; color: black; padding: 5px; font-size: 18px; cursor: pointer; margin:  12px;" value="Done"/>
                        </center>
                    </p>
        </form>
  </body>
</html>
           
<?php 
           }
           else 
             {
               ?>
                   <script type="text/javascript">
                   alert("Error: No  candidate found from selected place !");
                   window.open ('reslvl.php','_self',false);
                 </script>
                   <?php
                }

       }
     else
    {
       ?>
          <script type="text/javascript">
            alert("Error: Election  hasn't ended yet:( ");
          window.open ('reslvl.php','_self',false);
        </script>
          <?php
        }  

}
else 
{
       ?>
          <script type="text/javascript">
            alert("Error: No  election is going for <?php echo $level."-".$state."-".$district ?>");
          window.open ('reslvl.php','_self',false);
        </script>
        <?php
        }
}

?>