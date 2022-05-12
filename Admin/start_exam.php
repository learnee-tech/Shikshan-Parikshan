<script>
    
        $(document).ready(function() {

            filter_data();

            function filter_data() {
                $('.filter_data').html("<div id='loading'></div>");
                var action = 'fetch_data.php';
               var type1=document.forms.f1.type.value;
                $.ajax({
                    url: "fetch_data.php",
                    method: "POST",
                    data: {
                         type:type1,
                        action: action,
                       
                    },
                    success: function(data) {
                        $('.filter_data').html(data);
                    }
                });
            }

            

            $('.common_selcetor').click(function() {
                filter_data();
            });

           
    
</script>



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

include '../dbcon.php';
include '../action.php';
 $career_nm="p";
 $query = "select count(DISTINCT que_code) from questions;";

 $query1 = "select DISTINCT que_code from questions;";


$res = $con->query($query);

$res=$res->fetch_assoc();
$size =$res['count(DISTINCT que_code)'];

for($j=0;$j<$size;$j++){
    
    $my_array[$j]=$j;
    
}
    
 $res = $con->query($query1);
$count=0;
while($row=$res->fetch_assoc())
{
    $career_arr[$count]=$row['que_code'];
    $count++;
    $my_array[$row['que_code']]=1;
}
                    




















    function1($career_arr[0]);
    
  $c_res=0;

function function1($value1){
    $host = 'localhost';
		$username = 'root';
		$password = '';
		$database = 'career_guidance';

		$con = new mysqli($host,$username,$password,$database);
		
    
    $query3="Select * from questions where que_code='".$value1."'";
    
    $result = $con->query($query3);

$res=$result->fetch_assoc();
    echo '<br><br>';
    echo $res['question'];
    echo '<br><br><form method="post" action="">
    <input type="radio" name="opt" value="'.$res['w1'].'">'.$res['opt1'].'<br><br>
    <input type="radio" name="opt" value="'.$res['w2'].'">'.$res['opt1'].'<br><br>
    <input type="radio" name="opt" value="'.$res['w3'].'">'.$res['opt1'].'<br><br>
    <input type="radio" name="opt" value="'.$res['w4'].'">'.$res['opt1'].'<br><br>
    
    
    <button type="submit" name="'.$res['question'].'" class="btn btn-outline-dark" data-toggle="modal" data-target="#addExam">Next</button>
    </form>
    
    
    
    
    ';
    
    if(isset($_POST[$res['question']]))
    {echo $GLOBALS['career_nm'];
        $c_res=$_POST['opt'];
        function1($value1+1);
    }
    
}
?>

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
<!-- jquery js -->
    <script src="../js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="../js/popper.js"></script>

    <!-- bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>


    <!-- font awsome js -->
    <script src="../js/all.min.js"></script>

