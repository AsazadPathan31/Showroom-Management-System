<?php 

$name=$_SESSION["uid"];



$r=mysqli_query($connect,"select * from tb_bikes where emp_id='$name'");

$d=mysqli_num_rows($r);

$f=mysqli_fetch_assoc($r);

$nm=$f["b_name"];

$r1=mysqli_query($connect,"select * from tbgallery where name='$nm'");

$j=mysqli_num_rows($r1);


$r2=mysqli_query($connect,"select * from tb_bill where emp_id='$name'");

$jl=mysqli_num_rows($r2);










?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
	<style>

	#deo{

		margin:80px;
		color: red;
		font-family:roboto;
	}
	
	</style>

</head>
<body>

	<div class="container">

		<div class="row">

	

				<h3 id="deo">	NUMBER OF BIKE ADDED: <?php echo($d)?></h3>

				</h3>

				<h3 id="deo">	NUMBER OF SCREEN SHOTS ADDED: <?php echo($j)?></h3>

				</h3>

				<h3 id="deo">	NUMBER OF BIKES CUSTOMAR PURCHASE: <?php echo($jl)?></h3>

				</h3>

				





		</div>


	</div>

</body>
</html>