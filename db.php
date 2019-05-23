<?php
	try
	{
		$conn = mysqli_connect("localhost","root","","e_commerce");
	}
	catch(mysqli_sql_exception $e)
	{
		echo $e;
	}
?>