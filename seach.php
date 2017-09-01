<?php
	require 'config.php';

	$keyword = $_POST['keyword'];

	$sql = "SELECT * FROM `testt` WHERE Name='".$keyword."'";

	$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>search</title>
</head>
<body>
	<table>
		<th>Id</th>
		<th>Name</th>
		<th>Data</th>
		<th>Date</th>

	<?php
		while ($resultZero = mysqli_fetch_array($result)) {
	?>
		<tr>
			<td><?php echo $resultZero['Id']; ?></td>
			<td><?php echo $resultZero['Name']; ?></td>
			<td><?php echo $resultZero['Data']; ?></td>
			<td><?php echo $resultZero['Date']; ?></td>
		</tr>
	<?php	}
	?>
	</table>
<a href="index.php">Home</a>
</body>
</html>
