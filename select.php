<?php
include('connection.php');
?>

<table border='1' width='100%'>
	<tr>
		<th>ID</th>
		<th>USERNAME</th>
		<th>FULLNAME</th>
		<th>ADDRESS</th>
		<th>EMAIL</th>
		<th>PHONE</th>
		<th>PASSWORD</th>
		<th>REPASSWORD</th>
	</tr>
<?php
$res=mysqli_query($con,"select * from customer");
while($row=mysqli_fetch_array($res))
{
	?>

<tr>
<td><?php echo $row['cusid'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['fullname'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['repassword'];?></td>
</tr>
<?php
}
?>
