<?php
session_start();
include("include_pg.php");
include("dbcon.php");

define('TITLE', 'Student Portal : : Registration');


?>
<!DOCTYPE html>
<html>

<head>

	<!-- START CSS FILES -->

	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Font awsome css -->
	<link rel="stylesheet" type="text/css" href="css/all.min.css">



	<!-- END CSS FILES -->

	<title><?php echo TITLE; ?></title>
<style>
    
    
    
    </style>
</head>

<body>
	<!-- HEADER ONLINE EXAM MANAGEMENT SYSTEM -->
	<div class="jumbotron" style="margin-bottom: 0; padding: 1rem 1rem;">
		<h1 class="text-center">Shiksha Parikshan(Student Portal)</h1>
	</div>

	<div class="container bg">
		<div class="row">
			<div class="col-md-3 ">


			</div>
			<div class="col-md-6" style="margin-top: 20px;">

				<span id="message"></span>
				<div class="card shadow">
					<div class=" card-header">Student Registration</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label>Enter School Id</label>
								<input type="text" name="school_id" id="school_id" class="form-control" />
							</div>
                            <div class="form-group">
								<label>Enter User Name</label>
								<input type="text" name="stu_user" id="stu_user" class="form-control" />
							</div>
							<div class="form-group">
								<label>Enter Password</label>
								<input type="password" name="stu_pass" id="stu_pass" class="form-control" />
							</div><center>
							<div class="form-group">


							<button type="submit" class="btn btn-primary submit_btn " name="submit_reg">Register</button>
							</div></center>
						</form>
						<div align="center">
							<a href="#" class="btn ">Forget Password</a>
						</div>
					</div>
				</div>

			</div>

			<div class="col-md-3">


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

if(isset($_POST['submit_reg'])){
$emailid=$_POST['school_id'];

$username=$_POST['stu_user'];
$pass=($_POST['stu_pass']);
// $sql1 = "select count(*) from school_registration where User_Name ='".$username."'";

// $res1 = $con->query($sql1);


// if(mysqli_num_rows($res1)==0)

$query="INSERT INTO `student_registration`( `School_Id`,`User_Name`,`Password`) VALUES ('$emailid','$username','$pass')";

if($con->query($query)){
    echo '<script>
   
    
        alert("Registeration Successful please login. ");
        
   </script>';
}



else{

    echo '<script>
   
    
        alert("Registeration already exist ");
        
   </script>';

}
}

?>



<?php
include 'dbcon.php';

if (isset($_POST['teacher_login'])) {
	$teacher_email_address = $_POST['teacher_email_address'];
	$teacher_password = $_POST['teacher_password'];

	$query = "SELECT * FROM `admin_login` WHERE `username`  = '$teacher_email_address' AND `password` = '$teacher_password' ";

	$run = $con->query($query);
	
	$row = $run->fetch_assoc();
	//echo $row['teacher_id'];
	

	if($row > 1)
	{session_start();
		
		$_SESSION['id'] = "rutu";
		$_SESSION['name']= "rutu";
		header('location: dash.php');
		
	}
	else	
	{
		echo "Failed";
	}
}

?>



