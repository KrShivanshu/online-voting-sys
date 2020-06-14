<?php
   session_start();
   require 'confirm.php';
   require('../config/db.php');
    require_once('../date.php');
   $user = $_SESSION['user'];
   $level = $_SESSION["level"]; 
   $dis  = $_SESSION['district'];
   


  
    
        $voterLvlQuery = "SELECT * FROM login_detail where email = '$user'"
              or die("can't fetch query ".mysqli_error($conn));
              $resVoter = mysqli_query($conn, $voterLvlQuery);
              $voterLvl = mysqli_fetch_array($resVoter);

              if($voterLvl[$level]==0)
              {
                 $candQuery = "SELECT * FROM candidate where 
              level = $voterLvl[$level] and
              district = '$dis' ";
           
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
           
           
           
           
                 
            
           
             <style>
table,tr{
width:50%;
margin-top:50px;
border:10px;
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
<link rel="stylesheet" href="../candidate/cstyle.css" >
</head>
<body>
<div class="nav">
<ul>
  <li><a href="../index.php">Home</a></li>
  
  <li><a href="vhome.php">My Home</a></li>
  <li><a href="vlevel.php">Level</a></li>
  
  <li><a href="">Result</a></li>
  <li><a href="../notification.php">Notification</a></li>
  <li><a href="vlog.php">LogOut</a></li>
</ul>
</div>
<center><p style="font-size: 50px; color:pink; ">Welcome Voter</p></center>
             <div class ="container">
               <form name="candi" method="POST" action="vote.php">
             <table align = "center" border="1px" class="table table-striped " >
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
                 <td><?php echo $row['cname'] ?></td>
                 <td><?php echo $row['party'] ?></td>
                 <td ><input name = "cand" id="voted"  type="radio" value="<?php echo $row['cname'] ?>" /><br></td>
               </tr>
               <?php
                   }
                 ?>
              </p>    
           
                 
             </table>
                 <p><center>
                 <input name="vote" type="submit" style="width: 8%;
  background: #26b0ff;
  border: 2px solid black;
  color: black;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin:  12px 0;" value="Confirm"  />
               </center></p>
               </form>
               </div>  
           </body>
           </html>
           <?php 
           }
           else{ 
                        ?>
                        <script type="text/javascript">
                        alert("No  candidate found from your place !");
                        window.open ('vhome.php','_self',false);
                        </script>
                        <?php
                      }
           }
           else{
                        ?>
                        <script type="text/javascript">
                        alert("You already voted for <?php echo $level; ?>");
                        window.open ('vhome.php','_self',false);
                        </script>
                        <?php
                }
?>