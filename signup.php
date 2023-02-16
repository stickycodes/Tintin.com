<?php
include_once('db.php');
if(isset($_POST)){
 $sname=$_POST['lname'];
 $dob=$_POST['ldob'];
 $country=$_POST['lcountry'];
 $sorigin=$_POST['lsorigin'];
 $weight=$_POST['lweight'];
 $height=$_POST['lheight'];
 $gender=$_POST['lgender'];
 $email=$_POST['lemail'];
 $username=$_POST['lusername'];
 $password=$_POST['lpassword'];
 $retype=$_POST['lretype'];
 mysqli_query($conn,"INSERT INTO signup_tb (lname,ldob,lcountry,lsorigin,lweight,lheight,lgender,lemail,lusername,lpassword,lretype)VALUES('$sname','$dob','$country','$sorigin','$weight','$height','$gender','$email','$username','$password','$retype')") or die (mysqli_error($conn));

}

?>
