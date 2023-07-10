<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");


if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$tailNumber = mysqli_real_escape_string($mysqli, $_POST['tailNumber']);
	$flightID = mysqli_real_escape_string($mysqli, $_POST['flightID']);
	$takeoff = mysqli_real_escape_string($mysqli, $_POST['takeoff']);
	$landing = mysqli_real_escape_string($mysqli, $_POST['landing']);
	$Duration = mysqli_real_escape_string($mysqli, $_POST['Duration']);
	
		
	// Check for empty fields
	if (empty($tailNumber) || empty($flightID) || empty($takeoff) || empty($landing) || empty($Duration)) {
		if (empty($tailNumber)) {
			echo "<font color='red'>tailNumber field is empty.</font><br/>";
		}
		
		if (empty($flightID)) {
			echo "<font color='red'>flightID field is empty.</font><br/>";
		}
		
		if (empty($takeoff)) {
			echo "<font color='red'>takeoff field is empty.</font><br/>";
		}

		if (empty($landing)) {
			echo "<font color='red'>landing field is empty.</font><br/>";
		}

		if (empty($Duration)) {
			echo "<font color='red'>Duration field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`tailNumber`, `flightID`, `takeoff`, `landing`, `Duration`) VALUES ('$tailNumber', '$flightID', '$takeoff', '$landing', '$Duration')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='home.php'>View Result</a>";
	}
}
?>
</body>
</html>
