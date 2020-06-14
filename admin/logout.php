<?php
session_start();
if(session_destroy())
{

?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<script type="text/javascript">
function goNewWin() {

//***Get what is below onto one line***
//alert('Logging out...');
window.open("../index.php",'TheNewpop','toolbar=1,location=1,directories=1,status=1,menubar=1,scrollbars=1,resizable=1'); 

//***Get what is above onto one line*** 


self.close();


}
</script>
</head>
<body onLoad="goNewWin()">
</body>
</html>


<?php
}
?>