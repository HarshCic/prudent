<?php 
require 'include/common.php';
 ?>
<?php 
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$password=$_POST['password'];
$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);
$select_query="SELECT email FROM prudent.user";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows_fetched=mysqli_num_rows($select_query_result);
// if ($total_rows_fetched>0) {
// 	echo "email id already exists";
// 	# code...
// }
// else {
$user_registration_query="insert into user(name,email,contact,password) values ('$name','$email','$contact','$password')" or die($user_registration_query);
	$user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
	// session_start();
	// $_SESSION ['email']=$email;
	// $_SESSION ['id']=mysqli_inert_id($con);
	header('location: login.php');
// }
 ?>
 