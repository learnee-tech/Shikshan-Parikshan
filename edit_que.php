<?php
define('TITLE', 'Admin Portal : : Exam');
define('PAGE', 'exam');


session_start();
if (!isset($_SESSION['id'])) {
    header('location: login_teacher.php');
}

if(isset($_POST['add_que'])){
    $code=$_POST['career_code'];
$_SESSION['career_code'] = $code;
}
    
    
$code=$_SESSION['career_code'];



$s_id = $_SESSION['id'];
$s_name = $_SESSION['name'];


include 'navbar.php';   //navbar

include 'dbcon.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $code; ?></title>

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
                    
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#addExam"> 

                        ADD TEACHER</button>
                </div>
            </div>  
        </div>

        <!-- fetching data of exam -->
<?php 
$sid=$_SESSION['school_id'];
                    $query="select * from faculty where school_id='$sid' and class_nm='$code'";

                    

   $res = $con->query($query);

   
?>

<h1>
<?php
        echo "Class Name:".$code;

    ?>
    
    </h1>
        <table class="table table-striped">
            <thead>
              
                <br><br>
                <tr class="text-center">
                    <th>Sr.No.</th>
                    <th>Subject</th>
                    <th>Teacher</th>
                    
                    
                    <th>Delete</th>
                    
                    
                </tr>
            </thead>
            <tbody>

       <?php 
            $count=1;
while($cur=$res->fetch_assoc())
{
        echo 

       " <tr class='text-center'>
        <td > ".$count++. "</td>
        <td >  ".$cur['subject']. "</td>
        <td > ". $cur['teacher_name']. "</td>
        
        
       <form action='edit_que.php' method='POST'>
       <input type='hidden' name='career_code' value='".$cur['
       
       id']."'>
        
        
       
        <td>
            <button type='submit' class='btn btn-outline-danger'  name='delete' value='delete' >
                Delete  
            </button>

        </td>


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
        $e_id = $_REQUEST['career_code'];
        echo $e_id;
        $sql = "DELETE FROM `school_data` WHERE `id` =  1 ";
    
        if ($con->query($sql) == true) {


               




            echo '<script>alert("Question Deleted.");</script>';

            echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
        } else {
            echo 'Unable to Delete Data';
        }
    }
    ?>
    
    
    <!-- END QUERY TO DELETE EXAM -->
 

