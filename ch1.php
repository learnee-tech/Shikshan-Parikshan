<?php
     session_start();

 
if ($_SESSION['p3']==2) {

$eid=@$_GET['value']+1;
    $_SESSION['p2']=2;
    
    $ch =@$_GET['opt']; 
   
    
    

   if($ch=="bussiness"){
        $_SESSION['bussiness']++;
    }
    if($ch=="civil"){
       $_SESSION['civil']++;
    }
    if($ch=="humanity"){
        $$_SESSION['humanity']++;

    }if($ch=="commerce"){
        $_SESSION['commerce']++;
    }
    if($ch=="technical"){
        $_SESSION['technical']++;
    }
    if($ch=="management"){
       $_SESSION['management']++;
    }
    if($ch=="med_sci"){
        $$_SESSION['med_sci']++;

    }if($ch=="space"){
        $_SESSION['space']++;
    }
    
       header('location:career_test.php?qid='.$eid.'?q1="quiz"');

}

else{
$eid=@$_GET['value']+1;
  $ch =@$_GET['opt']; 
     if($ch=="bussiness"){
        $_SESSION['bussiness']++;
    }
    if($ch=="civil"){
       $_SESSION['civil']++;
    }
    if($ch=="humanity"){
        $$_SESSION['humanity']++;

    }if($ch=="commerce"){
        $_SESSION['commerce']++;
    }
    if($ch=="technical"){
        $_SESSION['technical']++;
    }
    if($ch=="management"){
       $_SESSION['management']++;
    }
    if($ch=="med_sci"){
        $$_SESSION['med_sci']++;

    }if($ch=="space"){
        $_SESSION['space']++;
    }
header('location:career_test.php?qid='.$eid.'?q1="quiz"');
}


 if(isset($_GET['final_submit'])){
     if(isset($_GET['bussiness'])){
    $_SESSION['bussiness']++;
}
     
     if(isset($_GET['civil'])){
     $_SESSION['civil']++;    
         
     }
     
     if(isset($_GET['commerce'])){
    $_SESSION['commerce']++;
}
     
     if(isset($_GET['humanity'])){
     $_SESSION['humanity']++;    
         
     }
     
     
     if(isset($_GET['mgt'])){
    $_SESSION['management']++;
}
     
     if(isset($_GET['tech'])){
     $_SESSION['technical']++;    
         
     }
     
     if(isset($_GET['space'])){
    $_SESSION['space']++;
}
     
     if(isset($_GET['med_sci'])){
     $_SESSION['med_sci']++;    
         
     }
     $_SESSION['quiz_p2']=1;

header("location:dashboard.php");
 }       
        
?>