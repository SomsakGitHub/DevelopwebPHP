<?php
	// Connect to database
	require 'config.php';

	$Id = 0;
	$Id = $_POST['Id'];

	// SQL delete
	$sql = "DELETE FROM `testt` WHERE testt.Id=$Id";

	// Working
	$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>delete_action</title>
</head>
<body>
	<?php
		// Check Working
		if ($result == 1) {
			echo "Delete success";
		}else{
			echo "Delete unsuccess";
		}
	?>
	
	// Link
	<a href="index.php">Home</a>
</body>
</html>
