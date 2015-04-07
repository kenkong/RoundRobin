<?php
	//error_reporting(0);
?>
<!DOCTYPE html>
<html>
 <head>
	<title>HW2</title>
 </head>
 <body>
 <center>
  <?php
  	session_start();
  	
 	if (isset($_POST["login"]))
	{
		
		//check the password in database by the hash value
		$id = $_POST["adminid"];
		$password = $_POST["password"];
		$password2 = hash('sha256', $password); //learn from class
			
		$db = new mysqli('localhost', "root", "", "RoundRobin");
	
		if($db->connect_error):
			die ("Could not connect to db: ".$db->connect_error);
		endif;
		
		//search the database
		$found = FALSE;
		$query = "select * from AdminInfo";
		$result = $db->query($query);
		$num_rows = $result->num_rows;
		$role = '';
		for ($ctr = 0; $ctr < $num_rows; $ctr++)
		{
			$row = $result->fetch_array();
			$user_id = $row["User_name"];
			$user_pass = $row["Password"];
			
			if($id == $user_id && $password2 == $user_pass)
			{
				$found = TRUE;
			}			
		}
		
		//if he is a user, goes to user page; or if he is a admin, goes to admin page
		if ($found == TRUE) 
		{
			//echo "found!";
			$_SESSION['username']= $id; 
			header( 'Location: index.php' );
		}
		else {
			echo "Cannot find the username or wrong password.";
			header( 'Refresh: 5; url=adminlogin.php' );
			echo '<h2>You will be re-directed to login page in 5 seconds...</h2>';
		}
	}
	
	//if he is a new user, register
	if (isset($_POST["register"])){
		header("Location: register.php");
		exit();
	}
	
 ?>
  </center>
 </body>
</html>
