

<?php

$host = "localhost:3306";
$dbusername = "root";
$dbpassword = "";
$dbname = "artgalleryproject";

$conn = new PDO("mysql:host=".$host.";dbname=".$dbname, $dbusername, $dbpassword);

// check connection
if (!$conn){
    die("connection failed");
}

else{
	$stateab = filter_input(INPUT_POST, "stateab"); 
    $statename = filter_input(INPUT_POST, "statename"); 
	$query = "INSERT INTO state(STATEAB,STATENAME)VALUES('$stateab','$statename')";
    
      
	   if($conn->query($query)){
		   echo"  Record Inserted Successfully  ";
	   }
	   else{
		   echo"Error: ".$query."
		   ".$conn->error;
	   }
   }
   ?>