<?php
include_once('db.php');
if(isset($_POST)){
 $sname=$_POST['yname'];
 $semail=$_POST['yemail'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];
 mysqli_query($conn,"INSERT INTO email_tb (yname,yemail,subject,message)VALUES('$sname','$semail','$subject','$message')") or die (mysqli_error($conn));

}

?>
