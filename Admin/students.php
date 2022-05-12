<?php
define('TITLE', 'Teacher Portal : : Students');
define('PAGE', 'student');

// session started
session_start();
if (!isset($_SESSION['id'])) {
    header('location: login_teacher.php');
}

// stoaring sessions in variable
$s_id = $_SESSION['id'];
$s_name = $_SESSION['name'];

// including navbar
include 'navbar.php';
include '../action.php';
$exam = new Examination;
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
  
     
<div class="container pt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right p-4">
                    <!-- Trigger the modal with a button -->
                    
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#addStudent">Add Student</button>
                </div>
            </div>
        </div>

        <!-- fetching data of exam -->
<?php 
    $query = $exam->query = "
    SELECT * FROM `student`
			";
   

    $row1 = $exam->query_result();
  
     $exam->total_row($query);
    $question_button = '';

   
?>


        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Enrollment No(Username)</th>
                    <th>Password</th>
                    <th>Action</th>
                    
                    
                </tr>
            </thead>
            <tbody>

       <?php foreach($row1 as $rr)
    {
        
        echo 

       " <tr class='text-center'>
        <td > ".$rr['student_id']. "</td>
        <td >  ".$rr['first_name']." ".$rr['last_name']. "</td>
        <td > ". $rr['Username']. "</td>
        <td > ". $rr['student_password']. "</td>
        <td > ".$question_button. "<div class='p-2'></div>
        <form action='' method='POST'>
        <input type='hidden'  name='s_id' value=".$rr['student_id'].">
        <button type='submit' class='btn btn-outline-danger'  name='delete' value='delete' >
         Delete  
        </button>

    </form> </td>
        
    </tr>";
    }
       
       
      ?>
            </tbody>
        </table>
    </div>

    <?php
    // START QUERY TO DELETE EXMA

    
    if (isset($_REQUEST['delete'])) {
        $s_id = $_REQUEST['s_id'];
    
        $sql = "DELETE FROM `student` WHERE `student_id` =  '$s_id' ";
    
        if ($con->query($sql) === TRUE) {
            ?>
    
    <?php
            echo '<script>alert("Student Deleted");</script>';

            echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
        } else {
            echo 'Unable to Delete Data';
        }
    }
    ?>
    
    
    <!-- END QUERY TO DELETE EXAM -->




    <!-- start modal for add exam -->

    <!-- The Modal -->
    <div class="modal" id="addStudent">
        <div class="modal-dialog">
            <form id="add_exam" method="POST">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Examination</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div id="message"></div>
                <div class="form-group">
            			<div class="row">
              				<label class="col-md-4 text-right">Student First Name <span class="text-danger">*</span></label>
	              			<div class="col-md-8">
                        <input type="text" class="form-control" required name="f_name" id="f_name">
                    </div>
            			</div>
                </div>
                <div class="form-group">
            			<div class="row">
              				<label class="col-md-4 text-right">Student Last Name<span class="text-danger">*</span></label>
	              			<div class="col-md-8">
                        <input type="text" class="form-control" required name="l_name" id="l_name">
                    </div>
            			</div>
                </div>
                    <div class="form-group">
            			<div class="row">
              				<label class="col-md-4 text-right">Mobile Number<span class="text-danger">*</span></label>
	              			<div class="col-md-8">
                              <input type="text" class="form-control" required name="enroll" id="enroll">
                    </div>
                        </div>
                    </div>
                    <div class="form-group">
            			<div class="row">
              				<label class="col-md-4 text-right">Create Student Username <span class="text-danger">*</span></label>
	              			<div class="col-md-8">
                              <input type="text" class="form-control" required name="username" id="username">
	                		</div>
            			</div>
                      </div> 
                    
                    <div class="form-group">
            			<div class="row">
              				<label class="col-md-4 text-right">Student Password <span class="text-danger">*</span></label>
	              			<div class="col-md-8">
                              <input type="text" class="form-control" required name="password" id="password">
	                		</div>
            			</div>
                      </div>
                     
        	


                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <input type="hidden" name="action" id="action" value="Add" />
                <button type="submit" class="btn btn-success" id="submit_form_id" >Add</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
            </form>
        </div>
    </div>

    <!-- start modal for add exam -->







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

$(document).ready(function(){



    $('#addExam').on('submit', function(event){
        
        
        $.ajax({
				url:"",
				method:"POST",
				data:$(this).serialize(),
                

                success:function(data)
				{
					
                  
				}
        });
        
    });
    
    
});
// end date fetch from modal for add exam





    </script>
    <?php
    if(isset($_POST['action']) == 'Add')
    {

        $f_name = $_POST['f_name']; //first name

        $l_name = $_POST['l_name'];    //last name

        $enroll = $_POST['enroll'];     //enroll

        $password = $_POST['password'];  //password\\
        
        $username=$_POST['username'];


        $query = "INSERT INTO `student`( `first_name`, `last_name`, `student_phone`,Username, `student_password`) VALUES ('$f_name','$l_name','$enroll','$username','$password')";

                    

        $run = $con->query($query);
        if($run == true)
        {
            echo "<script>alert('Student Added');</script>";
            echo '<meta http-equiv="refresh" content= "0;URL=?studentadded" />';

        }
        else
        {
            echo "<script>alert('Please Check filled information is correct !!!');</script>";
        }

       


    }

?>