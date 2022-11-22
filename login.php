<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<style>
.pp
		{
			color:white;
			background-color: #4CAF50;
			padding: 15PX 22PX;
			font-size: 13PX;
			border-radius: 4%;

		}
.cont
{
  position:relative; 
  right: -100px;
  margin: 16px;
  max-width: 300px;
  padding: 16px;
  float: bottom;
  background-color: white;
}

</style>
</head>
</html>

<?php include('header.php'); 
?>	


<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
<br><br>

            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">LOGIN</h2>


</div>




<div class="contact-form form">
<div class="container">
	<h1><center></h1></center>
	<div class="cont">
	<form action="login_insert.php" method="post" >
		<center>
	<table align="center">

			<table align="center">
<BR>
			<center>
			<tr>
				<td><b>Username  </td><td><input type="text" name="name" required></td>
			</tr><BR>
			
			<tr>
				<td><b>Password &nbsp;</td><td><input type="password" name="pass" required></td>
			</tr>
			<tr>
				<td></td><td>
					<BR>
			<BR><input type="submit" value="LOGIN" name='submit' class="pp"></td>
			</tr>
		</table>
				
			
	
	</form>

</div>
</div>
</div>
</div>
</div>

	<?php
			include('footer.php');
		?>