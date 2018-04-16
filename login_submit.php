<?php 
require 'include/common.php';
 ?>
 <?php 
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$select_query="SELECT email FROM user";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows_fetched=mysqli_num_rows($select_query_result);
if ($total_rows_fetched==0) {

	echo "no user with the email and password";
} else {
	$row=mysqli_fetch_array($select_query_result);
	session_start();
	$_SESSION ['email']=$email;
	$_SESSION ['id']=mysqli_insert_id($con);
	header('location: home.php');
}

  ?>