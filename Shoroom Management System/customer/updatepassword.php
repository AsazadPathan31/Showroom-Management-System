<?php

extract($_POST);



$uid=$_SESSION["uid"];


$q=mysqli_query($connect,"select * from tb_customer where cust_id='$uid'");

$f=mysqli_fetch_assoc($q);

$oldpwd=$f["cust_password"];

if(isset($save))
{
		if($oldpwd==$op)
		{

			if($crp==$cp)
			{

				$run=mysqli_query($connect,"update tb_customer set cust_password='$cp' where cust_id='$uid'");

				if($run)
				{
					$e='<div class="alert alert-success alert-dismissible">
				    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				    <strong>Success!</strong> Registration
				  </div>';
				}

			}


		else{

			?><script>alert("Current and Confirm Password didn't Match");</script><?php
		}



		}

		else{

			?><script>alert("Old Password Incorrect");</script><?php
		}

}
?>

<!DOCTYPE html>
<html>
<head>
	<style>

		#us{
			color: green;
		}
	
	</style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Password</title>
</head>
<body>

	<div class="container">


		<div class="row">

			<div class="col-md-2"></div>

			<div class="col-md-6">

				<h2 id="us"><i class="fa fa-pencil"></i> Update Password</h2><br><br>


				<div class="form-group">

					<?php echo(@$e);?>

				</div>

				<form method="post">
				
				<div class="form-group">

				<h4>Old Password</h4><input type="Password" placeholder="Enter old Password" class="form-control" name="op">

				</div>



				<h4>Create New Password</h4><div class="form-group">

				<input type="Password" placeholder="Enter old Password" class="form-control" name="crp">

				</div>



				<div class="form-group">

				<h4>Confirm Password</h4><input type="Password" placeholder="Enter old Password" class="form-control" name="cp">

				</div>


				<div class="form-group">

				<input type="submit" value="Update Password" class="btn btn-outline-primary" name="save">

				</div>
			</form>

			</div>


			<div class="col-md-4"></div>

			

		</div>

	</div>

</body>
</html>