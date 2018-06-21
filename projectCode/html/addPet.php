<!DOCTYPE html>
<html>
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Pet Inn</title>
			<meta charset="utf-8">
			<!-- Optional theme -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">-->
			<link type="text/css" rel="stylesheet" href="../css/style.css" />

			
	</head>
	<body>
	<?php
	if(isset($_POST['insertPet'])){ 
		/* Attempt MySQL server connection. Assuming you are running MySQL
		server with default setting (user 'root' with no password) */
		$link = mysqli_connect("db-master.c2rtzjxij2h6.us-east-2.rds.amazonaws.com", "6160_team_member", "team6160_pwnew3452", "roverdb6160");
		 
		// Check connection
		if($link === false){
			//die("ERROR: Could not connect. " . mysqli_connect_error());
		} else {
			//echo "Connected...";
		}
		
		
		// Escape user inputs for security
		$result = mysqli_query($link, "SELECT MAX(PetID) FROM pet");
		$row = mysqli_fetch_array($result);
		//echo $row[0];
			
		$petid = $row[0]+1;
		$personid = 201;
		$name = "";
		$selected_type = "";
		$selected_gender = "";
		$selected_size = "";
			if(array_key_exists('petname', $_REQUEST)){
				$name = mysqli_real_escape_string($link, $_REQUEST['petname']);
			}
			if(array_key_exists('pettype', $_POST)){
			$selected_type = $_POST['pettype'];
			}
			if(array_key_exists('petgender', $_POST)){
			$selected_gender = $_POST['petgender'];
			}
			if(array_key_exists('petsize', $_POST)){
			$selected_size = $_POST['petsize'];
			}
			
			//$selected_val = $animals[$_POST['animal']];
			
			//echo "hi " . $selected_type . " " . $selected_gender . " " . $selected_size;
			
			if (!empty($petid) && !empty($personid) && !empty($name) && !empty($selected_type) && !empty($selected_gender) && !empty($selected_size)) {
			 $sql = "INSERT INTO pet VALUES ('$petid','$personid','$name','$selected_type','$selected_gender','$selected_size')";
			 if(mysqli_query($link, $sql)){
				 echo "<script type='text/javascript'>alert('Records added successfully.');</script>";
				header('Location: dashboard.php'); 
				$name = "";
				$selected_type = "";
				$selected_gender = "";
				$selected_size = "";
			 } else{
				 echo "<script type='text/javascript'>alert('ERROR: Could not able to execute');</script>";
				 //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			 }
		}
		else{
			echo "<script type='text/javascript'>alert('Please add name');</script>";
		}
		
		// close connection
		mysqli_close($link);
		}
		?>
		
		<?php include('header.php'); ?>
		<!--Remaining section-->
		<center>
			<div>
				<!--<div class="row">
					<div class="col-md-12 col-lg-12">
						<h2>***Welcome to Pet Inn***</h2>
					</div>
				</div>-->
				
				<div class="row AddPetRectangle">
					<form method="post">
						<div class="form-group">
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<h3>ADD PET</h3>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12 col-lg-12 addPetLabels">
									Name
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12 col-lg-12 addPetInput">
									<input type="text" class="form-control" name="petname" id="petName">
								</div>         	
							</div>
						
							<div class="row">
								<div class="col-md-12 col-lg-12 addPetLabels">
									Pet Type
								</div>
							</div>
						    <select class="form-control addPetInput" name="pettype" id="sel1">
								<option>Dog</option>
								<option>Cat</option>
						    </select>
							
							<div class="row">
								<div class="col-md-12 col-lg-12 addPetLabels">
									Gender
								</div>
							</div>
						    <select class="form-control addPetInput" name="petgender" id="sel1">
								<option>M</option>
								<option>F</option>
						    </select>
							
							<div class="row">
								<div class="col-md-12 col-lg-12 addPetLabels">
									Pet Size
								</div>
							</div>
						    <select class="form-control addPetInput" name="petsize" id="sel1">
								<!-- <option>Small (0-15 lbs)</option>
								<option>Medium (16-40 lbs)</option>
								<option>Large (41-100 lbs)</option>
								<option>Giant (101+ lbs)</option> -->
								<option>S</option>
								<option>M</option>
								<option>L</option>
								<option>XL</option>
						    </select>
						</div>
						
					<center><input type="submit" id="addPetBtn" class="btn btn-default addPet" name="insertPet" onclick="InsertPet();" value="Add" /></center>
					</form>
					
							
				</div>
			</div>
		</center>
		<!------------------------------------>
		<?php include('footer.php'); ?>
	<script src="../js/main.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
