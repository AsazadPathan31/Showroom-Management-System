<?php

extract($_POST);




if(isset($regbtn))
{

	$q=mysqli_query($connect,"SELECT `cust_email` FROM `tb_customer` WHERE `cust_email`='$eid'");
	 
	 
	 if(mysqli_num_rows($q)==0)
	 {

		
		$qry=mysqli_query($connect,"INSERT INTO `tb_customer`(`cust_id`, `cust_name`, `cust_address`, `cust_mobile`, `cust_email`,`cust_password`, `cust_state`) VALUES ('NULL','$nm','$ad','$mob','$eid','$pass','$state')");

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

	<div class="container">

		<div class="row">


			<div class="col-md-3"></div>

			<div class="col-md-6">
				

					<h2 id="cr">
						Customer Registration Form
					</h2>


					<div>

						<?php 

						echo(@$suc);

						echo(@$fail);


						?>

					</div>


			<form method ="post">


				<div class="form-group">
				
					<h5 id="clb">Customer Name</h5><input type="text" required class="form-control" placeholder="Enter the Name" name="nm" id="cinput">


				</div>



				<div class="form-group">
				
					<h5 id="clb">Customer Address</h5>

					<textarea class="form-control" rows="6" required name="ad" id="cinput">



					</textarea>

				</div>


				<div class="form-group">
				
					<h5 id="clb">Customer Mobile</h5><input type="numberic" maxlength="10" required class="form-control" placeholder="Enter the Mobile" name="mob" id="cinput">


				</div>


				<div class="form-group">
				
					<h5 id="clb">Customer Email</h5><input type="email" required class="form-control" placeholder="Enter the Email-ID" name="eid" id="cinput">


				</div>

				<div class="form-group">
				
					<h5 id="clb">Password</h5><input type="password" required class="form-control" placeholder="*********" name="pass" id="cinput">


				</div>


				<div class="form-group">
				
					<h5 id="clb"> State</h5>


				<select name="state" class="form-control" required id="cinput">

					<option readonly disabled selected>Select</option>

				<option value="Andhra Pradesh">Andhra Pradesh</option>
				<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
				<option value="Arunachal Pradesh">Arunachal Pradesh</option>
				<option value="Assam">Assam</option>
				<option value="Bihar">Bihar</option>
				<option value="Chandigarh">Chandigarh</option>
				<option value="Chhattisgarh">Chhattisgarh</option>
				<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
				<option value="Daman and Diu">Daman and Diu</option>
				<option value="Delhi">Delhi</option>
				<option value="Lakshadweep">Lakshadweep</option>
				<option value="Puducherry">Puducherry</option>
				<option value="Goa">Goa</option>
				<option value="Gujarat">Gujarat</option>
				<option value="Haryana">Haryana</option>
				<option value="Himachal Pradesh">Himachal Pradesh</option>
				<option value="Jammu and Kashmir">Jammu and Kashmir</option>
				<option value="Jharkhand">Jharkhand</option>
				<option value="Karnataka">Karnataka</option>
				<option value="Kerala">Kerala</option>
				<option value="Madhya Pradesh">Madhya Pradesh</option>
				<option value="Maharashtra">Maharashtra</option>
				<option value="Manipur">Manipur</option>
				<option value="Meghalaya">Meghalaya</option>
				<option value="Mizoram">Mizoram</option>
				<option value="Nagaland">Nagaland</option>
				<option value="Odisha">Odisha</option>
				<option value="Punjab">Punjab</option>
				<option value="Rajasthan">Rajasthan</option>
				<option value="Sikkim">Sikkim</option>
				<option value="Tamil Nadu">Tamil Nadu</option>
				<option value="Telangana">Telangana</option>
				<option value="Tripura">Tripura</option>
				<option value="Uttar Pradesh">Uttar Pradesh</option>
				<option value="Uttarakhand">Uttarakhand</option>
				<option value="West Bengal">West Bengal</option>
				</select>





				</div>


				<div class="form-group" style="padding-bottom:100px;">

						<input type="submit" value="Register" class="btn btn-success" name="regbtn">



				</div>


			</form>





			</div>

			<div class="col-md-3"></div>


		</div>



	</div>

</body>
</html>