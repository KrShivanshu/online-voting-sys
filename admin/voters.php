<?php
   
   require('../config/db.php');
   //require_once 'C:\xampp\htdocs\OVS\admin/statusconfirm.php';
   //$user = $_SESSION['user'];
   //$district = $_POST["district"]; //at what post(HOD, MAYOR , CM, ....)  
   //$level = $_POST["level"]; // at what level (city, state , national, ...) election is going on.
   $placeQuery ="SELECT * from voters where verified = 2";
   $resPlace=mysqli_query($conn , $placeQuery);
   
?>
<!DOCTYPE HTML>
<html>
   <head>
	  <title>
		   Voters list
	  </title>
	  
      <LINK rel="stylesheet" href="../candidate/cstyle.css" />
  <style type="text/css" >
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
  
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}
.active {
  background-color: #333;
}
  
	  	table,tr{
	  		    width:80%;
	  		    margin-top:50px;
                border:10px;
                
	  	}
	  	table {
                counter-reset: section;
                
              }
      td{
        font-family: sans-serif;
        background: white;
        position:;

      }
        .count:before {
                       counter-increment: section;
                       content: counter(section);
              }
      
	
	</style>
	
   </head>
<body>
  <div class="nav">
      <ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="ahome.php">Main Page</a></li>
  
  <!--<li><a href="../voter/vlog.php">Voter Login</a></li>-->
  <li><a href="verifyvoter.php">Refresh</a></li>
  <li><a href="organise.php">Organise Election</a></li>
  <li><a href="../result/reslvl.php">Result</a></li>
  
  <li><a href="../notification.php">Notification</a></li>
</ul>
</div>
<center><h2>Verified Voter</h2></center>
<?php
if(mysqli_num_rows($resPlace)!=0){
?>
  <div class ="container">
    <form name="candi" method="POST" action="ahome.php" id="stat">
	<table align = "center" border="1px" class="table table-striped ">
		<p>
		<tr class= "table-primary">
			<th>#</th>
      <th>Id</th>
			<th>Name</th>
			<th>Father's Name</th>
			<th>Sex</th>
      <th>Age</th>
      <th>Email</th>
      <th>Address</th>
      <th>City</th>
      <th>District</th>
      <th>State</th>
     
		</tr>
   </p>
   <p>
		<?php
    
		    while($voter = mysqli_fetch_array( $resPlace))
		    {
        $_SESSION['voter_id'] = $voter['voter_id'];
		?>    	
		<tr>
			<td class = "count"></td>
			<td><?php echo $voter['voter_id'] ?></td>
      <td><?php echo $voter['name'] ?></td>
      <td><?php echo $voter['father_name'] ?></td>
      <td><?php echo $voter['sex'] ?></td>
      <td><?php echo $voter['age'] ?></td>
      <td><?php echo $voter['email'] ?></td>
      <td><?php echo $voter['addrline1'] ?></td>
      <td><?php echo $voter['city'] ?></td>
      <td><?php echo $voter['district'] ?></td>
      <td><?php echo $voter['state'] ?></td>
			
    </p>  
     
		</tr>
		<?php 
    }   
	        }
          else{
	    ?>
      <h1 style="text-decoration: none;">NO Registrations Left :)</h1>
<?php
}
?>
   </p>       
	</table>
	    
    </form>
    <form action='ahome.php' method="post">
    <center><p>
      <input type="submit" name="done" value="Done" style="width: 8%;
  background: white;
  border: 2px solid black;
  color: black;
  padding: 5px;
  font-size: 18px;
  margin:  12px 0;">
    </p></center>
  </form>
	</div>
</body>
</html>
