<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>inputpage</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<BODY>
	<style type="text/css">
		.p
		{
			margin-left: 90px;
		}
		.pp
		{
			color:white;
			background-color: #4CAF50;
			padding: 15PX 22PX;
			font-size: 13PX;
			border-radius: 4%;

		}
	</style>


<?php include('header.php'); ?>	



	



    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">CUSTOMER REGISTRATION</h2>


</div>

	<h3 align="center"></h3>
<div class="contact-form form">

	<form action='customer_insert.php' method='post'>

		<table align="center" class="p">
			<tr>
				<td><b>USERNAME</td>
				<td>
					<input type="text" name="name" required>
				</td>
			</tr>
			<tr>
				<td><b>LASTNAME</td><td><input type="text" name="fname" pattern="[a-z]" required></td>
			</tr>
			<tr>
				<td><b>ADDRESS</td><td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td><b>EMAIL</td><td><input type="email" name="mail" required></td>
			</tr>
			<tr>
				<td><b>MOBILE NO</td><td><input type="text" name="mobile" pattern="[56789][0-9]{9}" title="mobile start with 56789 followed by 10 digits" required></td>
			</tr>
			<tr>
				<td><b>PASSWORD</td><td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td><b>RE-ENETER PASSWORD</td><td><input type="password" name="repassword" required></td>
			</tr>
			<BR><BR>
			<tr>
				<td></td><td><BR><BR>
					<input type="submit" value="SUBMIT" name='submit'class="pp">
				</td>
			</tr>
		</table>
		<BR>
		<BR>
	</form>

</div>
</div>
</div>
</div>
</div>

	<?php
			include('footer.php');
		?>