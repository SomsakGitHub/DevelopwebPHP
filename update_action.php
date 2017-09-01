<?php
	require 'config.php';

	$Id = $_POST['Id'];
	$Name = $_POST['Name'];
	$Data = $_POST['Data'];
	$Date = $_POST['Date'];

	$sql = "UPDATE `testt` SET `Name`='$Name',`Data`='$Data',`Date`='$Date' WHERE testt.Id=$Id";

	$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>update_action</title>
</head>
<body>
	<?php
		if ($result == 1) {
			echo "updated";
		}else{
			echo "No update";
		}
	?>
	<a href="index.php">Home</a>
</body>
</html>