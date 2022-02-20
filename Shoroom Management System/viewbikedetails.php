<?php
$name=$_GET["id"];

include("dbconnect.php");

$qr=mysqli_query($connect,"select * from tbgallery where name='$name'");



$qr1=mysqli_query($connect,"select * from tb_bikes where b_name='$name'");

$d2=mysqli_fetch_assoc($qr1);

$ep=$d2["emp_id"];



?>

<!DOCTYPE html>
<html>
<head>
	<style>

		#mds{

			margin-top:70px;
			border-radius:10px;

		}

		#mds:hover{

						

			box-shadow:2px 2px 2px 2px gray;

		}

		#rs
		{
			color: #c41b51;
		}



	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Details</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">

		<div  class="row" style="margin-bottom:80px;">

	

			<div class="col-md-6">


				<img src="employee/<?php echo($d2['emp_id'])?>/albums/<?php echo($d2['b_image']);?>" id="mds" width=500px height=500px>

			</div>

			<div class="col-md-6" style="margin-top: 80px;">

				<table class="table">

						<tr>
									
							<th>Bike Name</th>
							<td><?php echo($d2["b_name"]);?></td>
						</tr>
						<tr>
								<th>Bike Color</th>
							<td><?php echo($d2["b_color"]);?></td>
						</tr>
							<tr>
								<th>Bike Quality</th>
							<td><?php echo($d2["b_quality"]);?></td>

						</tr>

						<tr>
								<th>Bike Rating</th>
							<td style="color:#ebb931"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
</td>

						</tr>

						<tr>		
							<td></td>		
								<td>
								
	<button class="button btn btn-warning" data-toggle="modal" data-target="#mymodal" style="box-shadow:2px 2px 2px 2px gray ; font-weight:bold;">Purchase</button>

						</tr>


				</table>


			</div>


		</div>

		<h2 id="rs"> Related ScreenShots</h2>

		
		<?php

		while($dt=mysqli_fetch_assoc($qr))
		{
		?>
	<img src="employee/<?php echo($d2['emp_id'])?>/gallery/<?php echo($dt['name'])?>/<?php echo($dt['image']);?>" id="<?php echo($data['id']);?>" width=180px height=180px style="padding:12px; border-radius:4px;">

<?php }

?>	


<?php

extract($_POST);

if(isset($pbtn))
{
	$ch=mysqli_query($connect,"select * from tb_customer where cust_name='$cn'");
	$rows=mysqli_num_rows($ch);

	if($rows>0)
	{	

		$myqr=mysqli_query($connect,"insert into tb_bill values('NULl','$ep','$cn','$bq','$bp',now())");

		if($myqr)
		{
			?><script>
				
				alert("Congratulation You have Successfully Purchase the Bike");

				window.location.href="index.php?info=cuslog";

			</script><?php

		}
		else{
			?><script>
				
				alert("Failed Due to Technical Issue.. Try After Some Times");

			</script><?php
		}
	}

	else{

			?><script>
				
				alert("You Have Not Register Your Name Try to Register and then try it out OR You have NOT not Return Your name as per Registeration");

				window.location.href="index.php?info=registration";

			</script><?php

	}

}


?>

<div class="modal" id="mymodal">

				<div class="modal-dialog modal-md modal-dialog-centered">

					<div class="modal-content">

						<div class="modal-header">
						<h4>Purchase Details</h4>
					<button class="close" data-dismiss="modal">&times</button>
				
						</div>


						<div class="modal-body">

							<form method="post">

					<div class="form-group">

 Customer Name	<input type="text" class="form-control" name="cn" placeholder="Mention as Per Registration" required> 

									
								
					</div>


					<div class="form-group">

 Quality<input type="text" class="form-control" name="bq" value="<?php echo($d2["b_quality"])?>" readonly>

									
								
					</div>


					<div class="form-group">

 Prize	<input type="text" class="form-control" name="bp" value="<?php echo($d2["b_prize"])?>" readonly>

									
								
					</div>






						</div>

						<div class="modal-footer">

								<div class="form-group">
							
							<input type="submit" class="btn btn-danger" value="Purchase" name="pbtn">
									

					</div>


							</form>

						</div>

					

				</div>
				
			</div>

		</div>




	</div>

</body>
</html>