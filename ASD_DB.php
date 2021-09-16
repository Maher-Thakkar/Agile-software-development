<!DOCTYPE html>
<html>
<head>
	<title>DB</title>
</head>
<body>
	<?php 

		$servername = "localhost";
		$username = "root";
		$password = "";

		//Create Connection
		$conn = new mysqli($servername, $username, $password);

		//Check Connection
		if($conn->connect_error)
		{
			die("Connection Failed: " . $conn->connect_error);
		}
		echo "Connection Succesful!";

	?>
</body>
</html>