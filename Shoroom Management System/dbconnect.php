<?php 

$connect=mysqli_connect("localhost","root","","showroom");

if(!$connect)
{
	echo("DATABASE NOT CONNECTED");
}
