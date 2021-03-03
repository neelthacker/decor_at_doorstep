<?php

session_start();

$con=mysqli_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
else{
	// echo "Connection Successfully Established !!<br>";	
	$db=mysqli_select_db($con,'decor_at_doorstep');
	if(isset($db))
	{
	// echo "database selected successfully<br>";		
	}
	else
	{
		die('Could not select database: ' . mysql_error());
	}
}

	?>