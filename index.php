<?php
	require 'config.php';

	$sql = $conn->query("SELECT * FROM `testt`");

	$result = $sql->fetch_all();
	print_r($result)
	?>