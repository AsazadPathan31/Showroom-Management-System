<?php

	
extract($_POST);

session_start();
if(isset($_SESSION["uid"]))
{

		header("location:./employee/empindex.php");

}

if(isset($lbtn))
{


$qry=mysqli_query($connect,"SELECT * FROM `tb_employee` WHERE `emp_email`='$eid' and `emp_password`='$pass'");



$row=mysqli_num_rows($qry);

if($row>0)
{
$d=mysqli_fetch_assoc($qry);
	session_start();

	$_SESSION["uid"]=$d["emp_id"];

	header("location:./employee/empindex.php");



}

else{
?><script>alert("Failed ");</script><?php
}


}




?>


<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<div class="container" style="margin-top: 50px; margin-bottom: 120px;">

<div class="row">

	<div class="col-md-4">
	</div>


	<div class="col-md-4">
	
		<div class="card">

		  <div class="card-header">
		    <h5 id="elog">Employee Login  <i class="fa fa-lock"></i></h5>
		  </div>

		  <div class="card-body">

		  	<form method="post">

		  		<div class="form-group">

		  		<input type="email" class="form-control" placeholder="EMAIL-ID" required  name="eid">

		  		</div>


		  		<div class="form-group">

		  		<input type="password" class="form-control" placeholder="PASSWORD" required name="pass">

		  		</div>


		  		<div class="form-group">

		  			<a href="./employee/forgetpwd.php">Forget Password?</a>
		  		
		  		</div>

		  		<div class="form-group">
		  		<?php
            if(!isset($_SESSION["g-recaptcha"]))
            {
              echo '
                <di class="form-group" style="width:100%;">
                  <div class="g-recaptcha" data-sitekey="6LevO1IUAAAAAFX5PpmtEoCxwae-I8cCQrbhTfM6"></div>
                </di>
              ';
            }
            else
          ?>

      </div>

		

		  </div>


		   <div class="card-footer">

		   	<div class="form-group">

		  		<input type="submit" value="LOGIN" class="form-control btn btn-success" name="lbtn">
  	</form>
		  		</div>


		  </div>

		</div>

	</div>
	<div class="col-md-4">
	</div>

</div>

	</div>

</body>
</html>