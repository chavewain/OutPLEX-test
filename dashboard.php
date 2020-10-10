<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body class="bg-login">
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img class="user-img rounded-circle" alt="100x100" src="assets/img/user.jpg" data-holder-rendered="true">
					<div class="user-data">
						<div class="name">Dionisio Chavez</div>
						<div class="position">Web Developer</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="d-flex align-items-center h-100 float-right">
						<button type="button" class="btn btn-success">New Agent</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="p-2 rounded bg-light mt-5">
					<table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col" class="border-0">ID</th>
					      <th scope="col" class="border-0">Agent</th>
					      <th scope="col" class="border-0">Score</th>
					      <th scope="col" class="border-0">Rated By</th>
					      <th scope="col" class="border-0" style="width: 140px">Actions</th>

					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>86</td>
					      <td>Mark Zuckerberg</td>
					      <td>
					      	<button type="button" class="btn btn-primary btn-sm">Edit</button>
					      	<button type="button" class="btn btn-danger btn-sm">Delete</button>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Jacob</td>
					      <td>91</td>
					      <td>steve jobs</td>
					      <td>
					      	<button type="button" class="btn btn-primary btn-sm">Edit</button>
					      	<button type="button" class="btn btn-danger btn-sm">Delete</button>
					      </td>
					      
					    </tr>
					    
					  </tbody>
					</table>
				</div>
			</div>
		</div>
		
	</div>
</body>
</html>