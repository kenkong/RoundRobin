<!DOCTYPE html>
<html>
 <head>
	<title>HW1</title>
 </head>
 <body>

 <?php
	error_reporting(0);
 ?>

 <?php
 	
 	session_start();
	
	session_destroy();

	header("Location: index.php");
		
 ?>

 </body>
</html>
