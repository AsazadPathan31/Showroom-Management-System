<?php

	
extract($_POST);

include("../dbconnect.php");

if(isset($save))
{


$qry=mysqli_query($connect,"SELECT * FROM `tb_employee` WHERE `emp_email`='$eid' and `emp_mobile`='$mob'");



$row=mysqli_num_rows($qry);

if($row>0)
{



	$d=mysqli_fetch_assoc($qry);


	?><script>alert("PASSWORD IS <?php echo($d["emp_password"])?>");

	window.location.href="../index.php?info=emplog";

	</script>

<?php

}

else{
?><script>alert("Invalid Details");</script><?php
}


}




?>


<!DOCTYPE html>
<html>
<head>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<div class="container" style="margin-top: 50px; margin-bottom: 120px;">

<div class="row">



		<div class="col-md-3">
		</div>

		<div class="col-md-6">

			<form method="post">

				<h4> Forget Password</h4>


			<div class="form-group">

				<h5 style="font-weight:bold">Email</h5> <input type="email" required placeholder="Email-ID" name="eid" class="form-control">

			</div>
			<div class="form-group">

				<h5 style="font-weight:bold">Mobile Number</h5> <input type="numberic" required placeholder="Mobile" name="mob" class="form-control">

			</div>
			<div class="form-group">

				<input type="submit" name="save" value="Get Password" required class="btn btn-danger">
			</form>
			</div>
	</div>

	<div class="col-md-3">
	</div>
	
		
		  		



	

</div>

	</div>

</body>
</html>