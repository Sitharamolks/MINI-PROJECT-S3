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

<body><style type="text/css">
	.f
	{
		color: red;
		font-size: 160%;
		padding: 75px 60px;
	}
</style>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">SALES PREDICTION OUTPUT</h2></div>
                    <div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                        <BR><BR>
                                        <BR>
                                        <BR>
 <?php
if(isset($_POST['Submit']))
		 {
			# echo "<h2>OUTPUT</h2>";

			$item=$_POST['item'];
			$item_weight=$_POST['item_weight'];
			$fat_content=$_POST['fat_content'];
			$item_visibility=$_POST['item_visibility'];
			$item_type=$_POST['item_type'];
			$item_mrp=$_POST['item_mrp'];
			$outlet=$_POST['outlet'];
			$year=$_POST['Outlet_Establishment_Year'];
			$outlet_size=$_POST['outlet_size'];
			$outlet_loc=$_POST['outlet_loc'];
			$outlet_type=$_POST['outlet_type'];
			//$test=array($item,$item_weight,$fat_content,$item_visibility,$item_type,$item_mrp,$outlet,$year,$outlet_size,$outlet_loc,$outlet_type);
			//$test_str = implode(" ",$test);
			$head="Item_Identifier,Item_Weight,Item_Fat_Content,Item_Visibility,Item_Type,Item_MRP,Outlet_Identifier,Outlet_Establishment_Year,Outlet_Size,Outlet_Location_Type,Outlet_Type"."\n";
			$val=$item.",".$item_weight.",".$fat_content.",".$item_visibility.",".$item_type.",".$item_mrp.",".$outlet.",".$year.",".$outlet_size.",".$outlet_loc.",".$outlet_type;
			$myfile = fopen("input.csv","w") or die("Unable to open file!");
			fwrite($myfile, $head.$val);
			fclose($myfile);

			
			$python=`python test.py`;
			$myfile = fopen("out.txt", "r") or die("Unable to open file!");
			$out = fread($myfile,filesize("out.txt"));
			fclose($myfile);
			echo "<div class='f'>$out</div>";
			
			//$file = file_get_contents('out.txt', true);
			//echo "<h3>".$file."</h3>";
			  
	
		 }
?>
<BR><BR><BR></div></div></div></div></div></div></div></body></html>

  