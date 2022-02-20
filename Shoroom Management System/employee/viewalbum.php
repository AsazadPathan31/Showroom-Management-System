<?php 

	include("../dbconnect.php");


	$uid=$_SESSION['uid'];


	$qry=mysqli_query($connect,"select * from tb_bikes where emp_id='$uid'");






?>


<!DOCTYPE html>
<html>
<head>
	<title>View Album</title>
	<style>

	#proghd
	{
		color:#779c48;
		text-shadow:2px 2px lightblue;
	}

</style>


</head>
<body>

	<div class="container" id="seccon">

		<div class="row">

			<div class="col-md-10">

		<div class="card">

			<div class="card-header">

					<h3 id="proghd"> View Bike </h3>
			</div>


			<div class="card-body">

					<table class="table table-bordered table-hover">


						<tr>

							<th>Bike Name</th>

							<th >Bike Prize</th>

							<th>Images</th>

							<th>Action (Delete & Edit)</th>

						</tr>

						<?php

						if(mysqli_num_rows($qry)>0)

						{

							while($data=mysqli_fetch_assoc($qry))
							{
								?>
								<tr>
									
									<td><?php echo($data['b_name'])?></td>

									<td ><?php echo($data['b_prize'])?></td>

									<td><img src="<?php echo($uid)?>/albums/<?php echo ($data['b_image']);?>" alt="F" width="100px" height="80px" style="border-radius:10px;" ></td>

									<td style="padding-top:20px;">

										<a href="deletealb.php?name=<?php echo($data['b_name'])?>">Delete</a> |


										<a href="editalb.php?id=<?php echo($data['b_id'])?>">Edit</a>

										

									</td>

								</tr>
									<?php
							}
						}

						else{
							echo("no data");
						}

						?>




					</table>

				</div>


				

				
		



</div>

</div>

<div class="col-md-2"></div>

</div>


</body>
</html>