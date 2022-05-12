<?php
define('TITLE', 'Teacher Portal : : View Question');
define('PAGE', 'exam');





session_start();
if (!isset($_SESSION['id'])) {
    header('location: login_teacher.php');

    
}
 
$o_e_id = $_GET['code'];
$s_id = $_SESSION['id'];
$s_name = $_SESSION['name'];

include 'navbar.php';   //navbar

include '../dbcon.php';
include'../action.php';

$exam = new Examination;
$o_e_id = $_GET['code'];
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
  $add_button="";
  if($exam->Is_allowed_add_question($o_e_id))
  {
      
      $add_button = '<button type="button" id="add_question_btn" class="btn btn-primary float-right" data-toggle="modal" data-target="#addQuestion">Add Question </button>';
  
  
  }
  else
  {
      $add_button = '<button type="button" id="add_question_btn" class="btn btn-outline-primary  float-right" data-toggle="modal" data-target="#addQuestion" disabled>Add Question</button>';
  }
?>

<div class="container pt-2">
            <div class="col-md-12">
                <div class="p-4">
                    <!-- Trigger the modal with a button -->
                    <a href="dash.php"><button  type="button" onclick="unset_exam_id()" class="btn btn-outline-info float-left" ><i class="fa fa-arrow-circle-left"></i></button></a>
                    <?php echo $add_button; ?>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th class="bg-dark text-white">Sr.No</th>
                        <th  class="bg-dark text-white">Question</th>
                        <th class="bg-secondary text-white">Option 1</th>
                        <th class="bg-secondary text-white">Option 2</th>
                        <th class="bg-secondary text-white">Option 3</th>
                        <th class="bg-secondary text-white">Option 4</th>
                        <th class="bg-success text-white bold">Correct Option</th>
                        <th class="bg-dark text-white">Action</th>

                    </tr>
                </thead>
                <br>

                <tbody>


                
               
    <?php






    $counter = 1;

        
        
            $query_question = "SELECT * FROM `question_table` WHERE `online_exam_id` = '$o_e_id'";
            $run_query_question = $con->query($query_question);
            while($row_query_question = $run_query_question->fetch_assoc())
            {

            ?>
            <tr class="text-center">
            <td><?php echo $counter; ?></td>
            <td><?php echo $row_query_question['question_title']; ?></td>   
            <td><?php echo $row_query_question['option1']; ?></td>   
            <td><?php echo $row_query_question['option2']; ?></td>   
            <td><?php echo $row_query_question['option3']; ?></td>   
            <td><?php echo $row_query_question['option4']; ?></td>   
            <td><?php echo $row_query_question['answer_option']; ?></td>
            <td >
                        
            <a href="update_question.php?qid=<?php echo $row_query_question['question_id']; ?>"><button type="submit" class="btn btn-outline-dark"  name="delete" value="delete" >
                              <i class="fa fa-edit"></i>  
                            </button></a>
                    
                        
                    </td>
            </tr>
            <?php
            $counter++;
            }
            
        
    ?>

        </tbody>
            </table>
</div>                   

    <!-- closing table -->



    <!-- start modal for add Question -->

    <!-- The Modal -->
    <div class="modal" id="addQuestion">
        <div class="modal-dialog">
            <form id="add_question" method="POST">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Question</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 text-right">Question Title <span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="question_title" id="question_title" autocomplete="off" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 text-right">Option 1 <span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="option_title_1" id="option_title_1" autocomplete="off" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 text-right">Option 2 <span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="option_title_2" id="option_title_2" autocomplete="off" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 text-right">Option 3 <span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="option_title_3" id="option_title_3" autocomplete="off" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 text-right">Option 4 <span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="option_title_4" id="option_title_4" autocomplete="off" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 text-right">Answer <span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <select name="answer_option" id="answer_option" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="question_online_exam_id" value="<?php echo $o_e_id;?>" >
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <input type="hidden" name="action" id="action" value="AddQuestion" />
                        <button type="submit" class="btn btn-success" id="submit_form_id">Add</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <!-- start modal for add Question -->




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


<script type="text/javascript">
    // start date fetch from modal for add exam

    $(document).ready(function() {
    
        



        $('#add_question').on('submit', function(event) {


            $.ajax({
                url: "../action.php",
                method: "POST",
                data: $(this).serialize(),


                success: function(data) {
                    alert("ajax run successfully");


                }
            });

        });


    });
    // end date fetch from modal for add exam
</script>

<?php
$o_e_id;


if (isset($_POST['action']) == 'AddQuestion') {

    $o_e_id = $_POST['question_online_exam_id'];
    
    $question_title = $_POST['question_title'];

    $option_title_1 = $_POST['option_title_1'];

    $option_title_2 = $_POST['option_title_2'];

    $option_title_3 = $_POST['option_title_3'];

    $option_title_4 = $_POST['option_title_4'];

    $answer_option = $_POST['answer_option'];

    switch($answer_option)
    {
        case 1: $answer_option = $option_title_1;
        break;
        case 2: $answer_option = $option_title_2;
        break;
        case 3: $answer_option = $option_title_3;
        break;
        case 4: $answer_option = $option_title_4;
        break;
    }
    echo $answer_option;


    $query_i_q = "INSERT INTO `question_table`( `online_exam_id`, `question_title`, `option1`, `option2`, `option3`, `option4`, `answer_option`) values ('$o_e_id','$question_title','$option_title_1','$option_title_2','$option_title_3','$option_title_4','$answer_option') ";

    $run_query = mysqli_query($con, $query_i_q);
    if ($run_query == true) {
        
        echo '<meta http-equiv="refresh" content= "0;URL=?code='.$o_e_id.'" />';
        
    




            
        


}

        }
      
        // $run = $con->query($query);
        // if($run == true)
        // {
        //     echo "<script>alert('hi');</script>";

        // }
        // else
        // {
        //     echo "<script>alert('no');</script>";
        // }




    

    // START QUERY TO DELETE EXMA

    
        if (isset($_REQUEST['delete'])) {
            $q_id = $_REQUEST['q_id'];
        
            $sql = "DELETE FROM `question_table` WHERE `question_id` =  '$q_id' ";
        
            if ($con->query($sql) === TRUE) {
                ?>
        
        <?php
                echo '<script>alert("Question Deleted");</script>';

                echo '<meta http-equiv="refresh" content= "0;URL=?code='.$o_e_id.'" />';
            } else {
                echo 'Unable to Delete Data';
            }
        }
        
function unset_exam_id()
{
    
unset($_SESSION["o_e_id"]);
}



        ?>

        
        
        <!-- END QUERY TO DELETE EXAM -->
        
        