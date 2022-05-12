<?php

define('TITLE', 'Admin Portal : : HOME');


?>
<!DOCTYPE html>
<html>

<head>

	<!-- START CSS FILES -->

	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<!-- Font awsome css -->
	<link rel="stylesheet" type="text/css" href="../css/all.min.css">



	<!-- END CSS FILES -->

	<title><?php echo TITLE; ?></title>

</head>

<body>
	<!-- HEADER ONLINE EXAM MANAGEMENT SYSTEM -->
	<div class="jumbotron" style="margin-bottom: 0; padding: 1rem 1rem;">
		<h1 class="text-center">Online Exam Management System (Admin Poratal)</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3 bg-info">


			</div>
			<div class="col-md-6" style="margin-top: 20px;">

				<span id="message"></span>
				<div class="card">
					<div class=" card-header">Login Admin</div>
					<div class="card-body">
						<form method="post" id="admin_login_form">
							<div class="form-group">
								<label>Enter Email Address</label>
								<input type="text" name="admin_email_address" id="admin_email_address" class="form-control" />
							</div>
							<div class="form-group">
								<label>Enter Password</label>
								<input type="password" name="admin_password" id="admin_password" class="form-control" />
							</div>
							<div class="form-group">


								<input type="submit" name="admin_login" id="admin_login" class="btn btn-info" value="Login" />
							</div>
						</form>
					
					</div>
				</div>

			</div>

			<div class="col-md-3 bg-danger">


			</div>


		</div>
	</div>











	<!-- START JAVASCRIPT FILES -->

	<!-- jquery js -->
	<script src="../js/jquery.min.js"></script>

	<!-- bootstrap js -->
	<script src="../js/bootstrap.min.js"></script>

	<!-- font awsome js -->
	<script src="../js/all.min.js"></script>


	<!-- END JAVASCRIPT FILES -->
</body>

</html>





<?php
include '../dbcon.php';

if (isset($_POST['admin_login'])) {
	$admin_email_address = $_POST['admin_email_address'];
	$admin_password = $_POST['admin_password'];

	$query = "SELECT * FROM `admin_login` WHERE `admin_email_address` = '$admin_email_address' AND `admin_password`= '$admin_password' ";

	$run = $con->query($query);
	
	$row = $run->fetch_assoc();
	echo $row['admin_id'];

	if($row > 1)
	{
		header('location: teachers.php');
		session_start();
		$row['admin_id'];
		$_SESSION['admin_id'] = $row['admin_id'];
		$_SESSION['admin_name']= $row['admin_name'];
	}
	else
	{
		echo "Failed";
	}
}

?>



