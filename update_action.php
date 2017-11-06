<?php
	// Connect to database
	require 'config.php';

	// Get data from update.php
	$Id = $_POST['Id'];
	$Name = $_POST['Name'];
	$Data = $_POST['Data'];
	$Date = $_POST['Date'];

	// SQL update
	$sql = "UPDATE `testt` SET `Name`='$Name',`Data`='$Data',`Date`='$Date' WHERE testt.Id=$Id";

	// Working
	$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>update_action</title>
</head>
<body>
	<?php
		// Check working
		if ($result == 1) {
			echo "updated";
		}else{
			echo "No update";
		}
	?>
	
	// Link
	<a href="index.php">Home</a>
</body>
</html>
