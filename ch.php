<?php
     session_start();

 
if ($_SESSION['p2']==2) {

$eid=@$_GET['value']+1;
    $_SESSION['p2']=2;
    $ch =@$_GET['opt']; 
    if($ch=="Realistic"){
        $_SESSION['realistic']++;
    }
    if($ch=="Social"){
       $_SESSION['social']++;
    }if($ch=="Enterprising"){
        $$_SESSION['enterprising']++;

    }if($ch=="Conventional"){
        $_SESSION['conventional']++;

    }
    
        header('location:personality_test.php?qid='.$eid.'?q1="quiz"');

}

else{
$eid=@$_GET['value']+1;
  $ch =@$_GET['opt']; 
    if($ch==1){
$_SESSION['realistic']++;
    }
    if($ch==2){
       $_SESSION['social']++;
    }if($ch==3){
        $_SESSION['enterprising']++;

    }if($ch==4){
        $_SESSION['conventional']++;

    }
header('location:personality_test.php?qid='.$eid.'?q1="quiz"');
}


?>