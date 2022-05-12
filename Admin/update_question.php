<?php
define('TITLE', 'Teacher Portal : : Update Question');
define('PAGE', 'exam');

session_start();
if (!isset($_SESSION['id'])) {
    header('location: login_teacher.php');   
}
 
$s_id = $_SESSION['id'];
$s_name = $_SESSION['name'];

include 'navbar.php';   //navbar
include '../dbcon.php'; //database connection
include '../action.php'; 

$exam = new Examination;

$question_id = $_GET['qid'];

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

<?php
// START QUESTION FETCH DETAILS
$query_q_fetch = "SELECT * FROM `question_table` WHERE `question_id` = ".$question_id." ";
$run_q_fetch = $con->query($query_q_fetch);
$row_q_fetch = $run_q_fetch->fetch_assoc();

// END QUESTION FETCH DETAILS
?>
    
<div class="container pt-2">
    <div class="col-md-12">
    <div class="text-center">
<form action="" method="POST">
   <b> Question : </b><input type="text" name="question_title" value="<?php echo $row_q_fetch['question_title'];?>">
    <br>
    <br>
    <b>Option 1 : </b><input type="text" name="option1" value="<?php echo $row_q_fetch['option1'];?>">
    <br>
    <br>
    <b>Option 2 : </b><input type="text" name="option2" value="<?php echo $row_q_fetch['option2'];?>">
    <br>
    <br>
    <b>Option 3 : </b><input type="text" name="option3" value="<?php echo $row_q_fetch['option3'];?>">
    <br>
    <br>
    <b>Option 4 : </b><input type="text" name="option4" value="<?php echo $row_q_fetch['option4'];?>">
    <br>
    <br>
    <b>Correct Answer : </b><input type="text" name="correct_answer" value="<?php echo $row_q_fetch['answer_option'];?>">
    <br>
   <br>
    <input type="submit" name="update" value="Update">
    </form>
    </div>
    </div>
</div>


<!-- start updating question -->
<?php
    if(isset($_POST['update']))
    {
        
        $q_title = $_POST['question_title'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $correct_ans = $_POST['correct_answer'];
        $q_to_update = '';

        $q_to_update = 'UPDATE `question_table` SET `question_title`= "'.$q_title.'" ,`option1`="'.$option1.'",`option2`="'.$option2.'",`option3`="'.$option3.'",`option4`="'.$option4.'",`answer_option`="'.$correct_ans.'" ';

        $q_to_update .=' WHERE `question_id` = "'.$question_id.'" ';



        $run_to_update = $con->query($q_to_update);

        if($run_to_update == true)
        {
            
            echo '<meta http-equiv="refresh" content= "0;URL=?qid='.$question_id.'" />';
            header('location: view_question.php?code='.$row_q_fetch["online_exam_id"].' ');
        }
    }
?>
<!-- end updating question -->


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


</body>

</html>