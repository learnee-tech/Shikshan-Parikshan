<?php
define('TITLE', 'Admin Portal : : Dashboard');
define('PAGE', 'dash');


session_start();
if (!isset($_SESSION['admin_id'])) {
    header('location: login_admin.php');
}

$s_id = $_SESSION['admin_id'];
$s_name = $_SESSION['admin_name'];

include 'navbar.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>

    <!-- START CSS FILES -->

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font awsome css -->
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">



    <!-- END CSS FILES -->
</head>

<body>




    <!-- START JAVASCRIPT FILES -->

    <!-- jquery js -->
    <script src="../js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="../js/popper.js"></script>

    <!-- bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>


    <!-- font awsome js -->
    <script src="../js/all.min.js"></script>


    <!-- END JAVASCRIPT FILES -->

    <script>
        function logout() {
            alert('Logout Successfully');
        }

        function login() {
            alert('Login Successfully !!! Welcome <?php echo ucwords($s_name) ?>');
        }
    </script>
</body>

</html>