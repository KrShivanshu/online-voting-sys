<?php
   
    require('C:\xampp\htdocs\OVS\config/db.php');
    require_once('C:\xampp\htdocs\OVS/date.php');


        $eleDetQuery = "SELECT * FROM election_detail ORDER BY Election_Id DESC "
              or die("can't fetch query ".mysqli_error($conn));
              $resEle = mysqli_query($conn, $eleDetQuery);
          
           ?>
           <!DOCTYPE HTML>
           <html>
              <head>
               <title>
                  Election detail
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
<link rel="stylesheet" href="candidate/cstyle.css" >
</head>
<body>
<div class="nav">
<ul>
  <li><a href="admin/alog.php">Admin Login </a></li>
  <li><a href="voter/vlog.php">Voter Login</a></li>
  <li><a href="voter/vreg.php">Voter Registration</a></li>
  <li><a href="voter/vlog.php">Vote</a></li>
  <li><a href="candidate/candregEle.php">Candidate Registration</a></li>
  <li><a href="result/reslvl.php">Result</a></li>
</ul>
</div>
<center><p style="font-size: 50px; color:pink; ">Election List</p></center>
             <div class ="container">
               <form name="candi" method="POST" action="index.php">
             <table align = "center" border="1px" class="table table-striped " >
               <p>
               <tr class= "table-primary">
                 <th>#</th>
                 <th>Election Id</th>
                 <th>Level</th>
                 <th>State</th>
                 <th>District</th>
                 <th>Starts on</th>
                 <th>Ends on</th>
               </tr>
              </p>
              <p>
               <?php
                   while($row=mysqli_fetch_array($resEle))
                   {
               ?>      
               <tr>
                 <td class = "count"></td>
                 <td><?php echo $row['Election_Id'] ?></td>
                 <td><?php echo $row['level'] ?></td>
                 <td><?php echo $row['state'] ?></td>
                 <td><?php echo $row['district'] ?></td>
                 <td><?php echo $row['startdate'] ?></td>
                 <td><?php echo $row['enddate'] ?></td>
                
                 
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
  margin:  12px 0;" value="Go Back"  />
               </center></p>
               </form>
               </div>  
           </body>
           </html>
           