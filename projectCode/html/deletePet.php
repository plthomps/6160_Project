<?php

/*

DELETE.PHP

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

//echo $id;

// delete the entry

 if(mysqli_query($link, "DELETE FROM pet WHERE petid=$id")){
	//echo "<script type='text/javascript'>alert('Pet Deleted successfully.');</script>";
	include('dashboard.php');
	} else{
	echo "<script type='text/javascript'>alert('Delete order for this pet first then delete the pet.');</script>";}
	include('dashboard.php');

}


?>
