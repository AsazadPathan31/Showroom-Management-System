<?php 

	include("../dbconnect.php");

	extract($_POST);

	$uid=$_SESSION['uid'];

	

	$qry=mysqli_query($connect,"select * from tb_bikes where emp_id='$uid'");


?>

<?php

if(isset($uploadbtn))

{


	$ct=count($_FILES['glfile']['name']);

	$falg=0;

if (!file_exists($uid.'/'."gallery".'/'. $selectopt)) {
    mkdir($uid.'/'."gallery".'/'. $selectopt,0777,true);
}

	for($i=0;$i<$ct;$i++)
	{

		$tmpname=$_FILES['glfile']['tmp_name'][$i];

		$orgname=$_FILES['glfile']['name'][$i];

		$org=$orgname;

		$slt=$selectopt;

	

		if(mysqli_query($connect,"INSERT INTO `tbgallery`(`id`, `name`, `image`, `date`) VALUES ('NULL','$slt','$org',now())"))

		{
			$flag=1;
		}


		move_uploaded_file($tmpname,"$uid/gallery/$selectopt/$orgname");

	}

	if($flag==1)
	{
		?>
			
		$suc="<div class='alert alert-success alert-dismissible'><button class='close' data-dismiss='alert'> &times;</button>Congratulation ! Successfully Album Added</div>";
	?><script>
			window.location.href="empindex.php?info=bss";
		</script>
		<?php
	}
	else
	{
		?><script>
			
			alert("Failed To Add Gallery!!");
			

		</script><?php
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Gallery</title>
</head>
<body>
<div class="container" id="seccon">


		<div class="row">

			<div class="col-md-3">
				<h4><?php

					echo(@$suc);

				?></h4>


			</div>	



			<div class="col-md-6" id="coldes">


				
	

							<form method="post" enctype="multipart/form-data">

								<div class="card" id="cardgly">

									<div class="card-header">
								
									<h3 id="addgly">Add Bikes Screenshort</h3>

									</div>

									<div class="card-body">

										<div class="form-group">

										<span id="glyname">Select Album Name</span>

											<select class="form-control"  name="selectopt" required>

												<option class="active">Select</option>

												<?php

													while($data=mysqli_fetch_assoc($qry))
													{
														?><option value="<?php echo($data['b_name'])?>"><?php echo($data['b_name'])?></option><?php
													}

												?>

											</select>



										</div>


										<div class="form-group">

										<span id="glyname">Gallery Image</span>

										<input type="file" name="glfile[]" multiple="multiple" class="form-control" required>

										</div>

									</div>


									<div class="card-footer">

										<div class="form-group">

											<input type="submit" name="uploadbtn" value="Add Gallery" class="form-control btn btn-warning">

										</div>

									</div>

							</form>

			</div>	


			<div class="col-md-3">

			</div>	

		
	</div>

</div>

</body>
</html>