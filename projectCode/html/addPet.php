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
	<style>
	</style>
	<body>
		<?php include('header.php'); ?>
		<!--Remaining section-->
		<center>
			<div>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<h2>***Welcome to Pet Inn***</h2>
					</div>
				</div>
				
				<div class="row AddPetRectangle">
					<form>
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
									<input type="text" class="form-control" id="petName">
								</div>         	
							</div>
						
							<div class="row">
								<div class="col-md-12 col-lg-12 addPetLabels">
									Pet Type
								</div>
							</div>
						    <select class="form-control addPetInput" id="sel1">
								<option>Dog</option>
								<option>Cat</option>
						    </select>
							
							<div class="row">
								<div class="col-md-12 col-lg-12 addPetLabels">
									Gender
								</div>
							</div>
						    <select class="form-control addPetInput" id="sel1">
								<option>M</option>
								<option>F</option>
						    </select>
							
							<div class="row">
								<div class="col-md-12 col-lg-12 addPetLabels">
									Pet Size
								</div>
							</div>
						    <select class="form-control addPetInput" id="sel1">
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
					</form>
					
					<center><button type="submit" id="addPetBtn" class="btn btn-default addPet" onclick="addPet();">Add</button></center>
							
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
