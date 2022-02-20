<?php
include('../dbconnect.php');
	
	$info=$_GET['id'];
	
	mysqli_query($connect,"delete from tb_bill where bill_no='$info'");
	header('location:cusindex.php?info=bp');
?>