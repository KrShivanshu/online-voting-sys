<!DOCTYPE HTML>
<html>
   <head>
    <header>
    
    <h1><center>ONLINE VOTING SYSTEM</center></h1>
</header>
	  <title>
		   Voter Home
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
  <li><a href="../index.php">Home</a></li>
  <li><a href="../result/reslvl.php">Result</a></li>
  <li><a href="../notification.php">Notification</a></li>
  <li><a href="logout.php">LogOut</a></li>
</ul>
</div>
<center><p style="font-size: 50px; color:pink; ">Welcome Voter</p></center>
	</div>
  <center>
  <div >
    <img src="voterimg1.jpg"width="300"height="300" alt="voting system">
  </div>
  <div>
    <form action="vlevel.php" method="post">
      <input class="btn-sd" type="submit" name="vote" value="Vote"/>
    </form>
  </div>
</center>
</body>
</html>
