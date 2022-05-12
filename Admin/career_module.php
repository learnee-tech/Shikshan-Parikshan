<?php
define('TITLE', 'Teacher Portal : : Exam');
define('PAGE', 'exam');


session_start();
if (!isset($_SESSION['id'])) {
    header('location: login_teacher.php');
}

$s_id = $_SESSION['id'];
$s_name = $_SESSION['name'];

include 'navbar.php';   //navbar

include '../dbcon.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>

    <!-- START CSS FILES -->

    <!-- bootstrap css -->

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font awsome css -->
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">



    <!-- END CSS FILES -->
</head>

<body>
<table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th>Sr. No.</th>
                    <th>Question</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    
                    <th>Delete</th>
                    
                    
                </tr>
            </thead>
            <tbody>
    </tbody>
    
    <?php 
    
    
    $query="select * from career_que";
    $res=$con->query($query);
            $count=1;
while($cur=$res->fetch_assoc())
{
        echo 

       " <tr class='text-center'>
        <td > ".$count. "</td>
        <td >  ".$cur['question']. "</td>
        <td > ". $cur['opt1']. "</td>
        <td > ". $cur['opt2']. "</td>
        <td > ". $cur['opt3']. "</td>
        <td > ". $cur['opt4']. "</td>
        <td>
        <form action='' method='post'>
<button type='submit' class='btn btn-outline-primary'  name='view_que' value='view_que' >
               Delete
        </button>
        </form>
        </td>
    ";$count++;
    
}
    echo'</table>
    </body>';
    ?>