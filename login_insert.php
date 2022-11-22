<?php
include('connection.php');

$u=$_POST['name'];

$p=$_POST['pass'];

$res=mysqli_query($con,"select * from customer WHERE username='$u' and password='$p'");
$cc=mysqli_num_rows($res);

if($cc==1)
{
	$row=mysqli_fetch_array($res);
	session_start();
	$_SESSION['user']=$row['cusid'];
	header('location:welcome.php?yes=1');

}
else
{

 header('location:index.php?loginfailed=1');

	 echo '<font color="red" size="4">LOGIN FAILD!...</font>';
	
}


?>

	