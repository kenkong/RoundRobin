<!DOCTYPE html>
<html>
 <head>
	<title>HW1</title>
	<link rel="stylesheet" type="text/css" href="TicketStyleSheet.css"/>
 </head>
 <body>

 <center>
 <form action="register.php" method="POST">
 
 <h2>Your Username?: <br / ></h2>
 
 <input type="text" name="username"><p />
 
 <h2>Email address?: <br / ></h2>
 <input type="text" name="email"><p />
 
 <h2>Password?: <br / ></h2>
 <input type="text" name="password"><p />
 <br />
 <btn>
 <input type="submit" name="signup" value ="Sign Up" style="height:30px; width:200px"> 	
 </btn>
 <br />
 <br />
 </form>

 <?php
 	if (isset($_POST["signup"]))
 	{
 		$admin_name = $_POST["username"];
		$admin_email =$_POST["email"];
		$pass = $_POST["password"];
		$admin_pass = hash('sha256',$pass);
		
		$db = new mysqli('localhost', "root", "", "RoundRobin");
	
		if($db->connect_error):
			die ("Could not connect to db: ".$db->connect_error);
		endif;
		
		//with the name and email, add new user
		$query = "insert into AdminInfo values ('$admin_name', '$admin_pass', '$admin_email')";
		if ($db->query($query)){
			header( 'Location: adminlogin.php' );
		}
		else{
			echo "Missing Info. Re-sign up please!";
		} 
 	}	
 ?>
 
 <form action="adminlogin.php" method="post">
<btn>
    <input type="submit" value="Back to login page" 
         name="Submit" id="backtologin" style="height:30px; width:200px" />
</btn>
 </form>
 
 </center>
 </body>
</html>
