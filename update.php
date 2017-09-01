<?php
	require 'config.php';

	$Id = $_GET['Id'];

	$sql = "SELECT * FROM `testt` WHERE Id=$Id";

	$result = $conn->query($sql);

	$result->num_rows == 1;

	$update = $result->fetch_array();
?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<form action="update_action.php" method="post">
		<input type="hidden" name="Id" value="<?= @$update[0] ?>">
		<label>Name: </label>
		<input type="text" name="Name" value="<?= @$update[1] ?>">
		<br><br>
		<label>Data: </label>
		<input type="text" name="Data" value="<?= @$update[2] ?>">
		<br><br>
		<label>Name: </label>
		<input type="Date" name="Date" value="<?= @$update[3] ?>">
		<br><br>
		<button type="submit">Update</button>
	</form>
</body>
</html>