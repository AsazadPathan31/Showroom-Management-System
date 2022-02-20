<?php

	include("../dbconnect.php");


	$uid=$_SESSION['uid'];


	extract($_POST);

	if(isset($albtn))

	{



		if (!file_exists($uid.'/'."albums")) {
    mkdir($uid.'/'."albums",0777,true);
}




			$files=$_FILES['alfile']['name'];

			$tmpname=$_FILES['alfile']['tmp_name'];

			$data=explode(".", "$files");

			$ext=end($data);//JPG

			$extstr=strtolower($ext);//jpg

			$arr=array('jpg','jpeg','png');


			if(in_array($ext,$arr))


			{

			move_uploaded_file($tmpname,"$uid/albums/$files");


			}
			else
			{

				?><script>alert("Invalid File Extension");

				</script><?php
					

			}

			

			$qry=mysqli_query($connect,"INSERT INTO `tb_bikes`(`b_id`,`emp_id`, `b_name`, `b_color`, `b_quality`, `b_prize`, `b_image`, `date`) VALUES ('NULL','$uid','$nm','$bc','$bq','$bp','$files',now())");

			if($qry)
			{
				$suc="<div class='alert alert-success alert-dismissible'>
				<button class='close' data-dismiss='alert'> &times;</button>Congratulation ! Successfully Album Added</div>";
			}
			else {
				$fai="<div class='alert alert-danger alert-dismissible'>
				<button class='close' data-dismiss='alert'> &times;</button>Sorry ! Failed To Add Album Try Again</div>";
			}

	}



?>


<!DOCTYPE html>
<html>
<head>


	<title>Add Bike</title>
</head>
<body>

	<div class="container">

		<div class="row">

			<div class="col-md-2">


			</div>


			<div class="col-md-7">

				<h4><?php

				echo(@$suc);
				echo(@$fai);

				?>



				</h4>


			</div>


			<div class="col-md-3">


			</div>

		</div>

	</div>


	<div class="container" id="seccon">


		<div class="row">

			<div class="col-md-2">

			</div>	


			<div class="col-md-7" id="coldes">

				

				<form method="post" enctype="multipart/form-data">

				

							

							<h3 id="titleaddalbum">Add BIKE</h3>

				

								<div class="form-group">


									<h4>Bike Name</h4> <input type="text" placeholder="Enter the Name" class="form-control" name="nm">

								</div>
					

								<div class="form-group">


									<h4>Bike Color</h4> <input type="text" placeholder="Enter the Color" class="form-control" name="bc">

								</div>
					


								<div class="form-group">


									<h4>Bike Quality</h4> <input type="text" placeholder="Enter the Quality" class="form-control" name="bq">

								</div>



								<div class="form-group">


									<h4>Bike Prize</h4> <input type="text" placeholder="Enter the Prize" class="form-control" name="bp">

								</div>

							

								
								

								<div class="form-group">
										
										<h4>Bike image</h4>


										<input type="file" name="alfile" class="form-control">

								</div>	


				

								


								<div class="form-group">
										
										<input type="submit" value="Add Album" name="albtn" class="btn btn-success">
										<input type="reset" value="Reset" class="btn btn-danger">

								</div>							

							

						



						</form>

						


						

					


			</div>

		


			<div class="col-md-3">

			</div>	

		
	</div>

</div>




</body>
</html>

