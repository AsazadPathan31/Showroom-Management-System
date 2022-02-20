<?php
	
	$id=$_GET['id'];

	session_start();

	$uid=$_SESSION['uid'];


	include("../dbconnect.php");

	$qry=mysqli_query($connect,"select * from tbgallery where id='$id'");

	$data=mysqli_fetch_assoc($qry);

	unlink( $uid."/gallery/".$data['name'].'/'. $data['image']);

	include("../dbconnect.php");

	mysqli_query($connect,"delete from tbgallery where id='$id'");

	header("location:empindex.php?info=vg");
	


	?>