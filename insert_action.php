<?php
	require 'config.php';

	$Name = $_POST['Name'];
	$Data = $_POST['Data'];
	$Date = $_POST['Date'];

	$check = "SELECT * FROM `testt` WHERE Name='$Name' AND Data='$Data' AND Date='$Date'";

	$resultZero = mysqli_query($conn,$check);

	$resultOne = mysqli_num_rows($resultZero);

	$sql = "INSERT INTO `testt`(`Id`, `Name`, `Data`, `Date`) VALUES (NULL,'$Name','$Data','$Date')";


?>
<!DOCTYPE html>
<html>
<head>
	<title>insert_action</title>
</head>
<body>
	<?php
		if ($resultOne>0) {
			echo "Have data";
		}elseif ($result = $conn->query($sql)) {
			echo "insert success";
		}
	?>
	<a href="index.php">Home</a>
</body>
</html>