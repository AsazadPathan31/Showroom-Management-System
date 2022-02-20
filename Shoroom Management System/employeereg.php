<?php

extract($_POST);




if(isset($regbtn))
{
	
	$q=mysqli_query($connect,"SELECT `emp_email` FROM `tb_employee` WHERE `emp_email`='$eid'");
	 

	 
	 if(mysqli_num_rows($q)==0)
	 {


		$qry=mysqli_query($connect,"INSERT INTO `tb_employee`(`emp_id`, `emp_name`, `emp_address`, `emp_mobile`, `emp_email`, `emp_password`, `emp_salary`,`emp_designation`) VALUES ('NULL','$nm','$ad','$mob','$eid','$pass','$sal','$deg')");

			if($qry)
			{
				$suc='<div class="alert alert-success alert-dismissible">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Success!</strong> Registration
		  </div>';
			}

		
		

	}
		else{

			$fail='<div class="alert alert-danger alert-dismissible">
	    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	    <strong>Already Register!</strong>
	  </div>';
		}

}

?>

<!DOCTYPE html>
<html>
<head>
	  

	<link href="css/indexstyle.css" rel=stylesheet>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>

	<div class="container" id="conm">

		<div class="row">


			<div class="col-md-3"></div>

			<div class="col-md-6">
				

					<h2 id="eh">
						Employee Registration Form
					</h2>


					<div>

						<?php 

						echo(@$suc);

						echo(@$fail);


						?>

					</div>


			<form method ="post">


				<div class="form-group">
				
					<h5 id="lb">Employee Name</h5><input type="text" required class="form-control" placeholder="Enter the Name" name="nm" id="in">


				</div>



				<div class="form-group">
				
					<h5 id="lb">Employee Address</h5>

					<textarea class="form-control" rows="4" required name="ad" id="in">



					</textarea>

				</div>


				<div class="form-group">
				
					<h5 id="lb">Employee Mobile</h5><input type="numberic" maxlength="10" required class="form-control" placeholder="Enter the Mobile" name="mob" id="in">


				</div>


				<div class="form-group">
				
					<h5 id="lb">Employee Email</h5><input type="email" required class="form-control" placeholder="Enter the Email-ID" name="eid" id="in">


				</div>


				<div class="form-group">
				
					<h5 id="lb">Password</h5><input type="password" required class="form-control" placeholder="*******" name="pass" id="in">


				</div>


				<div class="form-group">
				
					<h5 id="lb">Employee Salary</h5><input type="numberic" required class="form-control" placeholder="Enter the Salary" name="sal" id="in">


				</div>

				<div class="form-group">
				
					<h5 id="lb">Employee Designation</h5><input type="text" required class="form-control" placeholder="Enter the Designation" name="deg" id="in">


				</div>








				<div class="form-group">

						<input type="submit" value="Register" class="btn btn-success" name="regbtn" style="margin-bottom:100px">



				</div>


			</form>





			</div>

			<div class="col-md-3"></div>


		</div>



	</div>

</body>
</html>