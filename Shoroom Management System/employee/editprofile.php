<?php

	
	extract($_POST);

	$uid=$_SESSION['uid'];

	$qry=mysqli_query($connect,"select * from tb_employee where emp_id='$uid'");

	$data=mysqli_fetch_assoc($qry);

	if(isset($save))
	{
		$df=mysqli_query($connect,"update tb_employee set emp_address='$ea',emp_mobile='$em',emp_salary='$es',emp_designation='$ed' where emp_id='$uid'");

		if($df)
		{

				$suc='<div class="alert alert-success alert-dismissible">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Success!</strong> Update
		  </div>';

		}

		else{

				$fil='<div class="alert alert-danger alert-dismissible">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Failed!</strong> Update
		  </div>';

		}

	}




?>

<!DOCTYPE html>
<html>
<head>
	<style>

		#ep{

			color: #f28202;
		}

	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div class="container">

		<div class="row">


			<div class="col-md-1"></div>

			<div class="col-md-8">


			<h2 id="ep"><i class="fa fa-edit"></i> Edit Profile</h2>


			<div class="form-group">

				<?php

					echo(@$suc);

					
					echo(@$fil);


				?>


			</div>

			<form method="post">
	
		<div class="form-group">

			<h4>Address</h4><input type="text" value="<?php echo($data["emp_address"])?>" class="form-control" name="ea">

		</div>


			<div class="form-group">

			<h4>Mobile</h4><input type="text" value="<?php echo($data["emp_mobile"])?>" class="form-control" name="em">

		</div>


			<div class="form-group">

			<h4>Salary</h4><input type="text" value="<?php echo($data["emp_salary"])?>" class="form-control" name="es">

		</div>


			<div class="form-group">

			<h4>Designation</h4><input type="text" value="<?php echo($data["emp_designation"])?>" class="form-control" name="ed">

		</div>


		<div class="form-group">

			<input type="submit" value="Update Details" class="btn btn-outline-success" name="save">

		</div>
	</form>

	</div>

	<div class="col-md-3"></div>

</div>






	</div>


</body>
</html>