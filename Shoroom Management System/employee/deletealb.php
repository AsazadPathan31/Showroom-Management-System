<?php
	
	$id=$_GET['name'];

	include("../dbconnect.php");

	$qry=mysqli_query($connect,"select * from tb_bikes where b_name='$id'");

	$data=mysqli_fetch_assoc($qry);

	$qry1=mysqli_query($connect,"select * from tbgallery where name='$id'");

	session_start();

	$uid=$_SESSION['uid'];

	

	unlink( $uid."/albums" .'/'. $data['image']);

	while($data1=mysqli_fetch_assoc($qry1))
	{
		unlink($uid."/gallery".'/'.$data1['name'].'/'. $data1['image']);
	}



	rmdir($uid."./gallery".'/'.$data['name']);


	$name=$data1['b_name'];


	mysqli_query($connect,"delete from tb_bikes where b_name='$id'");

	mysqli_query($connect,"delete from tbgallery where name='$id'");
	

	header("location:empindex.php?info=magbike");
	





	?>