<!DOCTYPE html>
<html>
 <head>
  <title>HW2</title>
 </head>
 <body>
 	
 <?php 	
	  $db = new mysqli('localhost', 'root', '');
      if ($db->connect_error):
         die ("Could not connect to db: " . $db->connect_error);
      endif;
	   
	  $db->query("DROP DATABASE RoundRobin");
	  
	  $sql = "CREATE DATABASE RoundRobin";
	  $db->query($sql);
	  /*if ($db->query($sql) === TRUE) {
    	echo "Database created successfully";
	  } else {
    	echo "Error creating database: " . $db->error;
	  }
	   */ 
	  

	  $db = new mysqli('localhost', 'root', '', 'RoundRobin');
      if ($db->connect_error):
         die ("Could not connect to db: " . $db->connect_error);
      endif;
	  $db->query("drop table AdminInfo"); 
	  $results = $db->query("create table AdminInfo (User_name varchar(20) primary key not null, 
	  						 Password varchar(64) not null, 
	  						 Email varchar(64) not null)") or die ("Invalid: " . $db->error);
      $quoters = file("admininfoME.php");
      $quoters = array_slice($quoters, 1, -1);
      foreach ($quoters as $quoter)
      {
          $quoter = rtrim($quoter);
          $quoter = preg_replace('/#/','',$quoter);
          $chunks = explode(" ", $quoter);
          $pass = hash('sha256',$chunks[1]);
		  $query = "insert into AdminInfo values ('$chunks[0]', '$pass', '$chunks[2]')";
          $db->query($query) or die ("Invalid insert " . $db->error);
      }

	  header( 'Location: adminlogin.php' );
	  
	  $db->close();
	  
/*	  
	  $db->query("drop table Updated"); 
      
      $result = $db->query("create table Updated (Ticket_id int not null, 
	 											  Received datetime not null,
	 											  Sender char(50) not null, 
	 											  Email char(30) not null,
	 											  Subject char(50) not null,
	 											  Tech char(50) not null,
	 											  Status char(10) not null,
												  Ticket_body text not null)") 
	 											  or die ("Invalid: " . $db->error);
	  
	  //to initialize the table of tickets
      $db->query("drop table Tickets"); 
      
      $result = $db->query("create table Tickets (Ticket_id int primary key not null auto_increment, 
	 											  Received datetime not null,
	 											  Sender char(50) not null, 
	 											  Email char(30) not null,
	 											  Subject char(50) not null,
	 											  Tech char(50) not null,
	 											  Status char(10) not null,
												  Ticket_body text not null)") 
	 											  or die ("Invalid: " . $db->error);
														
	  $ticketsinfo = file("Tickets.flat");
      //print_r($ticketsinfo);

      foreach ($ticketsinfo as $ticketsinfostring)
      {
          $ticketsinfostring = rtrim($ticketsinfostring);
          $ticket = preg_split("/, +/", $ticketsinfostring);
		  //print_r($ticket);
          $query = "insert into Tickets values ('$ticket[0]','$ticket[1]','$ticket[2]','$ticket[3]','$ticket[4]','$ticket[5]','$ticket[6]', '$ticket[7]')";
          $db->query($query) or die ("Invalid insert " . $db->error);
		  $query = "insert into Updated values ('$ticket[0]','$ticket[1]','$ticket[2]','$ticket[3]','$ticket[4]','$ticket[5]','$ticket[6]', '$ticket[7]')";
     	  $db->query($query) or die ("Invalid insert " . $db->error);
      } 
	  
	  //setup admin system
	  $db->query("drop table AdminInfo"); 
	  $results = $db->query("create table AdminInfo (User_name varchar(20) primary key not null, 
	  						 Password varchar(64) not null, 
	  						 Email varchar(64) not null,
							 Ram_Id varchar(64) not null,
							 Role varchar(64) not null)") or die ("Invalid: " . $db->error);
      $quoters = file("admininfoME.php");
      $quoters = array_slice($quoters, 1, -1);
      foreach ($quoters as $quoter)
      {
          $quoter = rtrim($quoter);
          $quoter = preg_replace('/#/','',$quoter);
          $chunks = explode(" ", $quoter);
          $pass = hash('sha256',$chunks[1]);
		  $ram = generateRandomString();
          $query = "insert into AdminInfo values ('$chunks[0]', '$pass', '$chunks[2]', '$ram', '$chunks[3]')";
          $db->query($query) or die ("Invalid insert " . $db->error);
      }
	   
      echo "<b>The database has been initialized with the following tables:</b>";
      echo "<br /><br />";
      $tables = array("Tickets"=>array("Ticket_id", 
                                   "Received", "Sender", "Email", "Subject", "Tech", "Status"),
                      "AdminInfo"=>array("User_name", "Password", "Email", "Ram_Id", "Role")
					  );
      foreach ($tables as $curr_table=>$curr_keys):
         $query = "select * from " . $curr_table; 
         $result = $db->query($query);  
         $rows = $result->num_rows; 
         $keys = $curr_keys;
?>
      <table border = "1">
      <caption><?php echo $curr_table;?></caption>
      <tr align = "center">
<?php
         foreach ($keys as $next_key):
             echo "<th>$next_key</th>";
         endforeach;
         echo "</tr>"; 
         for ($i = 0; $i < $rows; $i++):  #For each row in result table
             echo "<tr align = center>";
             $row = $result->fetch_array();  #Get next row
             foreach ($keys as $next_key)  #For each column in row
             {
                  echo "<td> $row[$next_key] </td>"; #Write data in col
             }
             echo "</tr>";
         endfor;
         echo "</table><br />";
      endforeach;
 * 
 */
?> 
     
 </body>
</html>
