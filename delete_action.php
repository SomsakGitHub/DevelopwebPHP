<?php
	require 'config.php';

	$Id = 0;
	$Id = $_POST['Id'];

	$sql = "DELETE FROM `testt` WHERE testt.Id=$Id";

	$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>delaet_action</title>
</head>
<body>
	<?php
		if ($result == 1) {
			echo "Delete success";
		}else{
			echo "Delete unsuccess";
		}
	?>
	<a href="index.php">Home</a>
</body>
</html>