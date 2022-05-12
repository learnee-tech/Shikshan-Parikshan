

<?php

session_start();
session_unset();
session_destroy();
$_SESSION['quiz_p2']=0;
$_SESSION['quiz_p1']=0;
$to = 'mohitvasudev15@gmail.com'; 
$from = 'ruturaj.vasudev@walchandsangli.ac.in'; 
$fromName = 'SenderName'; 
 
$subject = "Send HTML Email in PHP by CodexWorld"; 
$htmlContent = file_get_contents("final_report.php");

 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers .= 'Cc: welcome@example.com' . "\r\n"; 
$headers .= 'Bcc: welcome2@example.com' . "\r\n"; 
 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
    echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}

?>