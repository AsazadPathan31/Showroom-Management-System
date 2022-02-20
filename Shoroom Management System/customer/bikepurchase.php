<?php 



$id=$_SESSION["uid"];

$t=mysqli_query($connect,"select * from tb_customer where cust_id='$id'");

$ft=mysqli_fetch_assoc($t);

$nm=$ft["cust_name"];


$final=mysqli_query($connect,"select * from tb_bill where cust_name='$nm'");





?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bike Parchase</title>
</head>
<body>

	<div class="container">

		<div class="row" style="margin-top:80px; margin-left:50px;">


			<div class="col-md-8">

				<table class="table table-bordered">

					<tr>

						<th>Bill Number</th>
						<th>Quality</th>
						<th>Prize</th>
						<th>Ordered</th>

					</tr>

					<?php while($ff=mysqli_fetch_assoc($final))
					{ ?>

						<tr>
							<td><?php echo($ff["bill_no"])?></td>

							<td><?php echo($ff["quality"])?></td>

							<td><?php echo($ff["prize"])?></td>

							<td>
									<a href="deleteparchase.php?id=<?php echo($ff["bill_no"]);?>"><i class="fa fa-close" style="color:red;font-size:20px;"></i> </a>


							</td>


						<?php } ?>
				

				</table>

			<div class="col-md-4">
			</div>


		</div>



	</div>

</body>
</html>