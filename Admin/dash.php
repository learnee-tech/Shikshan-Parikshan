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




    <div class="container pt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right p-4">
                    <!-- Trigger the modal with a button -->
                    
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#addExam">Add Career</button>
                    
                    <button type="button" class="btn btn-outline-dark"> <a href="personality.php">Personality Module</a></button>
                    
                    
                     <button type="button" class="btn btn-outline-dark"> <a href="career_module.php">Career Module</a></button>
                </div>
            </div>
        </div>

        <!-- fetching data of exam -->
<?php 
   $query = "select * from career_que";

                    

   $res = $con->query($query);

   
?>


        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th>Sr. No.</th>
                    <th>Career Name</th>
                    <th>Code</th>
                    <th>Total Questions</th>
                    
                    <th>Add</th>
                    
                    <th>View</th>
                    
                    <th>Delete</th>
                    
                    
                </tr>
            </thead>
            <tbody>

       <?php 
            $count=0;
                $arr=['humanity','commerce','civil','bussiness','technical','space','management','med_sci'];
                for($i=0;$i<8;$i++){
                    $count=$i;
                    $query="select count(*) from career_que where w1='".$arr[$i]."' or w2='".$arr[$count]."' or w3='".$arr[$count]."' or w4='".$arr[$count]."'";
                    $res=$con->query($query);
                    
                    while($cur=$res->fetch_assoc())
{
        echo 

       " <tr class='text-center'>
        <td > ".($count+1)."</td>
        <td >  ".$arr[$count]."</td>
        <td >  ".$cur['count(*)']."</td>
        
        
       <form action='edit_que.php' method='POST'>";
    
        
       echo "
       <input type='hidden' name='career_code' value='".$arr[$count]."'>
        <td>
            <button type='submit' class='btn btn-outline-success' data-toggle='modal' data-target='#addQue' name='add_que' value='add_que' >
            Add Question  
        </button></td>
        <td>
                <button type='submit' class='btn btn-outline-primary'  name='view_que' value='view_que' >
               View
        </button></td>
        </form>
        <form action='' method='post'>
               <input type='hidden' name='career_code' value='".$arr[$count]."'>

        

        <td>
            <button type='submit' class='btn btn-outline-danger'  name='delete' value='delete' >
                Delete  
            </button>

        </td>


    </form> </td>
        
    </tr>";
                        
    }
   
                }
    
       
      ?>
            </tbody>
        </table>
    </div>
    <?php
    
    // START QUERY TO DELETE EXMA

    
    if (isset($_REQUEST['delete'])) {
        $e_id = $_POST['career_code'];
    $con= new mysqli('localhost','root','','career_guidance');
        $sql = "DELETE FROM `career` WHERE `career_code` =  '$e_id' ";
    $sql1 = "DELETE FROM `questions` WHERE `career_code` =  '$e_id' ";
    
        if ($con->query($sql) === TRUE ) {
            ?>
    
    <?php
            echo '<script>alert("Career Deleted");</script>';

            echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
        } else {
            echo 'Unable to Delete Data';
        }
    }
    ?>
    
    
    <!-- END QUERY TO DELETE EXAM -->
 


    




 <!-- add que modal starts -->



    <div class="modal " id="addQue">
        <div class="modal-dialog modal-lg">
            <form id="add_que" method="POST">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    
                    <h4 class="modal-title">Add Question </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>


                <!-- Modal body -->
                <div class="modal-body">
                    <div id="message"></div>
                <div class="form-group">
            			<div class="row">
              				<label class="col-md-4 text-right">Question <span class="text-danger">*</span></label>
	              			<div class="col-md-8">
                        <input type="text" class="form-control" required name="exam_name" id="exam_name">
                    </div>
            			</div>
                </div>


                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 1<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="exam_code" id="exam_code">
                                 </div>
                                 <div class="col-md-4">
                                 <select name="after" id="total_question" required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="12">4</option>
	                				<option value="10">3</option>
                                    <option value="12">2</option>
	                				<option value="10">1</option>
                                    
	                			</select>
                            </div>

            			</div>
                </div>


                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 2<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="exam_code" id="exam_code">
                                 </div>
                                 <div class="col-md-4">
                                 <select name="after" id="total_question" required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="12">4</option>
	                				<option value="10">3</option>
                                    <option value="12">2</option>
	                				<option value="10">1</option>
                                    
	                			</select>
                            </div>

            			</div>
                </div>

                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 3<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="exam_code" id="exam_code">
                                 </div>
                                 <div class="col-md-4">
                                 <select name="after" id="total_question" required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="12">4</option>
	                				<option value="10">3</option>
                                    <option value="12">2</option>
	                				<option value="10">1</option>
                                    
	                			</select>
                            </div>

            			</div>
                </div>





                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 4<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="exam_code" id="exam_code">
                                 </div>
                                 <div class="col-md-4">
                                 <select name="after" id="total_question" required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="12">4</option>
	                				<option value="10">3</option>
                                    <option value="12">2</option>
	                				<option value="10">1</option>
                                    
	                			</select>
                            </div>

            			</div>
                </div>




                      
          			
                      <input type="hidden" value="<?php echo $s_id; ?>" name="teacher_id">
        	


                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <input type="hidden" name="action" id="action" value="Add" />
                <button type="submit" class="btn btn-success" name="addQueSubmit">Add</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
            </form>
        </div>
    </div>

    <!-- add que modal ends -->















    <!-- start modal for add exam -->

    <!-- The Modal -->
    <div class="modal" id="addExam">
        <div class="modal-dialog">
            <form id="add_exam" method="POST">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Career </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div id="message"></div>
                <div class="form-group">
            			<div class="row">
              				<label class="col-md-4 text-right">Career Name <span class="text-danger">*</span></label>
	              			<div class="col-md-8">
                        <input type="text" class="form-control" required name="exam_name" id="exam_name">
                    </div>
            			</div>
                </div>
                <div class="form-group">
            			<div class="row">
              				<label class="col-md-4 text-right">Exam Subject code<span class="text-danger">*</span></label>
	              			<div class="col-md-8">
                        <input type="text" class="form-control" required name="exam_code" id="exam_code">
                    </div>
            			</div>
                </div>
                      
          			
                      <input type="hidden" value="<?php echo $s_id; ?>" name="teacher_id">
        	


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
        

        $code=$_POST['exam_code'];
        $name=$_POST['exam_name'];



        $query = "INSERT INTO career (career_name,career_code) VALUES ('$name','$code')";

                    

        $run = $con->query($query);
        if($run == true)
        {
            echo "<script>alert('Career Added');</script>";
            echo '<meta http-equiv="refresh" content= "0;URL=?examadded" />';

        }
        else
        {
            echo "<script>alert('Please Check filled information is correct !!!');</script>";
        }

       


    }



?>