<?php 

$name=$_SESSION["uid"];



$r=mysqli_query($connect,"select * from tb_customer where cust_id='$name'");

$f=mysqli_fetch_assoc($r);

$nm=$f["cust_name"];

$r=mysqli_query($connect,"select * from tb_bill where cust_name='$nm'");

$d=mysqli_num_rows($r);

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

	

				<h3 id="deo">	NUMBER OF PURCHASE BIKE: <?php echo($d)?></h2>

				





		</div>


	</div>

</body>
</html>