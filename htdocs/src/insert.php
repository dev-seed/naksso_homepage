<?php
	include "init.php";
	
	$query = "insert into obt_email(email) value('$email')";
	
	$result = mysql_query($query, $conn);
	
	mysql_close($conn);
?>

