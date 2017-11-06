<?php
	// Connect to database
	require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>
	// form
	<form action="insert_action.php" method="post">
		<label>Name: </label>
		<input type="text" name="Name">
		<br><br>
		<label>Data: </label>
		<input type="text" name="Data">
		<br><br>
		<label>Date: </label>
		<input type="Date" name="Date">
		<br><br>

		<button type="submit">Add</button>
	</form>
</body>
</html>
