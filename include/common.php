<!DOCTYPE html>
<html>
<head>
	<title>connection</title>
</head>
<body>
<?php 
$con=mysqli_connect("localhost","root","123456","prudent") or die(mysqli_error($con)); 
session_start();
// $_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);
 ?>
</body>
</html>