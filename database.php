<?php
	$host="localhost:3308";
	$user="root";
	$password="";
	$db="electra";

	$conn=mysqli_connect($host,$user,$password,$db);
	if(!$conn)
	{
		echo "Connection Failed!";
	}
	?>