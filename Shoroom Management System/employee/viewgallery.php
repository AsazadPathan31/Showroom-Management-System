<?php 
	include("../dbconnect.php");

	extract($_POST);

	$uid=$_SESSION['uid'];

	$qry2=mysqli_query($connect,"select b_name from tb_bikes where emp_id='$uid'");


?>

<?php 

	if(isset($srchbtn))
	{


	$qry=mysqli_query($connect,"select * from tbgallery where name='$selopt'");

	
	}




?>

<!DOCTYPE html>
<html>
<head>
	
	<title>View Album</title>
	<style>

	#proghd
	{
		color: #ba566a;
		text-shadow:2px 2px lightblue;
	}

	#srch{

		margin-top: 50px;
		margin-bottom: 50px;

	}

</style>
</head>
<body>

	<div class="container" id="srch">

		<div class="row">

			<div class="col-md-2">

			</div>

			<div class="col-md-6">


				<form method="post">

			<div class="form-group">

				<select class="form-control" name="selopt">

					<option value=" ">Select</option>

					<?php 

						while($aldata=mysqli_fetch_assoc($qry2))
						{
							?><option value="<?php echo($aldata['b_name'])?>"><?php echo($aldata['b_name'])?></option><?php
						}

					?>

					

				</select>

			</div>

			<div class="form-group">

				<input type="submit" value ='Search' name="srchbtn" class="btn btn-success">

			</div>

		</form>


			</div>

			<div class="col-md-4">

			</div>
		</div>

	</div>


<?php 

if(isset($srchbtn))
{
	?>

	<div class="container" id="seccon">

		<div class="row">

			<div class="col-md-10">

		<div class="card">

			<div class="card-header">

					<h3 id="proghd"> View ScreenShorts </h3>
			</div>


			<div class="card-body">

					<table class="table table-bordered table-hover">


						<tr>

							

							<th>Images</th>

							<th>Action (Delete)</th>

						</tr>

						<?php

							while($data=mysqli_fetch_assoc($qry))
							{
								?>
								<tr>
									
															

									<td><img src="<?php echo($uid)?>/gallery/<?php echo ($data['name']);?>/<?php echo ($data['image']);?>" alt="F" width="80px" height="80px" style="border-radius:10px;" ></td>

									<td style="padding-top:20px;">

										<a href="deletegal.php?id=<?php echo($data['id'])?>">Delete</a> 


									

										

									</td>

								</tr>
									<?php
							}

						?>

					</table>

				</div>


				

				
		



</div>
</div>
<div class="col-md-2"></div>
</div>
</div>

<?php

}
?>

</body>
</html>