<!-- add que of 2 options-->
    
     <div class="modal " id="addQue2opt">
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
                        <input type="text" class="form-control" required name="que" id="que">
                    </div>
            			</div>
                </div>


                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 1<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt1" id="exam_code">
                                 </div>
                             <div class="col-md-4">
                                      <select name="opt1w"  required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="med_sci">Medical Science</option>
                    				<option value="commerce">Commerce</option>
                                    <option value="humanity">Humanity Arts</option>
                                    <option value="technical">Technical</option>
                                    <option value="space">Space Technology</option>
                                    <option value="bussiness">Bussiness</option>
                                    <option value="management">Management</option>
                                    <option value="civil">Civil Services</option>
                                                   
                                
	                			</select>
                            </div>
                            </div>

            			</div>
             


                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 2<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt2" id="exam_code">
                                 </div>
                            <div class="col-md-4">
                                     <select name="opt2w"  required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="med_sci">Medical Science</option>
                    				<option value="commerce">Commerce</option>
                                    <option value="humanity">Humanity Arts</option>
                                    <option value="technical">Technical</option>
                                    <option value="space">Space Technology</option>
                                    <option value="bussiness">Bussiness</option>
                                    <option value="management">Management</option>
                                    <option value="civil">Civil Services</option>
                                    <option value="no">None</option>
                                                   
                                
	                			</select>
                            </div>
                                
                    </div>
            			</div>
                </div>


                      
          			
                   


                <!-- Modal footer -->
                <div class="modal-footer">
                <input type="hidden" name="action" id="action" value="Add" />
                <button type="submit" class="btn btn-success" name="sub_2opt">Add</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </div>
            </form>
        </div>
         </div>

 <!-- add normal que modal starts -->



    <div class="modal " id="add_normal">
        <div class="modal-dialog modal-lg">
            <form id="add_normal_que" method="POST">
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
                        <input type="text" class="form-control" required name="que" id="que">
                    </div>
            			</div>
                </div>


                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 1<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt1" id="exam_code">
                                 </div>
                                 <div class="col-md-4">
                                     <select name="opt1w"  required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="med_sci">Medical Science</option>
                    				<option value="commerce">Commerce</option>
                                    <option value="humanity">Humanity Arts</option>
                                    <option value="technical">Technical</option>
                                    <option value="space">Space Technology</option>
                                    <option value="bussiness">Bussiness</option>
                                    <option value="management">Management</option>
                                    <option value="civil">Civil Services</option>
                                                   
                                
	                			</select>
                            </div>

            			</div>
                </div>


                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 2<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt2" id="exam_code">
                                 </div>
                                 <div class="col-md-4">
                                 <select name="opt2w"  required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="med_sci">Medical Science</option>
                    				<option value="commerce">Commerce</option>
                                    <option value="humanity">Humanity Arts</option>
                                    <option value="technical">Technical</option>
                                    <option value="space">Space Technology</option>
                                    <option value="bussiness">Bussiness</option>
                                    <option value="management">Management</option>
                                    <option value="civil">Civil Services</option>
                                     <option value="prono">Probably No</option>
                                                   
                                
	                			</select>
                            </div>

            			</div>
                </div>

                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 3<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt3" id="exam_code">
                                 </div>
                                 <div class="col-md-4">
                                  <select name="opt3w"  required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="med_sci">Medical Science</option>
                    				<option value="commerce">Commerce</option>
                                    <option value="humanity">Humanity Arts</option>
                                    <option value="technical">Technical</option>
                                    <option value="space">Space Technology</option>
                                    <option value="bussiness">Bussiness</option>
                                    <option value="management">Management</option>
                                    <option value="civil">Civil Services</option>
                                   <option value="maybe">Maybe</option>
                        
	                			</select>
                            </div>

            			</div>
                </div>





                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 4<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt4" id="exam_code">
                                 </div>
                                 <div class="col-md-4 ">
                                     <select name="opt4w"  required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="med_sci">Medical Science</option>
                    				<option value="commerce">Commerce</option>
                                    <option value="humanity">Humanity Arts</option>
                                    <option value="technical">Technical</option>
                                    <option value="space">Space Technology</option>
                                    <option value="bussiness">Bussiness</option>
                                    <option value="management">Management</option>
                                    <option value="civil">Civil Services</option>
                                    <option value="no">No</option>
                                         
                                                   
                                
	                			</select>
                            </div>

            			</div>
                </div>



                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <input type="hidden" name="action" id="action" value="Add" />
                <button type="submit" class="btn btn-success" name="add_4opt">Add</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
            </form>
        </div>
    </div>

    <!-- add normal que modal ends -->

    




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
                        <input type="text" class="form-control" required name="que" id="que">
                    </div>
            			</div>
                </div>


                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 1<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt1" id="exam_code">
                                 </div>
                                 <div class="col-md-4">
                                     <select name="opt1w"  required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="3">3</option>
	                				<option value="2">2</option>
                                    <option value="1">1</option>
	                				<option value="0">0</option>
                                    
	                			</select>
                            </div>

            			</div>
                </div>


                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 2<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt2" id="exam_code">
                                 </div>
                                 <div class="col-md-4">
                                 <select name="opt2w" required class="form-control">
	                				<option value="0">Select Weightage</option>
	                				
	                				<option value="3">3</option>
	                				<option value="2">2</option>
                                    <option value="1">1</option>
	                				<option value="0">0</option>
                                    
	                			</select>
                            </div>

            			</div>
                </div>

                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 3<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt3" id="exam_code">
                                 </div>
                                 <div class="col-md-4">
                                 <select name="opt3w"  required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="3">3</option>
	                				<option value="2">2</option>
                                    <option value="1">1</option>
	                				<option value="0">0</option>
                                    
	                			</select>
                            </div>

            			</div>
                </div>





                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 4<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt4" id="exam_code">
                                 </div>
                                 <div class="col-md-4 ">
                                     <select name="opt4w"  required class="form-control">
	                				<option value="">Select Weightage</option>
	                				
	                				<option value="3">3</option>
	                				<option value="2">2</option>
                                    <option value="1">1</option>
	                				<option value="0">0</option>
                                    
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



 <!-- add que modal without wt starts -->



    <div class="modal " id="addQuewt">
        <div class="modal-dialog modal-lg">
            <form id="add_que_wt" method="POST">
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
                        <input type="text" class="form-control" required name="que" id="que">
                    </div>
            			</div>
                </div>


                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 1<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt1" id="exam_code">
                                 </div>
                                
                            
            			</div>
                </div>


                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 2<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt2" id="exam_code">
                                 </div>
                                 

            			</div>
                </div>

                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 3<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt3" id="exam_code">
                                 </div>
                               

            			</div>
                </div>





                <div class="form-group">
            			<div class="row">
                                    <label class="col-md-4 text-right">Option 4<span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                     <input type="text" class="form-control" required name="opt4" id="exam_code">
                                 </div>
                                 

            			</div>
                </div>
  <div class="form-group">
      <div class="row">
          
                <label class="col-md-4 text-right"><span class="text-danger">Answer *</span></label>

                    <div class="col-md-4 text-right">
                                     <select name="ans"  required class="form-control">
                                         
	                				<option value="">Choose Correct Option</option>
	                				
	                				<option value="opt1">Option 1</option>
	                				<option value="opt2">Option 2</option>
                                    <option value="opt3">Option 3</option>
	                				<option value="opt4">Option 4</option>
                                    
	                			</select>
                            </div>

      </div>
    </div>
                      
          			
                      <input type="hidden" value="<?php echo $s_id; ?>" name="teacher_id">
        	


                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <input type="hidden" name="action" id="action" value="Add" />
                <button type="submit" class="btn btn-success" name="addQueSubmitwt">Add</button>
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
                    <h4 class="modal-title">Add Teacher </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div id="message"></div>
                <div class="form-group">
            			<div class="row">
              				<label class="col-md-4 text-right">Techer Name <span class="text-danger">*</span></label>
	              			<div class="col-md-8">
                        <input type="text" class="form-control" required name="teacher_nm" id="exam_name">
                    </div>
            			</div>
                </div>
                <div class="form-group">
            			<div class="row">
              				<label class="col-md-4 text-right">Subject Name<span class="text-danger">*</span></label>
	              			<div class="col-md-8">
                        <input type="text" class="form-control" required name="sub" id="exam_code">
                    </div>
            			</div>
                </div>
                     
          			
                      <input type="hidden" value="<?php echo $s_id; ?>" name="teacher_id">
        	


                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <input type="hidden" name="action" id="action" value="Add" />
                <button type="submit" class="btn btn-success" name="add_teacher" id="submit_form_id" >Add</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
            </form>
        </div>
    </div>

    <!-- start modal for add exam -->






 
    
    

    <!-- START JAVASCRIPT FILES -->

    <!-- jquery js -->
    <script src="js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="js/popper.js"></script>

    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>


    <!-- font awsome js -->
    <script src="js/all.min.js"></script>


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
    
     if(isset($_POST['add_4opt'])){
        
        
        $que=$_POST['que'];
        $opt1=$_POST['opt1'];
        $opt2=$_POST['opt2'];
        $opt3=$_POST['opt3'];
        $opt4=$_POST['opt4'];
         
        $w1=$_POST['opt1w'];
        $w2=$_POST['opt2w'];
         
        $w3=$_POST['opt3w'];
        $w4=$_POST['opt4w'];
         
        
        
        $query="INSERT INTO `career_que`(`question`, `weightage`, `opt1`, `opt2`, `opt3`, `opt4`, `w1`, `w2`,`w3`, `w4`) VALUES ('$que','0','$opt1','$opt2','$opt3','$opt4','$w1','$w2','$w3','$w4')";
        
        $run = $con->query($query);
        if($run == true)
        {
            echo $opt2w."<script>alert('Question Added');</script>";
            echo '<meta http-equiv="refresh" content= "0;URL=?examadded" />';

        }
        else
        {
            echo "<script>alert('Please Check filled information is correct !!!');</script>";
        }
                
        
        
    }
    

    if(isset($_POST['add_teacher'])){
        
        
        $que=$_POST['teacher_nm'];
        $opt1=$_POST['sub'];
        $sid=$_SESSION['school_id'];
        $query="INSERT INTO `faculty`(`school_id`, `class_nm`, `subject`, `teacher_name`) VALUES ('$sid','$code','$opt1','$que')";

 $run = $con->query($query);
        if($run == true)
        {
            echo $opt2w."<script>alert('Teacher Added');</script>";
            echo '<meta http-equiv="refresh" content= "0;URL=?examadded" />';

        }
        else
        {
            echo "<script>alert('Please Check filled information is correct !!!');</script>";
        }

    }
    if(isset($_POST['sub_2opt'])){
        
        
        $que=$_POST['que'];
        $opt1=$_POST['opt1'];
        $opt2=$_POST['opt2'];
        $w1=$_POST['opt1w'];
        $w2=$_POST['opt2w'];
        
        
        $query="INSERT INTO `career_que`(`question`, `weightage`, `opt1`, `opt2`, `w1`, `w2`) VALUES ('$que','1','$opt1','$opt2','$w1','$w2')";
        
        $run = $con->query($query);
        if($run == true)
        {
            echo $opt2w."<script>alert('Question Added');</script>";
            echo '<meta http-equiv="refresh" content= "0;URL=?examadded" />';

        }
        else
        {
            echo "<script>alert('Please Check filled information is correct !!!');</script>";
        }
                
        
        
    }
    
    
    
    if(isset($_POST['addQueSubmit'])){
        
        $que=$_POST['que'];
        $opt1=$_POST['opt1'];
        $opt2=$_POST['opt2'];
        $opt3=$_POST['opt3'];
        $opt4=$_POST['opt4'];
        $opt1w=$_POST['opt1w'];
        $opt2w=$_POST['opt2w'];
        $opt3w=$_POST['opt3w'];
        $opt4w=$_POST['opt4w'];
        
        $query="INSERT INTO `questions`(`que_code`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `w1`, `w2`, `w3`, `w4`) VALUES ('$code','$que','$opt1','$opt2','$opt3','$opt4','$opt1w','$opt2w','$opt3w','$opt4w')";
        
        $run = $con->query($query);
        if($run == true)
        {
            echo $opt2w."<script>alert('Question Added');</script>";
            echo '<meta http-equiv="refresh" content= "0;URL=?examadded" />';

        }
        else
        {
            echo "<script>alert('Please Check filled information is correct !!!');</script>";
        }
        
        
        
    }
    
    if(isset($_POST['addQueSubmitwt'])){
        
        $que=$_POST['que'];
        $opt1=$_POST['opt1'];
        $opt2=$_POST['opt2'];
        $opt3=$_POST['opt3'];
        $opt4=$_POST['opt4'];
        $ans=$_POST['ans'];
        $opt1w=0;
            $opt2w=0;
            $opt3w=0;
            $opt4w=0;

        
        if($ans=="opt1"){
            $opt1w=3;
        } if($ans=="opt2"){
            $opt2w=3;
        } if($ans=="opt3"){
            $opt3w=3;
        }if($ans=="opt4"){
            $opt4w=3;
        }
        
        $query="INSERT INTO `questions`(`que_code`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `w1`, `w2`, `w3`, `w4`) VALUES ('$code','$que','$opt1','$opt2','$opt3','$opt4','$opt1w','$opt2w','$opt3w','$opt4w')";
        
        $run = $con->query($query);
        if($run == true)
        {
            echo $opt2w."<script>alert('Question Added');</script>";
            echo '<meta http-equiv="refresh" content= "0;URL=?examadded" />';

        }
        else
        {
            echo "<script>alert('Please Check filled information is correct !!!');</script>";
        }
        
        
        
    }
    
    
    
    /*
    if(isset($_POST['action']) == 'Add')
    {
        

        $code=$_POST['exam_code'];
        $name=$_POST['exam_name'];



        $query = "INSERT INTO career (career_name,career_code) VALUES ('$name','$code')";

                    

        $run = $con->query($query);
        if($run == true)
        {
            echo "<script>alert('Exam Added');</script>";
            echo '<meta http-equiv="refresh" content= "0;URL=?examadded" />';

        }
        else
        {
            echo "<script>alert('Please Check filled information is correct !!!');</script>";
        }

       


    }

*/

?>