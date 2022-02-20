<?php 

$sc=$_SESSION['uid'];




$qr=mysqli_query($connect,"select * from tb_bill where emp_id='$sc'");





?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div class="container">

		<div class="row" style="margin:80px;">

			<div class="col-md-8">

				<h1> View Purchase</h1>

				<br><br><br>


				<table class="table">

					<tr> 

						<th>Bill Number</th>

						<th>Customer Name</th>

						<th>Bike Quality</th>

						<th>Prize</th>

						<th> Date</th>

					</tr>

					<?php while($d=mysqli_fetch_assoc($qr))
					{?>
						<tr>

							<td><?php echo($d["bill_no"])?> </td>

							<td><?php echo($d["cust_name"])?> </td>

							<td><?php echo($d["quality"])?> </td>
							
							<td><?php echo($d["prize"])?> </td>

							<td><?php echo($d["date"])?> </td>

						</tr>


					<?php }?>



				</table>


			</div>

			<div class="col-md-4"></div>

		</div>

	</div>

</body>
</html>