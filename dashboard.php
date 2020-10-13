<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-login">
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img class="user-img rounded-circle" alt="100x100" src="assets/img/user.jpg" data-holder-rendered="true">
					<div class="user-data d-flex align-items-center h-100">
						<div class="row">
							<div class="name col-sm-12"><?php session_start(); echo $_SESSION["name"]; ?></div>
							<div class="position col-sm-12"><?php echo $_SESSION["position"]; ?></div>
						</div>
						
					</div>
				</div>
				<div class="col-md-6">
					<div class="d-flex align-items-center h-100 float-right">
						<div class="row">
							<a href="logout.php" class="btn btn-danger mr-2">Logout</a>
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">New Agent</button>
						</div>
				
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'add_form.php'; ?>
	<?php include 'edit_form.php'; ?>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<?php include 'datagrid_agents.php'; ?>
			</div>
		</div>
		
	</div>
</body>
</html>