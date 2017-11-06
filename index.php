<?php
	// Connect to database
	require 'config.php';

	// SQL show all data
	$sql = $conn->query("SELECT * FROM `testt`");

	// Working
	$result = $sql->fetch_all();
	print_r($result)
	?>
