<?php
	// Connect to database
	require 'config.php';

	// Get data from insert.php
	$Name = $_POST['Name'];
	$Data = $_POST['Data'];
	$Date = $_POST['Date'];

	// Check repeat data 
	$check = "SELECT * FROM `testt` WHERE Name='$Name' AND Data='$Data' AND Date='$Date'";
	$resultZero = mysqli_query($conn,$check);
	$resultOne = mysqli_num_rows($resultZero);

	// SQL insert data
	$sql = "INSERT INTO `testt`(`Id`, `Name`, `Data`, `Date`) VALUES (NULL,'$Name','$Data','$Date')";


?>
<!DOCTYPE html>
<html>
<head>
	<title>insert_action</title>
</head>
<body>
	<?php
		// Check Working
		if ($resultOne>0) {
			echo "Have data";
		}elseif ($result = $conn->query($sql)) {
			echo "insert success";
		}
	?>
	
	// Link
	<a href="index.php">Home</a>
</body>
</html>
