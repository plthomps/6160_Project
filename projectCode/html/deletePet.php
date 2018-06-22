<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

$link = mysqli_connect("db-master.c2rtzjxij2h6.us-east-2.rds.amazonaws.com", "6160_team_member", "team6160_pwnew3452", "roverdb6160");
		 
		// Check connection
		if($link === false){
			//die("ERROR: Could not connect. " . mysqli_connect_error());
		} else {
			//echo "Connected...";
		}



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// get id value

$id = $_GET['id'];

echo $id;

// delete the entry

 if(mysqli_query($link, "DELETE FROM pet WHERE petid=$id")){
 header("Location: dashboard.php");
	} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);}
//header("Location: dashboard.php");

}




?>
