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


$query1="select Id from questions where que_code='101'";
 $res = $con->query($query1); 
    $count=0;
while($row=$res->fetch_assoc())
{
    $id_arr[$count]=$row['Id'];
    $count++;
}    
    
if(isset($_POST['sub'])){
    
    echo "ji";
    $count_val=$id_arr[$_POST['count']+1];
    
    $query3="Select * from questions where Id='$count_val'";
    
    $result = $con->query($query3);

$res=$result->fetch_assoc();
    echo '<br><br>';
    echo $res['question'];
    echo '<br><br><form method="post" action="update.php"?q="quiz"&count='.$count.'">
    <input type="radio" name="opt" value="'.$res['w1'].'">'.$res['opt1'].'<br><br>
    <input type="radio" name="opt" value="'.$res['w2'].'">'.$res['opt2'].'<br><br>
    <input type="radio" name="opt" value="'.$res['w3'].'">'.$res['opt3'].'<br><br>
    <input type="radio" name="opt" value="'.$res['w4'].'">'.$res['opt4'].'<br><br>
    
    
    <button type="submit" name="sub" class="btn btn-outline-dark" data-toggle="modal" data-target="#addExam">Next</button>
    </form>
    
    
    
    
    ';
}else{
    $query3="Select * from questions where Id=30";
    
    $result = $con->query($query3);

$res=$result->fetch_assoc();
    echo '<br><br>';
    echo $res['question'];
    echo '<br><br><form method="post" action="start_exam2.php"?q="quiz"&count="0">
    <input type="radio" name="opt" value="'.$res['w1'].'">'.$res['opt1'].'<br><br>
    <input type="radio" name="opt" value="'.$res['w2'].'">'.$res['opt2'].'<br><br>
    <input type="radio" name="opt" value="'.$res['w3'].'">'.$res['opt3'].'<br><br>
    <input type="radio" name="opt" value="'.$res['w4'].'">'.$res['opt4'].'<br><br>
    
    
    <button type="submit" name="sub"  class="btn btn-outline-dark" data-toggle="modal" data-target="#addExam">Next</button>
    </form>
    
    
    
    
    ';
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

