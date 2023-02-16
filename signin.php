<?php
include_once('db.php');
if(isset($_POST)){
 $pusername=$_POST['pusername'];
 $ppassword=$_POST['ppassword'];
 $sql=mysqli_query($conn,"SELECT * FROM signup_tb WHERE lpassword='$ppassword'") or die (mysqli_error($conn));
 while($row=mysqli_fetch_array($sql)){
 	$user=$row['lusername'];
 	$pass=$row['lpassword'];


 }
 if($pass==$ppassword){
 	header('location:success.php');
 }
 else{
 	header('location:failed.php');
 }
}

?>
