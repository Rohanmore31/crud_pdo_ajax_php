<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">

	<h1 class="page-header text-center bg-dark text-light rounded">CRUD Operation</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<button id="addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</button>
            <div id="alert" class="alert alert-info text-center" style="margin-top:20px; display:none;">
            	<button class="close"><span aria-hidden="true">&times;</span></button>
                <span id="alert_message"></span>
            </div>  
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
					<th>ID</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Address</th>
					<th>Action</th>
				</thead>
				<tbody id="tbody"></tbody>
			</table>
		</div>
	</div>
</div>

<?php include('modal.html'); ?>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="app.js"></script>
</body>
</html>