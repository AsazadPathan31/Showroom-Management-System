<?php

	$id=$_GET['id'];

	session_start();

	$uid=$_SESSION['uid'];


	extract($_POST);

	include("../dbconnect.php");

	$qry=mysqli_query($connect,"select * from tb_bikes where b_id='$id'");

	$qry1=mysqli_query($connect,"select * from tb_bikes where b_id='$id'");


	$data=mysqli_fetch_assoc($qry);
	
	$data1=mysqli_fetch_assoc($qry1);

	$na=$data1['b_name'];



	if(isset($albtn))
		
	{		
		

		$alfile=$_FILES['alfile']['name'];

		$tmpname=$_FILES['alfile']['tmp_name'];

		$run=mysqli_query($connect,"UPDATE `tbgallery` SET `name`='$nm' WHERE name='$na'");



		if($alfile!='')
		{

			
			unlink( $uid."/albums" .'/'. $data['b_image']);
			
			

			move_uploaded_file($tmpname,"$uid/albums/$alfile");

			
			 


			if(mysqli_query($connect,"UPDATE `tb_bikes` SET `b_name`='$nm',`b_color`='$bc',`b_quality`='$bq', `b_prize`='$bp',`b_image`='$alfile',`date`=now() WHERE b_id='$id'"))
			{
				?><script>alert("Album is UPDATED Successfully!!");

				window.location.href="empindex.php?info=magbike";

			</script><?php
			}




			else
				{
					?><script>alert("Failed To UPDATE Album");

			</script><?php
				}

		}

		else{




			if(mysqli_query($connect,"UPDATE `tb_bikes` SET `b_name`='$nm',`b_color`='$bc',`b_quality`='$bq', `b_prize`='$bp',`date`=now() WHERE id='$id'"))
			{
				?><script>alert("Album is UPDATED Successfully!!!");

				window.location.href="empindex.php?info=magbike";

			</script><?php
			}

		}


		if($na!=$alname)
		{

		$path="/$uid/gallery/$na";
		
		

		rename(realpath(dirname(__FILE__))."$path",realpath(dirname(__FILE__))."/$uid/gallery/$alname");
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
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script
       src="https://code.jquery.com/jquery-3.6.0.min.js"
       integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
       	
       </script>
       <link href="../css/adminpagestyle.css" rel="stylesheet">


	<title>Edit Album</title>
</head>
<body>

	

	<div class="container" id="seccon">


		<div class="row">

			<div class="col-md-2">

			</div>	


			<div class="col-md-7" id="coldes">

				

				<form method="post" enctype="multipart/form-data">

				

							

							<h3 id="editabm">Edit Album</h3>

				

						

							

			<div class="form-group">
									
	<span id="addname">Bike Name</span>

	<input type="text" name="nm" value="<?php echo($data['b_name'])?>" class="form-control">

		</div>	


			<div class="form-group">
									
	<span id="addname">Bike Color</span>

	<input type="text" name="bc" value="<?php echo($data['b_color'])?>" class="form-control">

		</div>	




			<div class="form-group">
									
	<span id="addname">Bike Quality</span>

	<input type="text" name="bq" value="<?php echo($data['b_quality'])?>" class="form-control">

		</div>	




			<div class="form-group">
									
	<span id="addname">Bike Prize</span>

	<input type="text" name="bp" value="<?php echo($data['b_prize'])?>" class="form-control">

		</div>	



	



	<div class="form-group">


						<div class="form-group">

									<b>Would You Like to Update Bike Image ? </b><button class="btn btn-success" data-target="#opt" data-toggle="tab">Yes</button>

									<button class="btn btn-danger" data-target="#opt" data-toggle="collapse">No</button>
									
								</div>


	
							<div class="tab-content">

			<div class="form-group tab-pane collapse" id="opt">
										
					<span id="addname">Album image</span>


			<input type="file"  name="alfile" class="form-control">


								</div>	

							</div>

								


				<div class="form-group">
										
			<input type="submit" value="Update" name="albtn" class="btn btn-primary">

										

					</div>							


				</form>


			</div>


			<div class="col-md-3">

			</div>	

		
	</div>

</div>

</body>

</html>