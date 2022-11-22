<?php
include('connection.php');
if(isset($_POST['submit']))
{
	$username=$_POST['name'];
	$fullname=$_POST['fname'];
	$address=$_POST['address'];
	$email=$_POST['mail'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
		$repassword=$_POST['password'];
	$res=mysqli_query($con,"insert into customer (username,fullname,address,email,phone,password,repassword)value('$username','$fullname','$address','$email','$mobile','$password','$repassword')");

	header('location:customer.php?yes=1');
}
?>

